import {
  scenario,
  simulation,
  rampUsers,
  constantUsersPerSec,
  rampUsersPerSec,
  global,
  csv,
  responseTimeInMillis,
  bodyString,
  css,
  getParameter
} from "@gatling.io/core";
import { http, status, currentLocationRegex } from "@gatling.io/http";

const baseUrl = getParameter("baseUrl") ?? "http://localhost:8000";

// ─────────────────────────────────────────
// Configuration HTTP de base
// ─────────────────────────────────────────
const httpProtocol = http
  .baseUrl(baseUrl)
  .acceptHeader("application/json, text/html")
  .acceptLanguageHeader("fr-FR,fr;q=0.9")
  .userAgentHeader("Gatling/MonArtisan-NavigationIntensive")
  .inferHtmlResources();

// ─────────────────────────────────────────
// Chargement des données CSV
// Colonnes attendues (usernavigation.csv) :
// email, password, conversation_id, conversation_id_2 (même artisan, deux clients en base)
// ─────────────────────────────────────────
const feeder = csv("data/usernavigation.csv").circular();

// ─────────────────────────────────────────
// Scénario : Navigation intensive
// Parcours : Login → Accueil → Profils →
//            Messagerie → Déconnexion
// Aucune action d'écriture (lecture seule)
// ─────────────────────────────────────────
const navigationScenario = scenario("PERF-03 - Navigation intensive")
  .feed(feeder)

  // ─────────────────────────────────────────
  // BLOC 1 — Authentification
  // ─────────────────────────────────────────

  // Étape 1 — Charger la page de login + token CSRF
  .exec(
    http("GET Page Login")
      .get("/auth")
      .check(status().is(200))
      .check(css("input[name='_token']", "value").saveAs("csrfToken"))
  )
  .pause(1, 2)

  // Étape 2 — Soumettre le formulaire de login
  .exec(
    http("POST Login")
      .post("/login")
      .formParam("_token", "#{csrfToken}")
      .formParam("email", "#{email}")
      .formParam("password", "#{password}")
      .check(status().is(200))
      .check(currentLocationRegex(baseUrl))
  )
  .pause(1, 2)

  // ─────────────────────────────────────────
  // BLOC 2 — Navigation page d'accueil
  // ─────────────────────────────────────────

  // Étape 3 — Charger la page d'accueil
  .exec(
    http("GET Page Accueil")
      .get("/")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
  )
  .pause(2, 4) // Pause plus longue : l'utilisateur lit la page

  // ─────────────────────────────────────────
  // BLOC 3 — Consultation de la liste des artisans
  // ─────────────────────────────────────────

  // Étape 4 — Charger la liste des artisans
  .exec(
    http("GET Liste Artisans")
      .get("/artisans")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(2, 3)

  // ─────────────────────────────────────────
  // BLOC 4 — Consultation de profils individuels
  // Simule un utilisateur qui clique sur
  // plusieurs profils d'artisans
  // ─────────────────────────────────────────

  // Étape 5 — Consulter son profil
  .exec(
    http("GET Profil")
      .get("/profile")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(2, 5) // L'utilisateur lit le profil

  // Étape 6 — Retour à la liste et consultation profil artisan 2
  .exec(
    http("GET Liste companies")
      .get("/company")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
  )
  .pause(1, 2)

  // ─────────────────────────────────────────
  // BLOC 5 — Navigation messagerie (lecture seule)
  // Simule un utilisateur qui consulte
  // ses conversations sans écrire
  // ─────────────────────────────────────────

  // Étape 8 — Charger la liste des conversations
  .exec(
    http("GET Liste Conversations")
      .get("/messages")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(2, 3)

  // Étape 9 — Ouvrir une conversation spécifique
  .exec(
    http("GET Conversation")
      .get("/conversation/#{conversation_id}")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(3, 6) // L'utilisateur lit les messages

  // Étape 10 — Consulter une deuxième conversation
  .exec(
    http("GET Liste Conversations (retour)")
      .get("/messages")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
  )
  .pause(1, 2)

  .exec(
    http("GET Conversation 2")
      .get("/conversation/#{conversation_id_2}")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(2, 4)

  // ─────────────────────────────────────────
  // BLOC 7 — Déconnexion
  // ─────────────────────────────────────────

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
// Profil de charge
// Objectif : 1000 utilisateurs/heure
// Soit ~17 nouveaux utilisateurs/minute
// ─────────────────────────────────────────
export default simulation((setUp) => {
  setUp(
    navigationScenario.injectOpen(
      rampUsers(100).during({ amount: 1, unit: "minutes" }), // Montée initiale
      rampUsers(300).during({ amount: 2, unit: "minutes" }), // Montée intermédiaire
      constantUsersPerSec(17).during({ amount: 45, unit: "minutes" }), // Pic : ~1000 users/heure
      rampUsersPerSec(17).to(0).during({ amount: 2, unit: "minutes" }) // Descente progressive
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
