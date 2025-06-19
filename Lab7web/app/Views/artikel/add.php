<?= $this->include('template/admin_header'); ?>

<h2>Tambah Artikel</h2>

<form action="<?= base_url('/admin/artikel/save'); ?>" method="post">
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required>
    </div>
    
    <div class="form-group">
        <label for="isi">Isi:</label>
        <textarea id="isi" name="isi" rows="10" required></textarea>
    </div>
    
    <div class="form-group">
        <label for="gambar">Gambar:</label>
        <input type="text" id="gambar" name="gambar" placeholder="nama-file.jpg">
    </div>
    
    <div class="form-group">
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="0">Draft</option>
            <option value="1">Published</option>
        </select>
    </div>
    
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('/admin/artikel'); ?>" class="btn">Batal</a>
    </div>
</form>

<?= $this->include('template/admin_footer'); ?>
