<?php
// Inclure le fichier de connexion à la base de données
require_once 'dbConnection.php';

// Récupérer l'identifiant depuis la requête GET
$id = $_GET['id'];

// Vérifier si l'identifiant est défini et est un entier positif
if (isset($id) && is_numeric($id) && $id > 0) {
    // Construire la requête SQL de suppression en utilisant l'identifiant récupéré
    $sql = "DELETE FROM Produit WHERE id = $id";

    // Exécuter la requête SQL de suppression
    if ($conn->query($sql) === TRUE) {
        // Afficher un message de succès si la suppression a réussi
        echo "Record deleted successfully";
    } else {
        // Afficher un message d'erreur s'il y a eu un problème lors de la suppression
        echo "Error deleting record: ". $conn->error;
    }
} else {
    // Afficher un message d'erreur si l'identifiant est invalide
    echo "Invalid id";
}

// Fermer la connexion à la base de données
$conn->close();

// Redirection vers le tableau de bord (dashboard.php)
header('Location: dashboard.php');
exit;
?>
