import {
  scenario,
  simulation,
  rampUsers,
  rampUsersPerSec,
  constantUsersPerSec,
  global,
  csv,
  responseTimeInMillis,
  bodyString,
  css,
  jsonPath
} from "@gatling.io/core";
import { currentLocationRegex, http, status } from "@gatling.io/http";

// ─────────────────────────────────────────
// Configuration HTTP de base
// ─────────────────────────────────────────
const httpProtocol = http
  .baseUrl("http://localhost:8000")
  .acceptHeader("application/json, text/html")
  .acceptLanguageHeader("fr-FR,fr;q=0.9")
  .userAgentHeader("Gatling/MonArtisan-DevisTunnel")
  .inferHtmlResources();

// ─────────────────────────────────────────
// Chargement des données CSV
// Colonnes attendues :
// email, password, client_id, montant, description
// ─────────────────────────────────────────
const feeder = csv("data/artisantdevis.csv").circular();

// ─────────────────────────────────────────
// Scénario : Login Artisan → Création devis → Envoi devis
// ─────────────────────────────────────────
const devisScenario = scenario("PERF-02 - Tunnel de devis")
  .feed(feeder)

  // ─────────────────────────────────────────
  // BLOC 1 — Authentification Artisan
  // ─────────────────────────────────────────

  // Étape 1 — Charger la page de login + récupérer le token CSRF
  .exec(
    http("GET Page Login")
      .get("/auth")
      .check(status().is(200))
      .check(css("input[name='_token']", "value").saveAs("csrfToken"))
  )
  .pause(1, 2)

  // Étape 2 — Soumettre le formulaire de login en tant qu'artisan
  .exec(
    http("POST Login Artisan")
      .post("/login")
      .formParam("_token", "#{csrfToken}")
      .formParam("email", "artisan1@test.com")
      .formParam("password", "password123")
      .check(status().is(200))
      .check(currentLocationRegex("http://localhost:8000"))
  )
  .pause(1, 2)

  // ─────────────────────────────────────────
  // BLOC 2 — Création du devis (statut Brouillon)
  // ─────────────────────────────────────────

  // Étape 3 — Charger la page de création de devis
  // et récupérer un nouveau token CSRF frais
  .exec(
    http("GET Page Création Devis")
      .get("/conversation/1/devis/create")
      .check(status().is(200))
      .check(css("input[name='_token']", "value").saveAs("csrfToken"))
  )
  .pause(1, 3)

  // Étape 4 — Soumettre le formulaire de création de devis
  // Le devis est créé avec le statut "Brouillon"
  .exec(
    http("POST Créer Devis")
      .post("/conversation/1/devis")
      .formParam("_token", "#{csrfToken}")
      .formParam("montant", "#{montant}")
      .formParam("description", "#{description}")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
  )
  .pause(1, 2)


// ─────────────────────────────────────────
// Profil de charge
// Objectif : 20 transactions/sec
// Montée progressive → Pic → Descente
// ─────────────────────────────────────────
export default simulation((setUp) => {
  setUp(
    devisScenario.injectOpen(
      rampUsers(50).during({ amount: 30, unit: "seconds" }), // Montée initiale
      rampUsers(100).during({ amount: 60, unit: "seconds" }), // Montée intermédiaire
      constantUsersPerSec(20).during({ amount: 3, unit: "minutes" }), // Pic : 20 transactions/sec
      rampUsersPerSec(20).to(0).during({ amount: 30, unit: "seconds" }) // Descente progressive
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
