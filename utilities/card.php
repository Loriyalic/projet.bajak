<?php
// Inclusion du fichier contenant la fonction de connexion à la base de données.
require_once 'function/db.fn.php';

// Inclusion du fichier de configuration
include "config/config.php";

try {
    // Appelle la fonction getPDOlink() du fichier db.fn.php pour établir une connexion à la base de données en utilisant les paramètres de configuration passés en argument.
    $connection = getPDOlink($config);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, affiche un message d'erreur et arrête l'exécution du script.
    die("Erreur de connexion à la base de données : ". $e->getMessage());
}

// Requête SQL pour sélectionner tous les produits
$sql = "SELECT * FROM Produit";

try {
    // Exécute la requête SQL et stocke le résultat dans la variable $result
    $result = $connection->query($sql);
} catch (PDOException $e) {
    // En cas d'erreur lors de l'exécution de la requête SQL, affiche un message d'erreur et arrête l'exécution du script.
    die("Erreur lors de l'exécution de la requête SQL : ". $e->getMessage());
}
?>

<main>
    <section class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4" style="font-family: 'roboto', serif;">Croquer pour nos tasses</h1>
                <p class="lead" style="font-family: 'Lato', sans-serif;">Disponible uniquement en boutique</p>
            </div>
        </div>
        <div class="row">
            <?php
            // Vérifie si des produits ont été trouvés
            if ($result !== false && $result->rowCount() > 0) {
                // Boucle à travers chaque produit trouvé
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <!-- Affiche l'image du produit -->
                            <img src="<?php echo isset($row['img']) ? htmlspecialchars($row['img']) : '';?>" class="card-img-top img-fluid" alt="<?php echo isset($row['nom']) ? htmlspecialchars($row['nom']) : '';?>">
                            <div class="card-body text-center"> 
                                <!-- Affiche le nom du produit -->
                                <h5 class="card-title" style="font-size: 160%; font-weight: bold; font-family: 'Playfair Display', serif;"><?php echo htmlspecialchars($row['nom']);?></h5>
                                <!-- Affiche le prix du produit -->
                                <p class="card-text" style="font-family: 'Lato', sans-serif;">Prix: <?php echo htmlspecialchars($row['prix']);?> €</p>
                                <!-- Lien vers la page de localisation -->
                                <a href="localisation.php" class="btn btn-brown">Nous trouver</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                // Affiche un message si aucun produit n'est trouvé
                echo "<p>Aucun produit trouvé.</p>";
            }
            ?>
        </div>
    </section>
</main>

<!-- Styles CSS -->
<style>
 .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
 .card-body {
        padding: 20px;
    }
 .card-title {
        margin-bottom: 10px;
    }
 .btn-brown {
        background-color: #795548;
        border-color: #6d4c41;
        color: #fff;
    }
 .btn-brown:hover {
        background-color: #6d4c41;
        border-color: #5d4037;
    }
   body {
        font-family: 'Lato', sans-serif;
    }
</style>
