<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($GLOBALS['conn'], "SELECT * FROM Produit ORDER BY id DESC");
?>

<!-- HTML code with Bootstrap and CSS -->
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			background-color: #F5F5DC; /* beige background color */
		}
		.dashboard {
			margin: 20px;
			text-align: center; /* center the dashboard title */
		}
		.dashboard h2 {
			margin-bottom: 20px;
		}
		.table {
			border-collapse: collapse;
			width: 100%;
			border: 2px solid #333; /* thicker border */
			border-radius: 10px; /* rounded corners */
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* darker shadow */
		}
		.table th,.table td {
			border: 1px solid #333; /* thicker border */
			padding: 15px;
			text-align: left;
			background-color: #fff;
		}
		.table th {
			background-color: #333; /* darker background */
			color: #fff; /* white text */
			font-weight: bold;
		}
		.table td img {
			width: 50px;
			height: 50px;
			border-radius: 50%;
			margin: 10px;
		}
		.actions {
			text-align: center;
		}
		.actions a {
			margin: 0 10px;
		}
		.add-btn {
			margin: 20px auto; /* center the "Ajouter" button */
			display: block;
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
		<h2>Dashboard</h2>
		<p>
			<a href="add.php" class="btn btn-primary add-btn">Ajouter</a>
		</p>
		<table class="table">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Description</th>
					<th>Image</th>
					<th>Prix</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Fetch the next row of a result set as an associative array
				while ($res = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$res['nom']."</td>";
					echo "<td>".$res['description']."</td>";
					echo "<td><img src='uploads/".$res['img']."' width='50' height='50'></td>";	
					echo "<td>".$res['prix']."</td>";
					echo "<td class='actions'>
							<a href=\"edit.php?id=$res[id]\" class='btn btn-success'>Modifier</a> 
							<a href=\"delete.php?id=$res[id]\" class='btn btn-danger' onClick=\"return confirm('Are you sure you want to delete?')\">Supprimer</a>
						</td>";
				}
				?>
			</tbody>
		</table>
		<p>
			<a href="http://localhost:8888/projet.bajak/index.php" class="btn btn-secondary" onclick="scrollToTop()">Retour à l'accueil</a>
		</p>
	</div>
</body>
</html>