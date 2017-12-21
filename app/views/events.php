<?php

$json = array();

$requete = "SELECT * FROM trn_availability";

try {
    require "db_config.php";
} catch(Exception $e) {
    exit('Unable to connect to database.');
}

$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
die(var_dump('hi'));
?>/