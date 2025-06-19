<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<article class="entry">
<h1><?= $artikel['judul']; ?></h1>
<hr>
<?php if (!empty($artikel['gambar'])): ?>
<img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=
$artikel['judul']; ?>">
<?php endif; ?>
<p><?= $artikel['isi']; ?></p>
</article>
<?= $this->endSection() ?>
