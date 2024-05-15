<?php
require_once("dbConnection.php"); // Inclure le fichier de connexion à la base de données

// Fonctionnalité de connexion
if (isset($_POST['submit'])) { // Vérifier si le formulaire a été soumis
    $admin_email = $_POST['admin_email']; // Récupérer l'e-mail de l'administrateur
    $admin_password = $_POST['admin_password']; // Récupérer le mot de passe de l'administrateur

    // Requête pour récupérer les données de l'utilisateur
    $query = "SELECT * FROM admins WHERE admin_email =? AND admin_password =?";
    $stmt = $conn->prepare($query); // Préparer la requête
    $stmt->bind_param("ss", $admin_email, $admin_password); // Lier les paramètres
    $stmt->execute(); // Exécuter la requête
    $result = $stmt->get_result(); // Récupérer le résultat de la requête

    if ($result->num_rows > 0) { // Vérifier si des résultats ont été retournés
        // Connexion réussie, redirection vers le tableau de bord de l'administrateur
        header('Location: dashboard.php');
        exit; // Arrêter l'exécution du script
    } else {
        $error = 'Invalid email or password'; // Message d'erreur si l'e-mail ou le mot de passe est invalide
    }
}

// HTML et modèle Bootstrap
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('image/panelle.JPEG'); /* Définir l'image d'arrière-plan */
            background-size: cover; /* Redimensionner l'image pour couvrir toute la surface */
            background-blur: 5px; /* Appliquer un flou à l'arrière-plan */
        }
        .container {
            max-width: 300px; /* Définir la largeur maximale du conteneur */
            margin: 40px auto; /* Centrer le conteneur horizontalement avec une marge en haut et en bas */
            padding: 20px; /* Ajouter un remplissage intérieur au conteneur */
            background-color: #fff; /* Couleur de fond du conteneur */
            border: 1px solid #ddd; /* Ajouter une bordure au conteneur */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ajouter une ombre au conteneur */
        }
        .logo {
            width: 100px; /* Définir la largeur du logo */
            height: 100px; /* Définir la hauteur du logo */
            margin: 20px auto; /* Centrer le logo horizontalement avec une marge en haut et en bas */
            border-radius: 50%; /* Appliquer un rayon de bordure pour obtenir une forme de cercle */
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="image/logo bajak.png" alt="Logo" class="logo"> <!-- Insérer le logo -->
        <h2 class="text-center">Dashboard</h2> <!-- Titre du tableau de bord -->
        <?php if (isset($error)) {?> <!-- Vérifier si une erreur est définie -->
            <div class="alert alert-danger"><?= $error?></div> <!-- Afficher l'erreur dans une alerte -->
        <?php }?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <!-- Formulaire de connexion -->
            <div class="form-group">
                <label for="admin_email">Email</label> <!-- Champ pour l'e-mail de l'administrateur -->
                <input type="email" id="admin_email" name="admin_email" class="form-control"> <!-- Champ d'entrée de l'e-mail -->
            </div>
            <div class="form-group">
                <label for="admin_password">mot de passe</label> <!-- Champ pour le mot de passe de l'administrateur -->
                <input type="password" id="admin_password" name="admin_password" class="form-control"> <!-- Champ d'entrée du mot de passe -->
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Connexion</button> <!-- Bouton de connexion -->
        </form>
    </div>
</body>
</html>
