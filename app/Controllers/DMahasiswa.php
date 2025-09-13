<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class DMahasiswa extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        
        $data = [
            'title' => 'Display Mahasiswa',
             'content' => view('DisplayMahasiswa', ['mahasiswa' => $model->getMahasiswa()])
        ];

        return view('template', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();

        $data = [
            'title' => 'Detail',
            'content' => view('MahasiswaDetail', ['mahasiswa' => $model->getDetail($nim)])
        ];
        
        return view('template', $data);
    }
}
