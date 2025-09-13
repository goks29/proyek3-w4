<?php

namespace App\Controllers;

class Berita extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Berita',
            'content' => view('Berita')
        ];

        return view('template', $data);
    }
}
