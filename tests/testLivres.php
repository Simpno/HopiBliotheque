<?php
// script de test de la fonction getTousLesLivres

include __DIR__ . '/../modele/mesFonctionsAccesBDD.php';
$pdo = connect();

// Appel de la fonction
$livres = getTousLesLivres($pdo);

var_dump($livres);
?>
