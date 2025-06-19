# Setup Database untuk Lab7web

## 1. Menjalankan MySQL

### Opsi A: Melalui XAMPP Control Panel
1. Buka XAMPP Control Panel
2. Klik "Start" pada MySQL
3. Tunggu hingga status menjadi hijau

### Opsi B: Melalui Command Line
```bash
# Jalankan script yang sudah disediakan
start_mysql.bat
```

## 2. Membuat Database dan Tabel

### Melalui phpMyAdmin
1. Buka browser dan akses: `http://localhost/phpmyadmin`
2. Klik "New" untuk membuat database baru
3. Nama database: `lab_ci4`
4. Klik "Create"

### Melalui SQL Command
```sql
-- File: create_table_artikel.sql
USE lab_ci4;

CREATE TABLE artikel (
    id INT(11) auto_increment,
    judul VARCHAR(200) NOT NULL,
    isi TEXT,
    gambar VARCHAR(200),
    status TINYINT(1) DEFAULT 0,
    slug VARCHAR(200),
    PRIMARY KEY(id)
);
```

## 3. Insert Data Artikel

```sql
-- File: insert_data_artikel.sql
USE lab_ci4;

INSERT INTO artikel (judul, isi, slug) VALUES
('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.', 'artikel-pertama'),
('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.', 'artikel-kedua');

-- Update status artikel menjadi published
UPDATE artikel SET status = 1 WHERE id IN (1, 2);
```

## 4. Verifikasi Setup

### Test Koneksi Database
Akses: `http://localhost:8080/testdb`

### Test Halaman Artikel
Akses: `http://localhost:8080/artikel`

## 5. Troubleshooting

### Jika MySQL tidak bisa start:
1. Cek apakah port 3306 sudah digunakan aplikasi lain
2. Restart XAMPP sebagai Administrator
3. Cek log error di `C:\xampp\mysql\data\`

### Jika database tidak terkoneksi:
1. Pastikan MySQL service berjalan
2. Cek konfigurasi di `app/Config/Database.php`
3. Pastikan username/password benar (default: root/kosong)

## 6. Status Saat Ini

✅ **Aplikasi berfungsi dengan data dummy**
- Halaman artikel menampilkan data sesuai SQL insert
- Layout dan styling sudah sesuai
- View artikel berfungsi dengan baik

⏳ **Database setup (manual)**
- File SQL sudah siap untuk dijalankan
- Konfigurasi database sudah benar
- Tinggal menjalankan MySQL dan import data
