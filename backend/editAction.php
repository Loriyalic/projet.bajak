<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Utiliser la variable de connexion globale
	$conn = $GLOBALS['conn'];

	// Échapper les caractères spéciaux dans une chaîne pour une utilisation dans une instruction SQL
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nom = mysqli_real_escape_string($conn, $_POST['nom']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$img = mysqli_real_escape_string($conn, $_FILES['img']['name']);
	$prix = mysqli_real_escape_string($conn, $_POST['prix']);	
	
	// Vérifier les champs vides
	if (empty($nom) || empty($description) || empty($prix)) {
		if (empty($nom)) {
			echo "<font color='red'>Le champ Nom est vide.</font><br/>";
		}
		
		if (empty($description)) {
			echo "<font color='red'>Le champ Description est vide.</font><br/>";
		}
		
		if (empty($prix)) {
			echo "<font color='red'>Le champ Prix est vide.</font><br/>";
		}
	} else {
		// Mettre à jour la table de la base de données
		$result = mysqli_query($conn, "UPDATE Produit SET `nom` = '$nom', `description` = '$description', `img` = '$img', `prix` = '$prix' WHERE `id` = $id");
		
		// Vérifier les erreurs
		if (mysqli_error($conn)) {
			echo "Error: ". mysqli_error($conn);
			exit;
		}
		
		// Télécharger l'image
		$target_dir = "uploads/";
		$target_file = $target_dir. basename($_FILES["img"]["name"]);
		move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
		
		// Afficher un message de succès
		echo "<p><font color='green'>Modifications appliquées.</p>";
		echo "<a href='dashboard.php'>Voir le résultat</a>";
	}
}
?>
