<?php

namespace App\Controllers;
use App\Models\UserModel;

class adminController extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Admin',
            'content' => view('admin_dashboard')
        ];

        return view('template', $data);
    }

    public function manageMahasiswa()
    {
        //ambil data dari database
        $userModel = new UserModel();
        $mahasiswa_data = $userModel->where('role', 'mahasiswa')->findAll();


        $data = [
            'title' => 'Manage Mahasiswa',
            'content' => view('admin_manage_mahasiswa', $mahasiswa_data)
        ];

        return view('template', $data);
    }

    public function manageCourses()
    {
        $data = [
            'title' => 'Manage Mahasiswa',
            'content' => view('admin_manage_courses')
        ];

        return view('template', $data);
    }
}
