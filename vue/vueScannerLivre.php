<br>
<br>
<div class="container">
    <h1>Scans de « <?= htmlspecialchars($livre['titre']) ?> »</h1>

    <?php if (empty($scans)): ?>
        <p>Aucun scan disponible pour ce livre.</p>
    <?php else: ?>
        <div class="book-list">
            <?php foreach ($scans as $scan): ?>
                <div class="book-card">
                    <img
                        src="scans/<?= $livre['id'] ?>/<?= rawurlencode($scan['filename']) ?>"
                        alt="<?= htmlspecialchars($scan['description'] ?: $livre['titre']) ?>">
                    <?php if ($scan['description']): ?>
                        <p class="form-text"><?= htmlspecialchars($scan['description']) ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <a href="index.php?action=chercher" class="btn">← Retour à la liste</a>
</div>
<br>
<br>
