<?php
$rootPath = dirname(__DIR__, 1);
require_once $rootPath . '/modele/mesFonctionsAccesBDD.php';

$pdo = connect();

$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) die("ID du livre non valide.");

$livre = getDetailLivre($pdo, $id);
if (!$livre) die("Livre non trouvé.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    mettreAJourLivre($pdo, $id, $_POST['titre'], $_POST['auteur'], $_POST['date_sortie'], $_POST['resume']);
    header("Location: index.php?action=detail-livre&id=$id");
    exit;
}

// **Ne pas inclure le header ici**
// Juste inclure la vue
include $rootPath . '/vue/vueModifierLivre.php';
?>
