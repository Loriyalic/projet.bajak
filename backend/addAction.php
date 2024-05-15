<?php
// addAction.php

require_once("dbConnection.php"); // Inclure le fichier de connexion à la base de données

$conn = $GLOBALS['conn']; // Utiliser la variable de connexion globale

if (isset($_POST['submit'])) { // Vérifier si le formulaire a été soumis
    // Vérifier les champs vides
    if (empty($_POST['nom']) || empty($_POST['description']) || empty($_FILES['img']['name']) || empty($_POST['prix'])) {
        $errors = [];
        if (empty($_POST['nom'])) {
            $errors[] = "Le champ Nom est vide."; // Message d'erreur si le champ Nom est vide
        }
        if (empty($_POST['description'])) {
            $errors[] = "Le champ Description est vide."; // Message d'erreur si le champ Description est vide
        }
        if (empty($_FILES['img']['name'])) {
            $errors[] = "Le champ Image est vide."; // Message d'erreur si le champ Image est vide
        }
        if (empty($_POST['prix'])) {
            $errors[] = "Le champ Prix est vide."; // Message d'erreur si le champ Prix est vide
        }
        echo "<font color='red'>". implode("<br/>", $errors). "</font><br/>"; // Afficher les erreurs
        echo "<br/><a href='dashboard.php'>Retour</a>"; // Lien de retour vers le tableau de bord
    } else {
        // Télécharger l'image sur le serveur
        $target_dir = "uploads/"; // Répertoire cible pour les téléchargements
        if (!file_exists($target_dir)) { // Vérifier si le répertoire existe
            mkdir($target_dir, 0777, true); // Créer le répertoire s'il n'existe pas
        }
        $target_file = $target_dir. basename($_FILES["img"]["name"]); // Chemin complet du fichier cible
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) { // Télécharger le fichier
            echo "Le fichier a été téléchargé avec succès."; // Message de succès si le téléchargement est réussi
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier."; // Message d'erreur si le téléchargement échoue
        }

        // Préparer la requête SQL
        $stmt = $conn->prepare("INSERT INTO Produit (`nom`, `description`, `img`, `prix`) VALUES (?,?,?,?)");
        if ($stmt) { // Vérifier si la préparation de la requête est réussie
            // Liée les paramètres
            $stmt->bind_param("sssd", $nom, $description, $img, $prix);

            // Définir les paramètres
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $img = $_FILES['img']['name'];
            $prix = $_POST['prix'];

            // Exécuter la requête préparée
            $stmt->execute();

            // Vérifier si l'exécution a réussi
            if ($stmt->affected_rows > 0) {
                echo "<p><font color='green'>Données ajoutées avec succès!</p>"; // Message de succès si l'ajout est réussi
                echo "<a href='dashboard.php'>Voir le résultat</a>"; // Lien pour voir le résultat dans le tableau de bord
            } else {
                echo "Erreur lors de l'ajout des données."; // Message d'erreur si l'ajout échoue
            }
        } else {
            echo "Erreur de préparation de la requête : ". $conn->error; // Message d'erreur en cas de préparation de la requête échouée
        }

        // Fermer la requête préparée
        $stmt->close();
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
