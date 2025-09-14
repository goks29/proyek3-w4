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

//routes mahasiswa
$routes->get('/mahasiswa/dashboard', 'mahasiswaController::dashboard', ['filter' => 'auth']);
$routes->get('/mahasiswa/courses', 'mahasiswaController::mahasiswaCourses', ['filter' => 'auth']);
$routes->get('/DisplayMahasiswa', 'DisplayMahasiswa::index',['filter' => 'auth']);
$routes->get('/DisplayMahasiswa/detail/(:num)', 'DisplayMahasiswa::detail/$1',['filter' => 'auth']);

//routes login
$routes->get('/login', 'Auth::login');
$routes->post('/processLogin', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');


