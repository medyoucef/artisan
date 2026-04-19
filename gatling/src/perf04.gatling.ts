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
  .userAgentHeader("Gatling/MonArtisan-MultiRole")
  .inferHtmlResources();

// ─────────────────────────────────────────
// Chargement des données CSV par rôle
// Chaque fichier contient les credentials
// propres à chaque type d'utilisateur
// ─────────────────────────────────────────
const clientFeeder = csv("data/clients.csv").circular();
const artisanFeeder = csv("data/artisans.csv").circular();
const adminFeeder = csv("data/admin.csv").circular();

// ─────────────────────────────────────────
// Utilitaire commun — Login
// Réutilisé par les 3 scénarios de rôle
// ─────────────────────────────────────────
const login = (label: string) => [
  http(`GET Page Login - ${label}`)
    .get("/auth")
    .check(status().is(200))
    .check(css("input[name='_token']", "value").saveAs("csrfToken")),

  http(`POST Login - ${label}`)
    .post("/login")
    .formParam("_token", "#{csrfToken}")
    .formParam("email", "#{email}")
    .formParam("password", "#{password}")
    .check(status().is(200))
    .check(responseTimeInMillis().lte(2000))
    .check(currentLocationRegex(baseUrl))
];

// ─────────────────────────────────────────
// SCÉNARIO RÔLE 1 — Client
// Parcours : Login → Accueil →
//            Recherche artisans →
//            Consultation devis → Logout
// ─────────────────────────────────────────
const clientScenario = scenario("PERF-04 - Rôle Client")
  .feed(clientFeeder)

  // Étape 1 — Login client
  .exec(login("Client")[0])
  .pause(1, 2)
  .exec(login("Client")[1])
  .pause(1, 2)

  // Étape 2 — Page d'accueil
  .exec(
    http("GET Accueil - Client")
      .get("/")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
  )
  .pause(1, 3)

  // Étape 3 — Recherche d'artisans
  .exec(
    http("GET Artisans - Client")
      .get("/artisans")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(1, 2)

  // Étape 4 — Consultation de la liste des devis du client
  .exec(
    http("GET Mes Devis - Client")
      .get("/mes-devis")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(2, 4)

  // Étape 6 — Logout client
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
// SCÉNARIO RÔLE 2 — Artisan
// Parcours : Login → Accueil →
//            Mes devis → Créer devis →
//            Messagerie → Logout
// ─────────────────────────────────────────
const artisanScenario = scenario("PERF-04 - Rôle Artisan")
  .feed(artisanFeeder)

  // Étape 1 — Login artisan
  .exec(login("Artisan")[0])
  .pause(1, 2)
  .exec(login("Artisan")[1])
  .pause(1, 2)

  // Étape 2 — Page d'accueil
  .exec(
    http("GET Accueil - Artisan")
      .get("/")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
  )
  .pause(1, 2)

  // Étape 3 — Consultation de ses devis
  .exec(
    http("GET Mes Devis - Artisan")
      .get("/mes-devis")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(2, 3)

  // Étape 5 — Consultation de son profil
  .exec(
    http("GET Mon Profil - Artisan")
      .get("/profile")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(1, 3)

  // Étape 6 — Messagerie artisan
  .exec(
    http("GET Messagerie - Artisan")
      .get("/messages")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(1, 2)

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
// SCÉNARIO RÔLE 3 — Administrateur
// Parcours : Login → Dashboard →
//            Gestion artisans →
//            Gestion professions →
//            Gestion devis →
//            Gestion messages → Logout
// ─────────────────────────────────────────
const adminScenario = scenario("PERF-04 - Rôle Administrateur")
  .feed(adminFeeder)

  // Étape 1 — Login admin
  .exec(login("Admin")[0])
  .pause(1, 2)
  .exec(login("Admin")[1])
  .pause(1, 2)

  // Étape 2 — Tableau de bord admin
  .exec(
    http("GET Dashboard - Admin")
      .get("/admin/dashboard")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(2, 3)

  // Étape 3 — Gestion des artisans
  .exec(
    http("GET Gestion Artisans - Admin")
      .get("/admin/artisans")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(1, 3)

  // Étape 4 — Gestion des professions
  .exec(
    http("GET Gestion Professions - Admin")
      .get("/admin/professions")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(1, 2)

  // Étape 5 — Gestion des devis
  .exec(
    http("GET Gestion Utilisateurs - Admin")
      .get("/admin/users")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(1, 3)

  // Étape 6 — Gestion des messages
  .exec(
    http("GET Gestion Messages - Admin")
      .get("/admin/messages")
      .check(status().is(200))
      .check(responseTimeInMillis().lte(2000))
      .check(bodyString().exists())
  )
  .pause(1, 2)

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
// Profil de charge — Multi-rôles simultanés
// Objectif : 200 utilisateurs simultanés
// Répartition :
//   - 100 Clients    (50%)
//   - 70  Artisans   (35%)
//   - 30  Admins     (15%)
// Durée totale : 30 minutes
// (critère CPU/RAM sans fuite mémoire)
// ─────────────────────────────────────────
export default simulation((setUp) => {
  setUp(
    // Injection Clients — 100 VU
    clientScenario.injectOpen(
      rampUsers(50).during({ amount: 1, unit: "minutes" }),
      rampUsers(50).during({ amount: 2, unit: "minutes" }),
      constantUsersPerSec(3).during({ amount: 25, unit: "minutes" }),
      rampUsersPerSec(3).to(0).during({ amount: 2, unit: "minutes" })
    ),

    // Injection Artisans — 70 VU
    artisanScenario.injectOpen(
      rampUsers(35).during({ amount: 1, unit: "minutes" }),
      rampUsers(35).during({ amount: 2, unit: "minutes" }),
      constantUsersPerSec(2).during({ amount: 25, unit: "minutes" }),
      rampUsersPerSec(2).to(0).during({ amount: 2, unit: "minutes" })
    ),

    // Injection Admins — 30 VU
    adminScenario.injectOpen(
      rampUsers(15).during({ amount: 1, unit: "minutes" }),
      rampUsers(15).during({ amount: 2, unit: "minutes" }),
      constantUsersPerSec(1).during({ amount: 25, unit: "minutes" }),
      rampUsersPerSec(1).to(0).during({ amount: 2, unit: "minutes" })
    )
  )
    .protocols(httpProtocol)
    .assertions(
      // Temps de réponse P95 sous 2 secondes pour tous les rôles
      global().responseTime().percentile(95).lte(2000),
      // Taux d'erreur global sous 1%
      global().failedRequests().percent().lte(1),
      // Taux de succès global au-dessus de 99%
      global().successfulRequests().percent().gte(99)
    );
});
