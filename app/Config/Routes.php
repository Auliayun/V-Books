<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');

$routes->get('/book_data', 'BookData::book_data');
$routes->post('/cari_general', 'BookData::book_data');
$routes->get('/tambah_buku_general', 'BookData::tambah_buku_general');
$routes->post('/save_general', 'BookData::save_general');
$routes->get('/edit_general/(:segment)', 'BookData::edit_general/$1');
$routes->post('/edit_save_general', 'BookData::edit_save_general');
$routes->get('/delete_general/(:segment)', 'BookData::delete_general/$1');

$routes->get('/book_data_final', 'BookData::book_data_final');
$routes->post('/cari_final', 'BookData::book_data_final');
$routes->get('/tambah_buku_final', 'BookData::tambah_buku_final');
$routes->post('/save_final', 'BookData::save_final');
$routes->get('/edit_final/(:segment)', 'BookData::edit_final/$1');
$routes->post('/edit_save_final', 'BookData::edit_save_final');
$routes->get('/delete_final/(:segment)', 'BookData::delete_final/$1');


$routes->get('/data_user', 'UserData::index');
$routes->post('/cari_user', 'UserData::index');
$routes->get('/edit_user/(:segment)', 'UserData::edit_user/$1');
$routes->post('/save_edit_user', 'UserData::save_edit_user');
$routes->delete('/delete_user/(:segment)', 'UserData::delete_user/$1');

$routes->get('/history_data_borrowing', 'BorrowData::index');
$routes->post('/cari_borrow', 'BorrowData::index');
$routes->post('/update_status/(:segment)', 'BorrowData::update_status/$1');

$routes->get('/saved_book', 'Page::saved_book');
$routes->get('/saved_final', 'Page::saved_final');


$routes->get('/borrowing_history', 'Page::borrowing_history');

$routes->get('/save_buku_general/(:segment)', 'Page::save_buku_general/$1');
$routes->get('/save_buku_final/(:segment)', 'Page::save_buku_final/$1');


//route dibawah ini tidak harus login
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/auth/save_register', 'AuthController::save_register');
$routes->post('/auth/cek_login', 'AuthController::cek_login');
$routes->get('/profile', 'AuthController::profile');
$routes->get('/edit_profile', 'AuthController::edit_profile');
$routes->post('/save_profile', 'AuthController::save_profile');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/home_page', 'Page::home_page');
$routes->get('/general_catalog', 'Page::general_catalog');
$routes->post('/cari_general_katalog', 'Page::general_catalog');
$routes->get('/detail_general/(:segment)', 'Page::detail_general/$1');
$routes->post('/pinjam_buku', 'Page::pinjam_buku');

$routes->get('/finalTask_catalog', 'Page::finalTask_catalog');
$routes->post('/cari_finalTask_katalog', 'Page::finalTask_catalog');
$routes->get('/detail_final/(:segment)', 'Page::detail_final/$1');
$routes->post('/pinjam_buku_final', 'Page::pinjam_buku_final');
