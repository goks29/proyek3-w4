<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display()
    {
        $model = new MahasiswaModel();

        //ambil data lewat quety raw SQL
        $data['mahasiswa'] = $model->getMahasiswa();

        return view('DisplayMahasiswa', $data);
    }
}