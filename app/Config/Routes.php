<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Page::dashboard');

$routes->get('/soal', 'Page::soal');
$routes->get('/soal_baru', 'Page::soal_tambah');
$routes->get('/soal_detail', 'Page::soal_detail');
$routes->get('/soal_ubah', 'Page::soal_edit');

$routes->get('/sesi', 'Page::sesi');
$routes->get('/sesi_baru', 'Page::sesi_tambah');
$routes->get('/sesi_detail', 'Page::sesi_detail');
$routes->get('/sesi_ubah', 'Page::sesi_edit');

$routes->get('/paket', 'Page::paket');
$routes->get('/paket_baru', 'Page::paket_tambah');
$routes->get('/paket_detail', 'Page::paket_detail');
$routes->get('/paket_ubah', 'Page::paket_edit');

$routes->get('/grup', 'Page::grup');
$routes->get('/grup_baru', 'Page::grup_tambah');
$routes->get('/grup_detail', 'Page::grup_detail');
$routes->get('/grup_ubah', 'Page::grup_edit');

$routes->get('/peserta', 'Page::peserta');
$routes->get('/peserta_baru', 'Page::peserta_tambah');
$routes->get('/peserta_detail', 'Page::peserta_detail');
$routes->get('/peserta_ubah', 'Page::peserta_edit');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
