<?php
// Définition des informations de connexion à la base de données
$servername = "localhost"; // Adresse du serveur de base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = "root"; // Mot de passe de la base de données
$dbname = "Bajak"; // Nom de la base de données à laquelle se connecter

// Création d'une nouvelle connexion à la base de données en utilisant les informations ci-dessus
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion à la base de données
if ($conn->connect_error) {
    // Si la connexion échoue, affiche un message d'erreur et arrête l'exécution du script
    die("Connection failed: " . $conn->connect_error);
}
?>
