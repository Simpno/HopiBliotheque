<?php

include_once '../modele/mesFonctionsAccesBDD.php';

$pdo = connect();

$genres = getRecherche($titre, $genres);

var_dump($genres);

?>
