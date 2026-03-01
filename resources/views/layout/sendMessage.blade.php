<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "db_artisan";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Active les erreurs PDO
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifie si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération sécurisée des données du formulaire
    $nom = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $sujet = $_POST["subject"] ?? '';
    $message = $_POST["message"] ?? ''; // ⚠ Assure-toi que le champ HTML s'appelle "message"

    // Préparation et exécution de la requête
    try {
        $stmt = $pdo->prepare("INSERT INTO messages (nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sujet', $sujet);
        $stmt->bindParam(':message', $message);

        $stmt->execute();

        // Redirection avec confirmation
        echo "<script>alert('Message envoyé avec succès !'); window.location.href='../index.php';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erreur SQL : " . $e->getMessage() . "'); window.history.back();</script>";
    }
}
?>
