<div align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" width="100" alt="PHP Logo">
  <img src="https://www.svgrepo.com/show/353579/codeigniter.svg" width="100" alt="CodeIgniter 4 Logo">
</div>

## 📖 Daftar Praktikum

1. [Praktikum 1: PHP Framework CodeIgniter 4](#praktikum-1-php-framework-codeigniter-4)
2. [Praktikum 2: Framework Lanjutan (CRUD)](#praktikum-2-framework-lanjutan-crud)
3. [Praktikum 3: View Layout dan View Cell](#praktikum-3-view-layout-dan-view-cell)

---

## Praktikum 1: PHP Framework CodeIgniter 4

## 👤 Profil Mahasiswa

| Atribut         | Keterangan            |
| --------------- | --------------------- |
| *Nama*        | Afryan Dhinar Restu Panggih    |
| *NIM*         | 312310467          |
| *Kelas*       | TI.23.A.5             |
| *Mata Kuliah* | Pemrograman Website 2 |

---

## 🎯 Tujuan Praktikum

Dalam praktikum ini, tujuan utama yang ingin dicapai adalah sebagai berikut:

- Memahami konsep dasar dari penggunaan Framework dalam pengembangan aplikasi web.
- Memahami konsep Model-View-Controller (MVC) yang menjadi dasar dalam framework CodeIgniter 4.
- Mempelajari cara menginstal dan mengonfigurasi CodeIgniter 4 pada server lokal.
- Membuat program sederhana menggunakan CodeIgniter 4.
- Mengimplementasikan routing dan controller untuk mengatur akses ke berbagai halaman.
- Menggunakan View dan Layout untuk membuat tampilan yang lebih terstruktur dan dinamis.

---

## ⚙ Langkah-Langkah Praktikum

### 📌 1. Persiapan Awal

Sebelum memulai pengembangan dengan CodeIgniter 4, beberapa persiapan harus dilakukan:

1. Mengaktifkan ekstensi PHP yang dibutuhkan melalui php.ini.
2. Melakukan restart Apache melalui XAMPP Control Panel agar perubahan diterapkan.
3. Memastikan bahwa Composer telah terinstal untuk mempermudah pengelolaan dependency CodeIgniter 4.

📷 *Screenshot Konfigurasi PHP.ini:*


![1](https://github.com/user-attachments/assets/7f11d7a3-2bad-4d87-b857-d188d61a9035)


---

### 📌 2. Instalasi CodeIgniter 4

Untuk memulai, kita perlu mengunduh dan menyiapkan CodeIgniter 4 pada server lokal:

1. Download CodeIgniter 4 dari [🔗 Situs Resmi CodeIgniter](https://codeigniter.com/download).
2. Ekstrak file yang telah diunduh ke dalam folder htdocs/lab11_ci/.
3. Ubah nama folder hasil ekstraksi menjadi ci4 agar lebih mudah diakses.
4. Jalankan aplikasi dengan mengakses http://localhost/lab11_ci/ci4/public/.

📷 *Screenshot Tampilan Awal CodeIgniter 4:*

![2](https://github.com/user-attachments/assets/876c2988-1cce-47ef-bc76-ca6e7c35bdce)



---

### 📌 3. Menjalankan Command Line Interface (CLI)

CodeIgniter memiliki CLI yang mempermudah pengembangan aplikasi. Untuk menjalankan CLI:
```
bash
cd xampp/htdocs/lab11_ci/ci4/
php spark
```

📷 *Screenshot Hasil Perintah CLI:*

![3](https://github.com/user-attachments/assets/5c785d94-31c3-46c6-9f27-f2cb87ea6bb7)


---

### 📌 4. Mengaktifkan Mode Debugging
Untuk mempermudah debugging, aktifkan mode development dengan mengubah file .env:
```
bash
```
## Buka file .env dan ubah:
```
CI_ENVIRONMENT = development
```

📷 *Screenshot Konfigurasi Debugging:*

![4](https://github.com/user-attachments/assets/5970b2a6-df73-40d7-9615-9cb4728983f1)


---

### 📌 5. Menambahkan Routing Baru
Routing digunakan untuk mengatur alamat URL yang akan diproses oleh aplikasi. Tambahkan kode berikut di app/Config/Routes.php:  
```
php
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```

Jalankan perintah berikut untuk melihat daftar routing yang telah dibuat:  
```
bash
php spark routes
```

📷 *Screenshot CLI & Error Page:*

![5](https://github.com/user-attachments/assets/6b7a5909-328d-45b0-aa5c-c989439a2fed)
![6](https://github.com/user-attachments/assets/edc63132-7982-4e00-ab5b-9ed1545b4d1c)

---

### 📌 6. Membuat Controller Page
Buat file Page.php di app/Controllers/ dengan isi sebagai berikut:  
```
php
<?php
namespace App\Controllers;
class Page extends BaseController {
    public function about() { echo "Ini halaman About"; }
    public function contact() { echo "Ini halaman Contact"; }
    public function faqs() { echo "Ini halaman FAQ"; }
}
```

📷 *Screenshot Tampilan About Page:*  

![7](https://github.com/user-attachments/assets/ed5d30cc-6461-4c5f-ade9-80b820a41586)


---

### 📌 7. Membuat View untuk Halaman About

Buat file app/Views/about.php dengan kode berikut:  
```
php
<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <p><?= $content; ?></p>
</body>
</html>
```

📷 *Screenshot Tampilan View About Page:*  

![8](https://github.com/user-attachments/assets/089e84ce-ff91-4b64-bd24-52ad9ac387cd)


---

### 📌 8. Menambahkan Layout Web dengan CSS

Untuk meningkatkan tampilan website, kita akan menggunakan template header dan footer:  

1. Simpan file style.css di public/
2. Buat file header.php dan footer.php di app/Views/template/
3. Ubah about.php agar menggunakan include:
```
php
<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```

📷 *Screenshot Tampilan dengan Template:*  

![9](https://github.com/user-attachments/assets/ece7ce51-7a28-474c-967c-fa0da2259aa4)


---

## ✅ Kesimpulan

Dari praktikum ini, kita telah memahami dasar-dasar penggunaan framework CodeIgniter 4. Beberapa hal yang telah kita pelajari antara lain:

- Instalasi dan konfigurasi awal CodeIgniter 4.
- Menjalankan CodeIgniter melalui CLI.
- Membuat dan mengelola routing untuk berbagai halaman dalam website.
- Membuat Controller dan View untuk menampilkan konten dinamis.
- Menerapkan layout dengan template header dan footer.
- Menggunakan CSS untuk mempercantik tampilan website.

Dengan menyelesaikan praktikum ini, kita mendapatkan pemahaman yang lebih baik tentang bagaimana CodeIgniter 4 mempermudah pengembangan aplikasi berbasis web dengan struktur yang lebih terorganisir dan efisien. 🚀🔥

## Praktikum 2: Framework Lanjutan (CRUD)

**1.Membuat database:**

·Langkah Pertama membuat database  

![Screenshot 2025-06-19 191846](https://github.com/user-attachments/assets/82132190-d535-48fb-8742-88004b92dc1e)
```
CREATE DATABASE lab_ci4;

CREATE TABLE article (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    content TEXT,
    image VARCHAR(200),
    status TINYINT(1) DEFAULT 0,
    slug VARCHAR(200) UNIQUE,
);
```
**2. Konfigurasi database**

![Screenshot 2025-06-19 193227](https://github.com/user-attachments/assets/7a2c8291-0b92-498b-ba5c-927de69d4d84)

**Konfigurasi database pada CodeIgniter 4 dapat dilakukan melalui dua cara:**

·Langsung di file: app/Config/Database.php  
·Menggunakan file: .env  

**3. Membuat Model**

Buat file baru pada direktori app/Models dengan nama ArtikelModel.php  
```
<?php
namespace App\Models;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Model;
class ArtikelModel extends Model
{
protected $table = 'artikel';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;
protected $allowedFields = ['judul', 'isi', 'status', 'slug',
'gambar'];
```
![Screenshot 2025-06-20 154731](https://github.com/user-attachments/assets/0e9c13fa-a306-4401-bf11-325bbffba313)

**4. Membuat Controller**

Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.  
```
<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }
```
![Screenshot 2025-06-20 154957](https://github.com/user-attachments/assets/958239bf-a764-4dea-a594-22c15f83d1c7)

**5. Membuat View**

Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.  
```
<?= $this->include('template/header'); ?>

<?php if ($artikel): foreach ($artikel as $row): ?>
    <article class="entry">
        <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a></h2>
        <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
        <p><?= substr($row['isi'], 0, 200); ?>...</p>
    </article>
    <hr class="divider" />
<?php endforeach; else: ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
<?php endif; ?>

<?= $this->include('template/footer'); ?>
```
![Screenshot 2025-06-20 155338](https://github.com/user-attachments/assets/fe80bccf-f266-44f3-a9cf-b4476146f5b5)

**6. Akses dengan browser**
   
Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel  
![Screenshot 2025-06-20 155445](https://github.com/user-attachments/assets/5942f8aa-4849-471d-9018-05fc3c024918)

**7. Menambahkan Data Artikel**

Belum ada data yang ditampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.  
```
INSERT INTO artikel (judul, isi, slug) VALUE
('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.', 'artikel-pertama'),
('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.', 'artikel-kedua');
```
![Screenshot 2025-06-20 155753](https://github.com/user-attachments/assets/26437c91-8774-4b4c-a61b-015e1a884b3d)

**8. Membuat Tampilan Detail Artikel**

Tambahkan fungsi baru pada Controller Artikel dengan nama view().  
```
public function view($slug)
{
    $model = new ArtikelModel();
    $artikel = $model->where([
        'slug' => $slug
    ])->first();

    // Menampilkan error apabila data tidak ada.
    if (!$artikel)
    {
        throw PageNotFoundException::forPageNotFound();
    }

    $title = $artikel['judul'];
    return view('artikel/detail', compact('artikel', 'title'));
}
```
**9. Membuat View Detail**

Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.  
```
<?= $this->include('template/header'); ?>

<article class="entry">
    <h2><?= $artikel['judul']; ?></h2>
    <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?= $artikel['judul']; ?>">
    <p><?= $row['isi']; ?></p>
</article>

<?= $this->include('template/footer'); ?>
```
**10. Membuat Routing untuk artikel detail**

Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.  
```
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
```
![Screenshot 2025-06-20 160331](https://github.com/user-attachments/assets/9ce33575-d5f2-40b6-a593-390d7c92afb7)

**11. Membuat Menu Admin**

Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().  
```
public function admin_index()
{
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/admin_index', compact('artikel', 'title'));
}
```
**12. Membuat View Admin**

Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php  
```
<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </thead>
    <tbody>
        <?php if($artikel): foreach($artikel as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td>
                <b><?= $row['judul']; ?></b>
                <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
            </td>
            <td><?= $row['status']; ?></td>
            <td>
                <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']);?>">Ubah</a>
                <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']);?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="4">Belum ada data.</td>
        </tr>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </tfoot>
</table>

<?= $this->include('template/admin_footer'); ?>
```

**13. Menambahkan Routing untuk Menu Admin**

Tambahkan routing untuk menu admin seperti berikut:  
```
$routes->group('admin', function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});
```

Akses menu admin dengan url http://localhost:8080/admin/artikel  

![Screenshot 2025-06-20 161046](https://github.com/user-attachments/assets/f48c8ce9-af0d-4546-96d3-5eb652d71006)

**14. Menambah Data Artikel**

Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().  
```
public function add()
{
    // validasi data.
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid)
    {
        $artikel = new ArtikelModel();
        $artikel->insert([
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'slug' => url_title($this->request->getPost('judul')),
        ]);
        return redirect('admin/artikel');
    }

    $title = "Tambah Artikel";
    return view('artikel/form_add', compact('title'));
}
```
**15. Membuat View Form Tambah**

Kemudian buat view untuk form tambah dengan nama form_add.php  
```
<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>
```
![Screenshot 2025-06-20 161553](https://github.com/user-attachments/assets/01eb31a9-b2d8-4a40-ab0a-953d1af4920b)

**16. Mengubah Data**

Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().  
```
public function edit($id)
{
    $artikel = new ArtikelModel();
    // validasi data.
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid)
    {
        $artikel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
        ]);
        return redirect('admin/artikel');
    }

    // ambil data lama
    $data = $artikel->where('id', $id)->first();
    $title = "Edit Artikel";
    return view('artikel/form_edit', compact('title', 'data'));
}
```

**17. Membuat View Form Edit**

Kemudian buat view untuk form tambah dengan nama form_edit.php  
```
<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul" value="<?= $data['judul'];?>" >
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"><?= $data['isi'];?></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>
```
![Screenshot 2025-06-20 161906](https://github.com/user-attachments/assets/53279de0-c1eb-453f-8c63-aeb55ae4b8c0)

**18. Menghapus Data**

Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().  
```
public function delete($id)
{
    $artikel = new ArtikelModel();
    $artikel->delete($id);
    return redirect('admin/artikel');
}
```

## Praktikum 3: View Layout dan View Cell

**1. Membuat Layout Utama**
Buat folder layout di dalam app/Views/ Buat file main.php di dalam folder layout dengan kode berikut:  
```
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $title ?? 'My Website' ?></title>
<link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
<div id="container">
<header>
<h1>Layout Sederhana</h1>
</header>
<nav>
<a href="<?= base_url('/');?>" class="active">Home</a>
<a href="<?= base_url('/artikel');?>">Artikel</a>
<a href="<?= base_url('/about');?>">About</a>
<a href="<?= base_url('/contact');?>">Kontak</a>
</nav>
<section id="wrapper">
<section id="main">
<?= $this->renderSection('content') ?>
</section>
<aside id="sidebar">
<div class="widget-box">
<?= view_cell('App\\Cells\\ArtikelTerkini::show') ?>
</div>
<div class="widget-box">
<h3 class="title">Widget Header</h3>
<ul>
<li><a href="#">Widget Link</a></li>
<li><a href="#">Widget Link</a></li>
</ul>
</div>
<div class="widget-box">
<h3 class="title">Widget Text</h3>
<p>Vestibulum lorem elit, iaculis in nisl volutpat,
malesuada tincidunt arcu. Proin in leo fringilla,

vestibulum mi porta,

faucibus felis. Integer pharetra est nunc, nec pretium

nunc pretium ac.</p>
</div>
</aside>
</section>
<footer>
<p>&copy; 2021 - Universitas Pelita Bangsa</p>
</footer>
</div>
</body>
</html>
```
![Screenshot 2025-06-21 102520](https://github.com/user-attachments/assets/680350dd-3b66-4583-9a22-8507e72b1c88)

**2. Modifikasi File View**
Ubah app/Views/home.php agar sesuai dengan layout baru:  
```
<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
<?= $this->endSection() ?>
```
![Screenshot 2025-06-21 103233](https://github.com/user-attachments/assets/e4a6fd99-e45e-4d71-9965-9fb94c4b362e)

**3. Membuat Class View Cell**
Buat folder Cells di dalam app/ Buat file ArtikelTerkini.php di dalam app/Cells/ dengan kode berikut:  
![Screenshot 2025-06-21 103629](https://github.com/user-attachments/assets/0f5f8f8a-044e-4216-b077-773d50ad1f0b)

**4. Membuat View untuk View Cell**
Buat folder components di dalam app/Views/ Buat file artikel_terkini.php di dalam app/Views/components/ dengan kode berikut:  
![Screenshot 2025-06-21 103846](https://github.com/user-attachments/assets/1394caec-aa95-44ff-a0cd-fb758a1b6a51)

**5. Modifikasi Database: Menambahkan Field created_at**
Untuk menampilkan artikel terkini berdasarkan tanggal, kita perlu menambahkan field created_at pada tabel artikel:  
```
ALTER TABLE artikel
ADD COLUMN created_at DATETIME DEFAULT CURRENT_TIMESTAMP;
```

**6. Update Data Artikel dengan Tanggal**
Untuk artikel yang sudah ada, kita perlu mengupdate field created_at:  
```
UPDATE artikel SET created_at = CURRENT_TIMESTAMP;
```

**7. Modifikasi Model ArtikelModel**
Update file app/Models/ArtikelModel.php untuk menambahkan field created_at di allowedFields:  
```
<?php
namespace App\Models;
use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar', 'created_at'];
}
```
**8. Modifikasi Controller untuk Menampilkan Halaman Home dengan Layout Baru**
Update file app/Controllers/Home.php:  
```
<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function index()
    {
        $title = 'Beranda';
        $model = new ArtikelModel();

        // Ambil semua artikel
        $artikel = $model->orderBy('tanggal', 'DESC')->findAll();

        // Ambil 3 artikel terkini
        $artikel_terkini = $model->orderBy('tanggal', 'DESC')->findAll(3);

        // Kirim ke view
        return view('home', compact('artikel', 'artikel_terkini', 'title'));
    }
}
```

**9. Modifikasi View Artikel**
Ubah file app/Views/artikel/index.php agar menggunakan layout baru:  
```
<?= $this->include('template/header'); ?>

<link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

<!-- Tombol Tambah Artikel (Untuk Admin) -->
<div style="margin-bottom: 20px;">
    <a href="<?= base_url('/admin/artikel/add'); ?>" class="tambah-artikel-btn">
        + Tambah Artikel
    </a>
</div>

<!-- ARTIKEL TERKINI dari Cell -->
<?= view_cell('App\Cells\ArtikelTerkini::index') ?>

<hr class="divider" />

<!-- SEMUA ARTIKEL -->
<?php if ($artikel) : foreach ($artikel as $row) : ?>
        <article class="entry">
            <h2>
                <a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= esc($row['judul']); ?></a>
            </h2>
            <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= esc($row['judul']); ?>" style="width: 100%; max-width: 400px;">
            <p><?= esc(substr($row['isi'], 0, 200)); ?>...</p>
        </article>
        <hr class="divider" />
    <?php endforeach;
else : ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
<?php endif; ?>

<?= $this->include('template/footer'); ?>
```
![Screenshot 2025-06-21 105424](https://github.com/user-attachments/assets/a01dbcca-3a84-4df7-bc5f-274b4a8cd03e)

## Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?

**Jawaban:**

1. **Struktur yang Terorganisir**  
   Memudahkan pengaturan elemen UI dengan tata letak yang rapi dan terstruktur.

2. **Responsivitas yang Lebih Baik**  
   Memastikan tampilan UI menyesuaikan dengan berbagai ukuran layar dan orientasi perangkat.

3. **Pemeliharaan Kode yang Lebih Mudah**  
   Dengan pemisahan tata letak dan logika bisnis, perubahan UI lebih mudah dilakukan tanpa mengganggu fungsionalitas aplikasi.

4. **Penggunaan Ulang Komponen**  
   Layout dapat digunakan kembali di berbagai bagian aplikasi, mengurangi redundansi kode.

5. **Kinerja yang Lebih Optimal**  
   Beberapa jenis layout dioptimalkan untuk performa yang lebih baik, seperti `ConstraintLayout` di Android yang mengurangi jumlah view hierarchy.

---

## Jelaskan perbedaan antara View Cell dan View biasa.

**Jawaban:**
![Screenshot 2025-06-21 113209](https://github.com/user-attachments/assets/2e36d5e5-f08c-420c-aa63-8a6d58b18f8c)
