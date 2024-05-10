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
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .texte-intermediaire {
            text-align: center;
            color: #725236; 
            font-family: 'Playfair Display', serif; /* police Playfair Display */
            margin-right:7%;
            margin-left:7%;
            font-size: 200%; /* taille du texte augmentée de 10% */
        }
        .texte-intermediaire h2 {
            font-size: 100%;
            font-family: 'Great Vibes', cursive; /* police Great Vibes, plus calligraphique */
        }
        p {
            font-size: 70%;
        }
    </style>
</head>
<body>
    <?php include 'utilities/header.php';?>

    <main>
        <section class="hero">
            <div class="bannière-accueil">
                <h2> Bajak cookie<br>
                    La tasse qui va te faire croquer
                </h2>
                <a href="produit.php" class="bouton-commander" style="font-size:20%; padding:20%;">Nos produits</a> 
           </div>
        </section>
        <?php include 'concept.php';?>
        <div class="texte-intermediaire">
            <h2>Le bonheur à disposition</h2>
            <p>Croquez dans un Bajak, c’est partager un plaisir simple, avec les autres ou avec soi-même. 
                C'est offrir un shot de douceur, donner du goût à un jour fade, mettre du soleil dans un jour gris. 
                Derrière un petit Bajak se cache tout un monde merveilleux en mille et une bouchée:</p>
        </div>
        <?php include 'caroussel.php';?>
    </main>

    <?php include 'utilities/footer.php';?>
</body>
</html>