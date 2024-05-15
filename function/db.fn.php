<?php 
// La fonction getPDOlink crée un lien vers la base de données MySQL 
function getPDOlink($config){
    // En utilisant les informations de configuration fournies, la DSN (Data Source Name) est construite pour la connexion PDO.
    $dsn = "mysql:dbname={$config['dbname']};host={$config['dbhost']};port={$config['dbport']} ";

    try {
        // Une nouvelle instance de PDO est créée avec la DSN, le nom d'utilisateur et le mot de passe fournis.
        $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
        
        // Configuration de l'encodage des caractères en UTF-8 pour éviter les problèmes d'encodage.
        $db->exec("SET NAMES UTF8");
        
        // Définition du mode de récupération par défaut des données pour associer les résultats à des tableaux associatifs.
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        // Retourne l'objet PDO nouvellement créé pour la connexion à la base de données.
        return $db;
    } catch (PDOException $e){
        // En cas d'échec de la connexion, elle affiche un message d'erreur explicite.
        exit ('Fail to access database : ' . $e->getMessage());
    }
}
?>
