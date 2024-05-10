<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Use the global connection variable
$conn = $GLOBALS['conn'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM Produit WHERE id = $id");

// Check for errors
if (mysqli_error($conn)) {
    echo "Error: ". mysqli_error($conn);
    exit;
}

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nom = $resultData['nom'];
$description = $resultData['description'];
$img = $resultData['img'];
$prix = $resultData['prix'];
?>
<html>
<head>
	<title>Modifier</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			background-color: #F5F5DC; /* beige background color */
		}
		.form-container {
			margin: 20px auto; /* center the form container */
			width: 50%;
			background-color: #fff;
			padding: 20px;
			border: 1px solid #ddd;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.form-group {
			margin-bottom: 20px;
		}
		.form-control {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
		}
		.btn {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
</head>

<body>
	<div class="form-container">
		<h2>Modifier</h2>
		<p>
			<a href="index.php" class="btn btn-secondary">Dashboard</a>
		</p>
		
		<form name="edit" method="post" action="editAction.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nom">Nom</label>
				<input type="text" name="nom" value="<?php echo $nom;?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" class="form-control"><?php echo $description;?></textarea>
			</div>
			<div class="form-group">
				<label for="img">Image</label>
				<input type="file" name="img" value="<?php echo $img;?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="prix">Prix</label>
				<input type="text" name="prix" value="<?php echo $prix;?>" class="form-control">
			</div>
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<button type="submit" name="update" class="btn btn-primary">Update</button>
		</form>
	</div>
</body>
</html>