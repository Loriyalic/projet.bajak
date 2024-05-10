<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Use the global connection variable
	$conn = $GLOBALS['conn'];

	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nom = mysqli_real_escape_string($conn, $_POST['nom']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$img = mysqli_real_escape_string($conn, $_FILES['img']['name']);
	$prix = mysqli_real_escape_string($conn, $_POST['prix']);	
	
	// Check for empty fields
	if (empty($nom) || empty($description) || empty($prix)) {
		if (empty($nom)) {
			echo "<font color='red'>Nom field is empty.</font><br/>";
		}
		
		if (empty($description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
		
		if (empty($prix)) {
			echo "<font color='red'>Prix field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($conn, "UPDATE Produit SET `nom` = '$nom', `description` = '$description', `img` = '$img', `prix` = '$prix' WHERE `id` = $id");
		
		// Check for errors
		if (mysqli_error($conn)) {
			echo "Error: ". mysqli_error($conn);
			exit;
		}
		
		// Upload image
		$target_dir = "uploads/";
		$target_file = $target_dir. basename($_FILES["img"]["name"]);
		move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
		
		// Display success message
		echo "<p><font color='green'>Modifications appliqués </p>";
		echo "<a href='dashboard.php'>Voir le resultat</a>";
	}
}