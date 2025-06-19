<div class="widget-box">
    <h3 class="title">Artikel Terkini</h3>
    <ul>
        <?php foreach ($artikelTerkini as $artikel): ?>
        <li><a href="<?= base_url('/artikel/' . $artikel['slug']); ?>"><?= $artikel['judul']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
