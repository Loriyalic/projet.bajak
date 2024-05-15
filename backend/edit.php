<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

// Récupérer l'identifiant depuis le paramètre d'URL
$id = $_GET['id'];

// Utiliser la variable de connexion globale
$conn = $GLOBALS['conn'];

// Sélectionner les données associées à cet identifiant particulier
$result = mysqli_query($conn, "SELECT * FROM Produit WHERE id = $id");

// Vérifier les erreurs
if (mysqli_error($conn)) {
    // Afficher un message d'erreur et arrêter le script en cas d'erreur SQL
    echo "Error: ". mysqli_error($conn);
    exit;
}

// Récupérer la prochaine ligne du résultat en tant qu'array associatif
$resultData = mysqli_fetch_assoc($result);

// Récupérer les données spécifiques à partir de l'array associatif
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
			background-color: #F5F5DC; /* Couleur de fond beige */
		}
		.form-container {
			margin: 20px auto; /* Centrer le conteneur de formulaire */
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
		<h2>Modifier</h2> <!-- Titre du formulaire de modification -->
		<p>
			<a href="index.php" class="btn btn-secondary">Dashboard</a> <!-- Bouton "Dashboard" avec style Bootstrap -->
		</p>
		
		<form name="edit" method="post" action="editAction.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nom">Nom</label>
				<input type="text" name="nom" value="<?php echo $nom;?>" class="form-control"> <!-- Champ de saisie pour le nom avec la valeur pré-remplie -->
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" class="form-control"><?php echo $description;?></textarea> <!-- Champ de saisie pour la description avec la valeur pré-remplie -->
			</div>
			<div class="form-group">
				<label for="img">Image</label>
				<input type="file" name="img" value="<?php echo $img;?>" class="form-control"> <!-- Champ de saisie pour l'image -->
			</div>
			<div class="form-group">
				<label for="prix">Prix</label>
				<input type="text" name="prix" value="<?php echo $prix;?>" class="form-control"> <!-- Champ de saisie pour le prix avec la valeur pré-remplie -->
			</div>
			<input type="hidden" name="id" value="<?php echo $id;?>"> <!-- Champ caché pour l'identifiant -->
			<button type="submit" name="update" class="btn btn-primary">Update</button> <!-- Bouton "Update" avec style Bootstrap -->
		</form>
	</div>
</body>
</html>
