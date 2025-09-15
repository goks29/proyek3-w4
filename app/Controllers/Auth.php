<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TakesModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function processLogin()
    {
        $session = session();

        $validationRules = [
            'username' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required'   => 'Username wajib diisi.',
                    'min_length' => 'Username minimal 5 karakter.'
                ]
            ],
            'password' => [
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required'   => 'Password wajib diisi.',
                    'min_length' => 'Password minimal 8 karakter.'
                ]
            ]
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $UserModel = new UserModel();
        $TakesModel = new TakesModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //cek username
        $user = $UserModel->where('username',$username)->first();

        if($user)
        {
            if(md5($password) === $user['password']) {
                //set session
                $sessionData = [
                    'id'         => $user['id'],
                    'username'   => $user['username'],
                    'role'       => $user['role'],
                    'full_name'  => $user['full_name'],
                    'logged_in'  => true,
                ];
                
                if ($user['role'] === 'mahasiswa') {
                        $sessionData['student_id'] = $user['id'];
                    }

                $session->set($sessionData);

                //cek peran

                if($session->get('role') == 'admin') {
                    return redirect()->to('/admin/dashboard');
                } else {
                    return redirect()->to('/mahasiswa/dashboard');
                }
            } else {
                return redirect()->back()->with('error', 'Password Salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan!');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
