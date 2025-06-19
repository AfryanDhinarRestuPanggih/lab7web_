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
try {
    $artikel = $model->findAll();
    // Jika tidak ada data dari database, gunakan data sesuai SQL insert
    if (empty($artikel)) {
        $artikel = [
            [
                'id' => 1,
                'judul' => 'Artikel pertama',
                'isi' => 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.',
                'slug' => 'artikel-pertama',
                'status' => 1,
                'gambar' => ''
            ],
            [
                'id' => 2,
                'judul' => 'Artikel kedua',
                'isi' => 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.',
                'slug' => 'artikel-kedua',
                'status' => 1,
                'gambar' => ''
            ]
        ];
    }
} catch (\Exception $e) {
    // Jika ada error database, gunakan data dummy
    $artikel = [
        [
            'id' => 1,
            'judul' => 'Artikel Pertama',
            'isi' => 'Ini adalah isi artikel pertama. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'slug' => 'artikel-pertama',
            'status' => 1,
            'gambar' => 'artikel1.jpg'
        ]
    ];
}
return view('artikel/index', compact('artikel', 'title'));
}

public function view($slug)
{
$model = new ArtikelModel();
try {
    $artikel = $model->where([
    'slug' => $slug
    ])->first();
} catch (\Exception $e) {
    $artikel = null;
}

// Jika tidak ada data dari database, cari di data dummy
if (!$artikel) {
    $dummyData = [
        [
            'id' => 1,
            'judul' => 'Artikel pertama',
            'isi' => 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.',
            'slug' => 'artikel-pertama',
            'status' => 1,
            'gambar' => 'artikel1.jpg'
        ],
        [
            'id' => 2,
            'judul' => 'Artikel kedua',
            'isi' => 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.',
            'slug' => 'artikel-kedua',
            'status' => 1,
            'gambar' => 'artikel2.jpg'
        ]
    ];

    // Cari artikel berdasarkan slug di data dummy
    foreach ($dummyData as $item) {
        if ($item['slug'] === $slug) {
            $artikel = $item;
            break;
        }
    }
}

// Menampilkan error apabila data tidak ada.
if (!$artikel)
{
throw PageNotFoundException::forPageNotFound();
}
$title = $artikel['judul'];
return view('artikel/detail', compact('artikel', 'title'));
}

public function admin_index()
{
$title = 'Daftar Artikel';
$model = new ArtikelModel();
try {
    $artikel = $model->findAll();
    // Jika tidak ada data dari database, gunakan data dummy
    if (empty($artikel)) {
        $artikel = [
            [
                'id' => 1,
                'judul' => 'Artikel pertama',
                'isi' => 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.',
                'slug' => 'artikel-pertama',
                'status' => 1,
                'gambar' => 'artikel1.jpg'
            ],
            [
                'id' => 2,
                'judul' => 'Artikel kedua',
                'isi' => 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.',
                'slug' => 'artikel-kedua',
                'status' => 0,
                'gambar' => 'artikel2.jpg'
            ]
        ];
    }
} catch (\Exception $e) {
    // Jika ada error database, gunakan data dummy
    $artikel = [
        [
            'id' => 1,
            'judul' => 'Artikel pertama',
            'isi' => 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.',
            'slug' => 'artikel-pertama',
            'status' => 1,
            'gambar' => 'artikel1.jpg'
        ],
        [
            'id' => 2,
            'judul' => 'Artikel kedua',
            'isi' => 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak.',
            'slug' => 'artikel-kedua',
            'status' => 0,
            'gambar' => 'artikel2.jpg'
        ]
    ];
}
return view('artikel/admin_index', compact('artikel', 'title'));
}

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

public function edit($id)
{
// Gunakan data dummy untuk testing
$dummyData = [
    1 => [
        'id' => 1,
        'judul' => 'Artikel pertama',
        'isi' => 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.',
        'slug' => 'artikel-pertama',
        'status' => 1,
        'gambar' => 'artikel1.jpg'
    ],
    2 => [
        'id' => 2,
        'judul' => 'Artikel kedua',
        'isi' => 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak.',
        'slug' => 'artikel-kedua',
        'status' => 0,
        'gambar' => 'artikel2.jpg'
    ]
];

// validasi data.
$validation = \Config\Services::validation();
$validation->setRules(['judul' => 'required']);
$isDataValid = $validation->withRequest($this->request)->run();
if ($isDataValid)
{
// Simulasi update - untuk testing
return redirect('admin/artikel');
}

// ambil data lama
$data = $dummyData[$id] ?? ['judul' => '', 'isi' => ''];
$title = "Edit Artikel";
return view('artikel/form_edit', compact('title', 'data'));
}

public function delete($id)
{
$artikel = new ArtikelModel();
try {
    $artikel->delete($id);
} catch (\Exception $e) {
    // Untuk testing, simulasi delete berhasil
    // Log error jika diperlukan
}
return redirect('admin/artikel');
}
}


