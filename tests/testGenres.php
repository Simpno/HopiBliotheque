<?php

include_once '../modele/mesFonctionsAccesBDD.php';

$pdo = connect();

$genres = getGenres($pdo);

var_dump($genres);

?>
