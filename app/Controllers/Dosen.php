<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    public function Display(): string
    {
        return view('ayam');
    }

    public function Ayam(): string
    {
        return view('ayam2');
    }
}
