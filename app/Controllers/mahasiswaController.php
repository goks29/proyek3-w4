<?php

namespace App\Controllers;

class mahasiswaController extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Mahasiswa',
            'content' => view('mahasiswa_dashboard')
        ];

        return view('template', $data);
    }

    public function mahasiswaCourses()
    {
        $data = [
            'title' => 'Mahasiswa Courses',
            'content' => view('mahasiswa_courses')
        ];

        return view('template', $data);
    }
}
