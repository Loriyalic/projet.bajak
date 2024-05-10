<?php
// addAction.php

require_once("dbConnection.php");

$conn = $GLOBALS['conn']; // Use the global connection variable

if (isset($_POST['submit'])) {
    // Check for empty fields
    if (empty($_POST['nom']) || empty($_POST['description']) || empty($_FILES['img']['name']) || empty($_POST['prix'])) {
        $errors = [];
        if (empty($_POST['nom'])) {
            $errors[] = "Le champ Nom est vide.";
        }
        if (empty($_POST['description'])) {
            $errors[] = "Le champ Description est vide.";
        }
        if (empty($_FILES['img']['name'])) {
            $errors[] = "Le champ Image est vide.";
        }
        if (empty($_POST['prix'])) {
            $errors[] = "Le champ Prix est vide.";
        }
        echo "<font color='red'>". implode("<br/>", $errors). "</font><br/>";
        echo "<br/><a href='dashboard.php'>Retour</a>";
    } else {
        // Upload image to server
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir. basename($_FILES["img"]["name"]);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "Le fichier a été téléchargé avec succès.";
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO Produit (`nom`, `description`, `img`, `prix`) VALUES (?,?,?,?)");
        if ($stmt) {
            // Bind the parameters
            $stmt->bind_param("sssd", $nom, $description, $img, $prix);

            // Set the parameters
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $img = $_FILES['img']['name'];
            $prix = $_POST['prix'];

            // Execute the prepared statement
            $stmt->execute();

            // Check if the execution was successful
            if ($stmt->affected_rows > 0) {
                echo "<p><font color='green'>Données ajoutées avec succès!</p>";
                echo "<a href='dashboard.php'>Voir le résultat</a>";
            } else {
                echo "Erreur lors de l'ajout des données.";
            }
        } else {
            echo "Erreur de préparation de la requête : ". $conn->error;
        }

        // Close the prepared statement
        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>