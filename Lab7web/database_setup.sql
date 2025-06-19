-- Membuat Database lab_ci4
CREATE DATABASE IF NOT EXISTS lab_ci4;

-- Menggunakan database lab_ci4
USE lab_ci4;

-- Membuat tabel artikel
CREATE TABLE artikel (
    id INT(11) NOT NULL AUTO_INCREMENT,
    judul VARCHAR(200) NOT NULL,
    isi TEXT NOT NULL,
    gambar VARCHAR(200) DEFAULT NULL,
    status TINYINT(1) DEFAULT 0,
    slug VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
);

-- Insert data contoh untuk testing
INSERT INTO artikel (judul, isi, gambar, status, slug) VALUES
('Artikel Pertama', 'Ini adalah isi dari artikel pertama. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'artikel1.jpg', 1, 'artikel-pertama'),
('Artikel Kedua', 'Ini adalah isi dari artikel kedua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'artikel2.jpg', 1, 'artikel-kedua'),
('Artikel Ketiga', 'Ini adalah isi dari artikel ketiga. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'artikel3.jpg', 0, 'artikel-ketiga');

-- Menampilkan struktur tabel
DESCRIBE artikel;

-- Menampilkan data yang sudah diinsert
SELECT * FROM artikel;
