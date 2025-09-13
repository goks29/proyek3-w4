<?php

namespace App\Controllers;

use App\Models\AdminModel;

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
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required'   => 'Password wajib diisi.',
                    'min_length' => 'Password minimal 5 karakter.'
                ]
            ]
        ];

        if (! $this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $adminModel = new AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //cek username
        $admin = $adminModel->where('username',$username)->first();

        if($admin)
        {
            if(md5($password) === $admin['password']) {
                //set session
                $session->set(['admin_id' => $admin['id'], 'username' => $admin['username'], 'logged_in' => true]);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Password Salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Username salah!');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
