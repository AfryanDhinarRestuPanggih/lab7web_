<?php
namespace App\Models;
use CodeIgniter\Model;
class ArtikelModel extends Model
{
protected $table = 'artikel';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;
protected $allowedFields = ['judul', 'isi', 'status', 'slug',
'gambar'];

// Method tambahan untuk kemudahan penggunaan
public function getArtikel($slug = false)
{
    if ($slug == false) {
        return $this->where('status', 1)->findAll();
    }
    return $this->where(['slug' => $slug, 'status' => 1])->first();
}

public function getAllArtikel()
{
    return $this->findAll();
}
}
