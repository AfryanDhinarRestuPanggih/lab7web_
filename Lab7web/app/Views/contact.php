<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<div class="contact-info">
    <h3>Informasi Kontak</h3>
    <p><strong>Alamat:</strong> Jl. Raya Cikarang-Cibarusah, Bekasi, Jawa Barat</p>
    <p><strong>Telepon:</strong> (021) 8910-9090</p>
    <p><strong>Email:</strong> info@pelitabangsa.ac.id</p>
    <p><strong>Website:</strong> www.pelitabangsa.ac.id</p>
</div>
<?= $this->endSection() ?>
