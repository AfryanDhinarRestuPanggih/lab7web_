<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        $title = 'Kontak Kami';
        $content = 'Hubungi kami untuk informasi lebih lanjut tentang program studi, pendaftaran, atau pertanyaan lainnya. Kami siap membantu Anda.';
        return view('contact', compact('title', 'content'));
    }
}
