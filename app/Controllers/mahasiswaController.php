<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\TakesModel;

class MahasiswaController extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Mahasiswa',
            'content' => view('mahasiswa/mahasiswa_dashboard')
        ];

        return view('template', $data);
    }

    public function mahasiswaCourses()
    {
        $courseModel = new CourseModel();
        $data = [
            'title' => 'Mahasiswa Courses',
            'content' => view('mahasiswa/mahasiswa_courses', 
            ['courses' => $courseModel->findAll()])
        ];

        return view('template', $data);
    }

    public function enroll($course_id)
    {
        $session = session();
        if(!$session->get('logged_in') || $session->get('role') != 'mahasiswa') {
            return redirect()->to('/login');
        }

        $takesModel = new TakesModel();

        $student_id = $session->get('student_id');
        $data = [
            'student_id'  => $student_id,
            'course_id'   => $course_id,
            'enroll_date' => date('Y-m-d H:i:s')
        ];

        $takesModel->insert($data);

        return redirect()->to('/mahasiswa/courses')->with('message', 'Berhasil mengambil mata kuliah');
    }
}
