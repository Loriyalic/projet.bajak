<html>
<head>
	<title>Ajouter</title>
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
		<h2>Ajouter</h2>
		<p>
			<a href="index.php" class="btn btn-secondary">Dashboard</a>
		</p>
		
		<form action="addAction.php" method="post" name="add" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nom">Nom</label>
				<input type="text" name="nom" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="img">Image</label>
				<input type="file" name="img" class="form-control">
			</div>
			<div class="form-group">
				<label for="prix">Prix</label>
				<input type="number" name="prix" step="0.01" class="form-control">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</body>
</html>