<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false);

// $routes->get('/', 'Home::index', ['filter' => 'auth']);
// $routes->get('/dosen/display', 'Dosen::Display',['filter' => 'auth']);
// $routes->get('/dosen/', 'Dosen::ayam',['filter' => 'auth']);
// $routes->get('/mahasiswa/display', 'Mahasiswa::display',['filter' => 'auth']);
// $routes->get('/Berita', 'Berita::index',['filter' => 'auth']);


//routes admin
$routes->get('/admin/dashboard', 'adminController::dashboard', ['filter' => 'admin']);
$routes->get('/admin/manage_mahasiswa', 'AdminController::manageMahasiswa', ['filter' => 'admin']);
$routes->get('/admin/manage_courses', 'AdminController::manageCourses', ['filter' => 'admin']);
$routes->get('/admin/manage_courses/new', 'AdminController::newCourse', ['filter' => 'admin']);
$routes->post('/admin/manage_courses/store', 'AdminController::storeCourse', ['filter' => 'admin']);
$routes->get('/admin/manage_courses/edit/(:num)', 'AdminController::editCourse/$1', ['filter' => 'admin']);
$routes->post('/admin/manage_courses/update/(:num)', 'AdminController::updateCourse/$1', ['filter' => 'admin']);
$routes->get('/admin/manage_courses/delete/(:num)', 'AdminController::deleteCourse/$1', ['filter' => 'admin']);
$routes->get('/admin/manage_mahasiswa/new', 'AdminController::newMahasiswa', ['filter' => 'admin']);
$routes->post('/admin/manage_mahasiswa/store', 'AdminController::storeMahasiswa', ['filter' => 'admin']);
$routes->get('/admin/manage_mahasiswa/edit/(:num)', 'AdminController::editMahasiswa/$1', ['filter' => 'admin']);
$routes->post('/admin/manage_mahasiswa/update/(:num)', 'AdminController::updateMahasiswa/$1', ['filter' => 'admin']);
$routes->get('/admin/manage_mahasiswa/delete/(:num)', 'AdminController::deleteMahasiswa/$1', ['filter' => 'admin']);

//routes mahasiswa
$routes->get('/mahasiswa/dashboard', 'MahasiswaController::dashboard', ['filter' => 'auth']);
$routes->get('/mahasiswa/courses', 'MahasiswaController::mahasiswaCourses', ['filter' => 'auth']);
$routes->get('/mahasiswa/enroll/(:num)', 'MahasiswaController::enroll/$1', ['filter' => 'auth']);



//routes login
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/processLogin', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');


