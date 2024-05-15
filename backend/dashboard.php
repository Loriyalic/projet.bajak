<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

// Récupérer les données dans l'ordre décroissant (dernière entrée en premier)
$result = mysqli_query($GLOBALS['conn'], "SELECT * FROM Produit ORDER BY id DESC");
?>

<!-- Code HTML avec Bootstrap et CSS -->
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			background-color: #F5F5DC; /* Couleur de fond beige */
		}
		.dashboard {
			margin: 20px;
			text-align: center; /* Centrer le titre du tableau de bord */
		}
		.dashboard h2 {
			margin-bottom: 20px; /* Espace en bas du titre */
		}
		.table {
			border-collapse: collapse;
			width: 100%;
			border: 2px solid #333; /* Bordure plus épaisse */
			border-radius: 10px; /* Coins arrondis */
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Ombre plus sombre */
		}
		.table th, .table td {
			border: 1px solid #333; /* Bordure plus épaisse */
			padding: 15px;
			text-align: left;
			background-color: #fff; /* Fond blanc */
		}
		.table th {
			background-color: #333; /* Fond plus sombre */
			color: #fff; /* Texte blanc */
			font-weight: bold; /* Texte en gras */
		}
		.table td img {
			width: 50px;
			height: 50px;
			border-radius: 50%; /* Coins arrondis pour l'image */
			margin: 10px; /* Marge autour de l'image */
		}
		.actions {
			text-align: center; /* Centrer les actions */
		}
		.actions a {
			margin: 0 10px; /* Marge entre les boutons d'action */
		}
		.add-btn {
			margin: 20px auto; /* Centrer le bouton "Ajouter" */
			display: block; /* Affichage en bloc */
		}
	</style>
	<script>
		function scrollToTop() {
			window.scrollTo({
				top: 0,
				behavior: 'smooth'
			});
		}
	</script>
</head>

<body>
	<div class="dashboard">
		<h2>Dashboard</h2> <!-- Titre du tableau de bord -->
		<p>
			<a href="add.php" class="btn btn-primary add-btn">Ajouter</a> <!-- Bouton "Ajouter" avec style Bootstrap -->
		</p>
		<table class="table"> <!-- Tableau avec style Bootstrap -->
			<thead>
				<tr>
					<th>Nom</th> <!-- En-tête pour le nom -->
					<th>Description</th> <!-- En-tête pour la description -->
					<th>Image</th> <!-- En-tête pour l'image -->
					<th>Prix</th> <!-- En-tête pour le prix -->
					<th>Action</th> <!-- En-tête pour les actions -->
				</tr>
			</thead>
			<tbody>
				<?php
				// Boucler à travers les résultats de la requête SQL
				while ($res = mysqli_fetch_assoc($result)) {
					echo "<tr>"; // Ligne du tableau
					echo "<td>".$res['nom']."</td>"; // Cellule pour afficher le nom
					echo "<td>".$res['description']."</td>"; // Cellule pour afficher la description
					echo "<td><img src='".$res['img']."' width='50' height='50'></td>";	// Cellule pour afficher l'image
					echo "<td>".$res['prix']."</td>"; // Cellule pour afficher le prix
					// Cellule pour les actions (modifier et supprimer)
					echo "<td class='actions'>
							<a href=\"edit.php?id=$res[id]\" class='btn btn-success'>Modifier</a> 
							<a href=\"delete.php?id=$res[id]\" class='btn btn-danger' onClick=\"return confirm('Are you sure you want to delete?')\">Supprimer</a> 
						</td>";
				}
				?>
			</tbody>
		</table>
		<p>
			<a href="http://localhost:8888/projet.bajak/index.php" class="btn btn-secondary" onclick="scrollToTop()">Retour à l'accueil</a> <!-- Bouton "Retour à l'accueil" avec style Bootstrap -->
		</p>
	</div>
</body>
</html>
