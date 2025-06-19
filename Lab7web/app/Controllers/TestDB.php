<?php

namespace App\Controllers;

class TestDB extends BaseController
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            
            // Test koneksi
            if ($db->connID) {
                echo "Koneksi database berhasil!<br>";
                echo "Database: " . $db->getDatabase() . "<br>";
                
                // Cek apakah tabel artikel ada
                if ($db->tableExists('artikel')) {
                    echo "Tabel 'artikel' ditemukan!<br>";
                    
                    // Hitung jumlah data
                    $query = $db->query("SELECT COUNT(*) as total FROM artikel");
                    $result = $query->getRow();
                    echo "Jumlah artikel: " . $result->total . "<br>";
                } else {
                    echo "Tabel 'artikel' belum ada. Silakan buat tabel terlebih dahulu.<br>";
                    echo "<br>SQL untuk membuat tabel:<br>";
                    echo "<pre>";
                    echo "CREATE TABLE artikel (
    id INT(11) auto_increment,
    judul VARCHAR(200) NOT NULL,
    isi TEXT,
    gambar VARCHAR(200),
    status TINYINT(1) DEFAULT 0,
    slug VARCHAR(200),
    PRIMARY KEY(id)
);";
                    echo "</pre>";
                }
            } else {
                echo "Gagal terhubung ke database!";
            }
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
