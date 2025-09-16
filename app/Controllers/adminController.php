<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\StudentModel;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Admin',
            'content' => view('admin/admin_dashboard')
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
            'content' => view('admin/admin_manage_mahasiswa', ['mahasiswa' => $mahasiswa_data])
        ];

        return view('template', $data);
    }

    public function newMahasiswa()
    {
        $data = [
            'title'  => 'Add Mahasiswa',
            'content' => view('admin/student_new')
        ];

        return view('template', $data);
    }

    public function storeMahasiswa()
    {
        $userModel = new UserModel();
        $studentModel = new StudentModel();

        $data = [
            'username'  => $this->request->getPost('username'),
            'password'  => md5($this->request->getPost('password')),
            'role'      => 'mahasiswa',
            'full_name' => $this->request->getPost('full_name')
        ];

        $userModel->insert($data);

        $userId = $userModel->getInsertID();
        // dd($userId);
        $studentModel->insert([
            'student_id' => $userId,
            'entry_year' => $this->request->getPost('entry_year') 
        ]);

        return redirect()->to(base_url('admin/manage_mahasiswa'))->with('message', 'Mahasiswa berhasil ditambahkan!');
    }

    public function editMahasiswa($id)
    {
        $userModel = new UserModel();
        $studentModel = new StudentModel();

        $user = $userModel->find($id);
        $student = $studentModel->where('student_id', $id)->first();

        $data = [
            'title'    => 'Edit Mahasiswa',
            'content'  => view('admin/student_edit', ['user' => $user, 'student' => $student])
        ];

        return view('template', $data);
    }

    public function updateMahasiswa($id)
    {
        $userModel = new UserModel();
        $studentModel = new StudentModel();

        $password = $this->request->getPost('password');
        $hashedPass = md5($password);

        $userData = [
            'username'    => $this->request->getPost('username'),
            'full_name'   => $this->request->getPost('full_name'),
        ];

        if (!empty($password)) {
            $userData['password'] = $hashedPass;
        }

        $studentData = [
            'entry_year'    => $this->request->getPost('entry_year'),
        ];

        $userModel->update($id, $userData);

        $studentModel->where('student_id',$id)->set($studentData)->update();

        return redirect()->to(base_url('admin/manage_mahasiswa'));
    }

    public function deleteMahasiswa($id)
    {
        $userModel = new UserModel();

        $userModel->delete($id);

        return redirect()->to(base_url('admin/student_courses'))->with('success', 'Mahasiswa berhasil dihapus');
    }

    public function manageCourses()
    {
        $courseModel = new CourseModel();
        $courses = $courseModel->findAll();

        $data = [
            'title' => 'Manage Courses',
            'content' => view('admin/admin_manage_courses', ['courses' => $courses])
        ];

        return view('template', $data);
    }

    public function newCourse()
    {
        $data = [
            'title'   => 'Tambah Course',
            'content' => view('admin/course_new')
        ];

        return view('template', $data);
    }

    public function storeCourse()
    {
        $courseModel = new CourseModel();

        $data = [
            'course_name'  => $this->request->getPost('course_name'),
            'credits'      => $this->request->getPost('credits'),
        ];

        $courseModel->insert($data);

        return redirect()->to(base_url('admin/manage_courses'));
    }

    public function editCourse($id)
    {
        $courseModel = new CourseModel();

        $courses = $courseModel->find($id);

        $data = [
            'title'    => 'Edit Course',
            'content'  => view('admin/course_edit', ['courses' => $courses])
        ];

        return view('template', $data);
    }

    public function updateCourse($id)
    {
        $courseModel = new CourseModel();

        $data = [
            'course_name'  => $this->request->getPost('course_name'),
            'credits'      => $this->request->getPost('credits'),
        ];

        $courseModel->update($id, $data);

        return redirect()->to(base_url('admin/manage_courses'));
    }

    public function deleteCourse($id)
    {
        $courseModel = new CourseModel();

        $courseModel->delete($id);

        return redirect()->to(base_url('admin/manage_courses'))->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
