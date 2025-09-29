<div class="form-container">
    <h1>Modifier le livre</h1>
    <form method="POST">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" value="<?= htmlspecialchars($livre['titre']) ?>" required>

        <label for="auteur">Auteur :</label>
        <input type="text" id="auteur" name="auteur" value="<?= htmlspecialchars($livre['auteur']) ?>" required>

        <label for="date_sortie">Date de sortie :</label>
        <input type="date" id="date_sortie" name="date_sortie" value="<?= htmlspecialchars($livre['date_sortie']) ?>" required>

        <label for="resume">Résumé :</label>
        <textarea id="resume" name="resume" required><?= htmlspecialchars($livre['resume']) ?></textarea>

        <button type="submit">Sauvegarder les modifications</button>
    </form>
    <div class="actions">
        <a href="index.php?action=detail-livre&id=<?= $livre['id'] ?>" class="btn">Retour au détail</a>
    </div>
</div>