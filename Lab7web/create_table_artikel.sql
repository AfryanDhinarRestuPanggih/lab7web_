-- Gunakan database lab_ci4
USE lab_ci4;

-- Membuat tabel artikel
CREATE TABLE artikel (
    id INT(11) auto_increment,
    judul VARCHAR(200) NOT NULL,
    isi TEXT,
    gambar VARCHAR(200),
    status TINYINT(1) DEFAULT 0,
    slug VARCHAR(200),
    PRIMARY KEY(id)
);

-- Menampilkan struktur tabel yang baru dibuat
DESCRIBE artikel;

-- Insert data contoh untuk testing
INSERT INTO artikel (judul, isi, gambar, status, slug) VALUES
('Artikel Pertama', 'Isi artikel pertama. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'artikel1.jpg', 1, 'artikel-pertama'),

('Artikel Kedua', 'Isi artikel kedua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'artikel2.jpg', 1, 'artikel-kedua'),

('Artikel Ketiga', 'Isi artikel ketiga. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.', 'artikel3.jpg', 0, 'artikel-ketiga'),

('Tutorial CodeIgniter', 'Tutorial lengkap CodeIgniter 4 untuk pemula. Belajar membuat aplikasi web dengan framework PHP yang powerful dan mudah digunakan. Mulai dari instalasi hingga deployment aplikasi.', 'tutorial-ci4.jpg', 1, 'tutorial-codeigniter'),

('Tips Programming', 'Tips dan trik programming untuk developer. Meningkatkan produktivitas dan kualitas kode dengan best practices yang sudah terbukti efektif di industri software development.', 'tips-programming.jpg', 1, 'tips-programming');

-- Menampilkan data yang sudah diinsert
SELECT * FROM artikel;

-- Menampilkan hanya artikel yang statusnya aktif (status = 1)
SELECT * FROM artikel WHERE status = 1;
