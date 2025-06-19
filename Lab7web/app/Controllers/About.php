<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $title = 'Tentang Kami';
        $content = 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini. Website ini dibuat menggunakan CodeIgniter 4 dengan layout sederhana yang responsive dan modern.';
        return view('about', compact('title', 'content'));
    }
}
