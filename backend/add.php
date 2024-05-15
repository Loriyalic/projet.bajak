<html>
<head>
	<title>Ajouter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			background-color: #F5F5DC; /* Définir la couleur de fond du corps de la page */
		}
		.form-container {
			margin: 20px auto; /* Centrer le conteneur du formulaire */
			width: 50%; /* Définir la largeur du conteneur du formulaire */
			background-color: #fff; /* Définir la couleur de fond du conteneur du formulaire */
			padding: 20px; /* Ajouter un remplissage intérieur au conteneur du formulaire */
			border: 1px solid #ddd; /* Définir une bordure autour du conteneur du formulaire */
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ajouter une ombre au conteneur du formulaire */
		}
		.form-group {
			margin-bottom: 20px; /* Ajouter un espace en bas de chaque groupe de formulaire */
		}
		.form-control {
			width: 100%; /* Définir la largeur à 100% des contrôles de formulaire */
			padding: 10px; /* Ajouter un remplissage intérieur aux contrôles de formulaire */
			border: 1px solid #ccc; /* Définir une bordure autour des contrôles de formulaire */
		}
		.btn {
			width: 100%; /* Définir la largeur à 100% des boutons */
			padding: 10px; /* Ajouter un remplissage intérieur aux boutons */
			background-color: #4CAF50; /* Définir la couleur de fond des boutons */
			color: #fff; /* Définir la couleur du texte des boutons */
			border: none; /* Supprimer la bordure des boutons */
			border-radius: 5px; /* Ajouter un rayon de bordure aux boutons */
			cursor: pointer; /* Définir le curseur de la souris sur pointer */
		}
		.btn:hover {
			background-color: #3e8e41; /* Définir la couleur de fond des boutons au survol */
		}
	</style>
</head>

<body>
	<div class="form-container">
		<h2>Ajouter</h2> <!-- Titre du formulaire -->
		<p>
			<a href="index.php" class="btn btn-secondary">Dashboard</a> <!-- Bouton de lien vers le tableau de bord -->
		</p>
		
		<form action="addAction.php" method="post" name="add" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nom">Nom</label> <!-- Étiquette du champ "Nom" -->
				<input type="text" name="nom" class="form-control"> <!-- Champ de saisie pour le nom -->
			</div>
			<div class="form-group">
				<label for="description">Description</label> <!-- Étiquette du champ "Description" -->
				<textarea name="description" class="form-control"></textarea> <!-- Champ de texte pour la description -->
			</div>
			<div class="form-group">
				<label for="img">Image</label> <!-- Étiquette du champ "Image" -->
				<input type="file" name="img" class="form-control"> <!-- Champ de téléchargement de fichier pour l'image -->
			</div>
			<div class="form-group">
				<label for="prix">Prix</label> <!-- Étiquette du champ "Prix" -->
				<input type="number" name="prix" step="0.01" class="form-control"> <!-- Champ de saisie numérique pour le prix -->
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Add</button> <!-- Bouton de soumission du formulaire -->
		</form>
	</div>
</body>
</html>
