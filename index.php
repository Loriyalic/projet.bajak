<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bajak Cookie</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Inclusion de la feuille de style -->
    <style>
        /* Styles CSS spécifiques à cette page */
        .texte-intermediaire {
            text-align: center; /* Alignement du texte au centre */
            color: #725236; /* Couleur du texte */
            font-family: 'Playfair Display', serif; /* Police Playfair Display */
            margin-right: 7%; /* Marge à droite */
            margin-left: 7%; /* Marge à gauche */
            font-size: 200%; /* Taille du texte augmentée de 10% */
        }

        .texte-intermediaire h2 {
            font-size: 100%; /* Taille du texte */
            font-family: 'Great Vibes', cursive; /* Police Great Vibes, plus calligraphique */
        }

        p {
            font-size: 70%; /* Taille du texte réduite à 70% */
        }
    </style>
</head>
<body>
    <?php include 'utilities/header.php';?> <!-- Inclusion de l'en-tête -->

    <main>
        <section class="hero">
            <div class="bannière-accueil">
                <!-- Bannière principale -->
                <h2> Bajak cookie<br>
                    La tasse qui va te faire croquer
                </h2>
                <a href="produit.php" class="bouton-commander" style="font-size:20%; padding:20%;">Nos produits</a> <!-- Bouton pour accéder aux produits -->
           </div>
        </section>
        <?php include 'concept.php';?> <!-- Inclusion du concept -->
        <div class="texte-intermediaire">
            <!-- Texte intermédiaire -->
            <h2>Le bonheur à disposition</h2>
            <p>Croquez dans un Bajak, c’est partager un plaisir simple, avec les autres ou avec soi-même. 
                C'est offrir un shot de douceur, donner du goût à un jour fade, mettre du soleil dans un jour gris. 
                Derrière un petit Bajak se cache tout un monde merveilleux en mille et une bouchée:</p>
        </div>
        <?php include 'caroussel.php';?> <!-- Inclusion du carrousel -->
    </main>

    <?php include 'utilities/footer.php';?> <!-- Inclusion du pied de page -->
</body>
</html>
