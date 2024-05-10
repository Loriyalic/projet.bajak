<?php
require_once 'function/db.fn.php'; // Inclut le fichier contenant la fonction de connexion à la base de données.
include "config/config.php"; // Inclusion du fichier de configuration

try {
    $connection = getPDOlink($config); // Appelle la fonction getPDOlink() du fichier db.fn.php pour établir une connexion à la base de données en utilisant les paramètres de configuration passés en argument.
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : ". $e->getMessage());
}

// Requête SQL pour sélectionner tous les produits
$sql = "SELECT * FROM Produit";

try {
    $result = $connection->query($sql); // Exécute la requête SQL et stocke le résultat dans la variable $result
} catch (PDOException $e) {
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
            if ($result!== false && $result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo isset($row['img'])? htmlspecialchars($row['img']) : '';?>" class="card-img-top img-fluid" alt="<?php echo isset($row['nom'])? htmlspecialchars($row['nom']) : '';?>" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center"> 
                                <h5 class="card-title" style="font-size: 160%; font-weight: bold; font-family: 'Playfair Display', serif;"><?php echo htmlspecialchars($row['nom']);?></h5>
                                <p class="card-text" style="font-family: 'Lato', sans-serif;">Prix: <?php echo htmlspecialchars($row['prix']);?> €</p>
                                <a href="localisation.php" class="btn btn-brown">Nous trouver</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p>Aucun produit trouvé.</p>";
            }
          ?>
        </div>
    </section>
</main>

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