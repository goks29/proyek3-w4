<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false);

$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/dosen/display', 'Dosen::Display',['filter' => 'auth']);
$routes->get('/dosen/', 'Dosen::ayam',['filter' => 'auth']);
$routes->get('/mahasiswa/display', 'Mahasiswa::display',['filter' => 'auth']);
$routes->get('/Berita', 'Berita::index',['filter' => 'auth']);
$routes->get('/DisplayMahasiswa', 'DMahasiswa::index',['filter' => 'auth']);
$routes->get('/DisplayMahasiswa/detail/(:num)', 'DMahasiswa::detail/$1',['filter' => 'auth']);

$routes->get('/login', 'Auth::login');
$routes->post('/processLogin', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');


