<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'content' => view('ayam')
        ];

        return view('template', $data);
    }
}
