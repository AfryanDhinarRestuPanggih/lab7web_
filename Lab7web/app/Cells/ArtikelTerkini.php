<?php
namespace App\Cells;
use CodeIgniter\View\Cells\Cell;
use App\Models\ArtikelModel;
class ArtikelTerkini extends Cell
{
public function show()
{
$model = new ArtikelModel();
try {
    $artikel = $model->orderBy('created_at', 'DESC')->limit(5)->findAll();

    // Jika tidak ada data dari database, gunakan data dummy
    if (empty($artikel)) {
        $artikel = [
            [
                'judul' => 'Artikel Pertama',
                'slug' => 'artikel-pertama'
            ],
            [
                'judul' => 'Artikel Kedua',
                'slug' => 'artikel-kedua'
            ],
            [
                'judul' => 'Artikel Ketiga',
                'slug' => 'artikel-ketiga'
            ],
            [
                'judul' => 'Artikel Keempat',
                'slug' => 'artikel-keempat'
            ],
            [
                'judul' => 'Artikel Kelima',
                'slug' => 'artikel-kelima'
            ]
        ];
    }
} catch (\Exception $e) {
    // Fallback data jika ada error database
    $artikel = [
        [
            'judul' => 'Artikel Pertama',
            'slug' => 'artikel-pertama'
        ],
        [
            'judul' => 'Artikel Kedua',
            'slug' => 'artikel-kedua'
        ],
        [
            'judul' => 'Artikel Ketiga',
            'slug' => 'artikel-ketiga'
        ]
    ];
}
return view('components/artikel_terkini', ['artikel' => $artikel]);
}
}
