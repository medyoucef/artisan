import {
  scenario,
  simulation,
  rampUsers,
  rampUsersPerSec,
  constantUsersPerSec,
  global,
  responseTimeInMillis,
  bodyString,
  css
} from "@gatling.io/core";
import { currentLocationRegex, http, status } from "@gatling.io/http";
import { csv } from "@gatling.io/core";

// ─────────────────────────────────────────
// Configuration HTTP de base
// ─────────────────────────────────────────
const httpProtocol = http
  .baseUrl("http://localhost:8000") // À adapter selon l'environnement staging
  .acceptHeader("application/json, text/html")
  .acceptLanguageHeader("fr-FR,fr;q=0.9")
  .userAgentHeader("Gatling/MonArtisan-PeakSearch")
  .inferHtmlResources(); // Charge automatiquement les ressources liées (css, js)

// ─────────────────────────────────────────
// Chargement des données CSV
// Colonnes attendues : ville, profession
// ─────────────────────────────────────────
const searchFeeder = csv("data/cities.csv").random();

// ─────────────────────────────────────────
// Scénario : Recherche d'artisans par ville
// ─────────────────────────────────────────
const searchScenario = scenario("PERF-01 - Pic de recherche d'artisans")
  .exec(
    http("GET Page Login")
      .get("/auth")
      .check(status().is(200))
      // Extraire le token CSRF depuis le champ hidden du formulaire
      .check(css("input[name='_token']", "value").saveAs("csrfToken"))
  )
  .pause(1, 2)

  .exec(
    http("POST Login")
      .post("/login")
      .formParam("_token", "#{csrfToken}") // Token CSRF Laravel
      .formParam("email", "admin1@test.com") // Champ email du formulaire
      .formParam("password", "password123") // Champ password du formulaire
      .check(status().is(200))
      // Vérifier qu'on est bien redirigé vers le dashboard et non la page de login
      .check(currentLocationRegex("http://localhost:8000"))
  )
  .pause(1, 2)

  // Étape 2 — Charger la page de recherche
  .exec(http("GET Page Artisans").get("/artisans").check(status().is(200)))
  .pause(1, 2)

  // Étape 3 — Soumettre une recherche avec les données du CSV
  .feed(searchFeeder)
  .exec(
    http("GET Recherche Artisans par Ville")
      .get("/artisans")
      .queryParam("ville", "#{ville}")
      .queryParam("profession", "#{profession}")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000)) // Critère : réponse < 2 secondes
      .check(bodyString().exists())
  )
  .pause(1, 3);


// ─────────────────────────────────────────
// Profil de charge
// Objectif : 500 utilisateurs virtuels
// Montée progressive → Pic → Descente
// ─────────────────────────────────────────
export default simulation((setUp) => {
  setUp(
    searchScenario.injectOpen(
      rampUsers(100).during({ amount: 30, unit: "seconds" }), // Montée initiale
      rampUsers(200).during({ amount: 60, unit: "seconds" }), // Montée intermédiaire
      constantUsersPerSec(50).during({ amount: 3, unit: "minutes" }), // Pic : ~50 req/sec
      rampUsersPerSec(50).to(0).during({ amount: 30, unit: "seconds" }) // Descente
    )
  )
    .protocols(httpProtocol)
    .assertions(
      // Temps de réponse P95 sous 2 secondes
      global().responseTime().percentile(95).lte(2000),
      // Taux d'erreur global sous 1%
      global().failedRequests().percent().lte(1),
      // Taux de succès global au-dessus de 99%
      global().successfulRequests().percent().gte(99)
    );
});
