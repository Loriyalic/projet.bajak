<?php 
// La fonction getPDOlink crée un lien vers la base de données MySQL 
function getPDOlink($config){
// en utilisant les informations de configuration fournies.
$dsn = "mysql:dbname={$config['dbname']};host={$config['dbhost']};port={$config['dbport']} ";


try {
    $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
    $db->exec("SET NAMES UTF8");// Elle configure l'encodage des caractères en UTF-8
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
} catch (PDOException $e){
    exit ('Fail to acces database : ' . $e->getMessage()); //En cas d'échec de la connexion, elle affiche un message d'erreur explicite.
}
}

?>