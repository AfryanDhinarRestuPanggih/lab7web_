<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $title = 'Selamat Datang';
        $content = 'Ini adalah halaman utama website menggunakan layout sederhana. Layout ini memiliki header, navigation, main content, sidebar, dan footer yang dapat digunakan untuk semua halaman website.';
        return view('home', compact('title', 'content'));
    }
}
