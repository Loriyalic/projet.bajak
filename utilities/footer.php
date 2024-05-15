<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta tags pour le codage des caractères et l'affichage responsive -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Liens vers les feuilles de style externes -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    
    <!-- Styles CSS internes -->
    <style>
        body {
            margin: 0;
        }
        a {
            color: #663300;
        }
        main {
            flex: 1;
        }
        footer {
            color: #663300; /* Marron */
            padding: 20px 0;
            width: 100%;
            background-color: #c28b52; /* Beige foncé */
        }
        .container {
            padding: 0;
        }
        .row {
            margin: 0;
        }
        .mb-3 {
            margin-bottom: 3rem !important;
        }
        .list-unstyled li {
            margin-bottom: 0.5rem;
        }
        .copyright {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <!-- Contenu du pied de page -->
    <footer class="text-center text-white">
        <div class="container">
            <!-- Section de navigation -->
            <div class="row">
                <div class="col-md-3 mb-3">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li><a href="produit.php" class="text-white">Produits</a></li>
                        <li><a href="presse.php" class="text-white">Presse</a></li>
                        <li><a href="apropos.php" class="text-white">À propos de nous</a></li>
                        <li><a href="contact.php" class="text-white">Nous contacter</a></li>
                    </ul>
                </div>
                <!-- Section des réseaux sociaux -->
                <div class="col-md-3 mb-3">
                    <h5>Réseaux sociaux</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.instagram.com" class="text-white" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="https://www.facebook.com" class="text-white" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="https://www.tiktok.com" class="text-white" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a></li>
                    </ul>
                </div>
                <!-- Section légale -->
                <div class="col-md-6 mb-3">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="mentions.php" class="text-white">Mention légale</a></li>
                        <li><a href="confidentiel.php" class="text-white">Confidentialité et données personnelles</a></li>
                        <li><a href="backend/admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mention de copyright avec l'année actuelle -->
        <div class="text-center p-3 copyright">
            <?php echo '© ' . date("Y"); ?>
        </div>
    </footer>

    <!-- Script Bootstrap -->
    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
