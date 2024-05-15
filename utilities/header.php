<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta tags pour le codage des caractères et l'affichage responsive -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Liens vers les feuilles de style externes -->
    <link rel="stylesheet" href="main.css"> <!-- Feuille de style personnalisée -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Bootstrap -->
    
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Titre de la page et icône -->
    <title>Bajak cookie</title>
    <link rel="icon" type="image/png" href="image/favicon-16x16.png" />
</head>
<body>
    <!-- En-tête de la page -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo -->
                <a href="/projet.bajak/index.php"><img src="image/logo bajak.png" alt="" style="max-width: 40%;"></a>
                <!-- Bouton de bascule pour la navigation sur les petits écrans -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Contenu de la barre de navigation -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Liens vers les différentes pages -->
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="produit.php">Nos Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="localisation.php">Où nous trouver</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apropos.php">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php" aria-disabled="true">Contactez nous</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
