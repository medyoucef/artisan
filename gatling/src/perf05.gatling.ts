import {
  scenario,
  simulation,
  rampUsersPerSec,
  global,
  csv,
  responseTimeInMillis,
  bodyString,
  css,
  rampUsers
} from "@gatling.io/core";
import { http, status, currentLocationRegex } from "@gatling.io/http";

// ─────────────────────────────────────────
// Configuration HTTP de base
// ─────────────────────────────────────────
const httpProtocol = http
  .baseUrl("http://localhost:8000")
  .acceptHeader("application/json, text/html")
  .acceptLanguageHeader("fr-FR,fr;q=0.9")
  .userAgentHeader("Gatling/MonArtisan-StressTest")
  .inferHtmlResources();

// ─────────────────────────────────────────
// Chargement des données CSV
// Colonnes attendues :
// email, password, ville, profession
// ─────────────────────────────────────────
const feeder = csv("data/userscities.csv").circular();

// ─────────────────────────────────────────
// Scénario : Stress pur
// Pas de pauses — pression maximale
// sur le serveur pour identifier
// le point de rupture
// ─────────────────────────────────────────
const stressScenario = scenario("PERF-05 - Stress pur / Point de rupture")
  .feed(feeder)

  // ─────────────────────────────────────────
  // BLOC 1 — Authentification
  // Sans pause pour maximiser la pression
  // ─────────────────────────────────────────

  // Étape 1 — Récupérer le token CSRF
  .exec(
    http("GET Page Login")
      .get("/auth")
      .check(status().is(200))
      .check(css("input[name='_token']", "value").saveAs("csrfToken"))
  )

  // Étape 2 — Login immédiat sans pause
  .exec(
    http("POST Login")
      .post("/login")
      .formParam("_token", "#{csrfToken}")
      .formParam("email", "#{email}")
      .formParam("password", "#{password}")
      .check(status().is(200))
      .check(currentLocationRegex("http://localhost:8000"))
  )

  // ─────────────────────────────────────────
  // BLOC 2 — Séquence de requêtes critiques
  // Enchaînement sans pause des endpoints
  // les plus sollicités en production
  // ─────────────────────────────────────────

  // Étape 3 — Page d'accueil
  .exec(
    http("GET Accueil")
      .get("/")
      .check(status().in(200, 429)) // 429 = Too Many Requests attendu sous stress
      .check(responseTimeInMillis().saveAs("responseTimeAccueil"))
  )

  // Étape 4 — Liste des artisans
  .exec(
    http("GET Liste Artisans")
      .get("/artisans")
      .check(status().in(200, 429))
      .check(responseTimeInMillis().saveAs("responseTimeArtisans"))
  )

  // Étape 5 — Recherche d'artisans par ville
  .exec(
    http("GET Recherche Artisans")
      .get("/artisans/search")
      .queryParam("ville", "#{ville}")
      .queryParam("profession", "#{profession}")
      .check(status().in(200, 429, 503)) // 503 = Service Unavailable proche rupture
      .check(responseTimeInMillis().saveAs("responseTimeRecherche"))
  )

  // Étape 6 — Liste des devis
  .exec(
    http("GET Liste Devis")
      .get("/mes-devis")
      .check(status().in(200, 429, 503))
      .check(responseTimeInMillis().saveAs("responseTimeDevis"))
  )

  // Étape 8 — Profil utilisateur
  .exec(
    http("GET Profil")
      .get("/profile")
      .check(status().in(200, 429, 503))
      .check(responseTimeInMillis().saveAs("responseTimeProfil"))
  )

  // ─────────────────────────────────────────
  // BLOC 3 — Déconnexion
  // ─────────────────────────────────────────
  // Étape 7 — Logout admin
  .exec(
    http("GET Page Accueil")
      .get("/")
      .check(status().is(200))
      .check(css("input[name='_token']", "value").saveAs("csrfToken"))
  )
  .pause(1, 2)
  // Étape 12 — Déconnexion propre
  .exec(
    http("POST Logout").post("/logout").formParam("_token", "#{csrfToken}").check(status().is(200))
  );

// ─────────────────────────────────────────
// Profil de charge — Montée progressive
// jusqu'au point de rupture
//
// Paliers :
//   0   → 100  VU  sur  1 min  (charge légère)
//   100 → 250  VU  sur  2 min  (charge normale)
//   250 → 500  VU  sur  2 min  (charge élevée)
//   500 → 750  VU  sur  2 min  (charge critique)
//   750 → 1000 VU  sur  2 min  (saturation)
//  1000 → 1500 VU  sur  2 min  (au-delà rupture)
//  descente immédiate
//
// Pas de pauses dans le scénario = pression
// maximale à chaque palier
// ─────────────────────────────────────────
export default simulation((setUp) => {
  setUp(
    stressScenario.injectOpen(
      // Palier 1 — Charge légère : warm-up
      rampUsersPerSec(0).to(10).during({ amount: 1, unit: "minutes" }),

      // Palier 2 — Charge normale
      rampUsersPerSec(10).to(25).during({ amount: 2, unit: "minutes" }),

      // Palier 3 — Charge élevée
      rampUsersPerSec(25).to(50).during({ amount: 2, unit: "minutes" }),

      // Palier 4 — Charge critique
      rampUsersPerSec(50).to(75).during({ amount: 2, unit: "minutes" }),

      // Palier 5 — Saturation attendue
      rampUsersPerSec(75).to(100).during({ amount: 2, unit: "minutes" }),

      // Palier 6 — Au-delà du point de rupture
      rampUsersPerSec(100).to(150).during({ amount: 2, unit: "minutes" }),

      // Descente immédiate après rupture identifiée
      rampUsersPerSec(150).to(0).during({ amount: 1, unit: "minutes" })
    )
  )
    .protocols(httpProtocol)
    .assertions(
      // Seuils volontairement assouplis pour PERF-05
      // L'objectif est d'observer la dégradation,
      // pas de passer le test

      // On accepte jusqu'à 5% d'erreurs
      // avant de considérer le système rompu
      global().failedRequests().percent().lte(5),

      // P99 sous 10 secondes
      // (dégradation acceptable sous stress extrême)
      global().responseTime().percentile(99).lte(10000),

      // Le système doit traiter au moins
      // 80% des requêtes avec succès
      global().successfulRequests().percent().gte(80)
    );
});
