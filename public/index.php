<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

define('APPNAME', 'Bookworms Store');

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
$router->post('/logout', '\App\Controllers\Auth\LoginController@logout');
$router->get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
$router->post('/register', '\\App\Controllers\Auth\RegisterController@register');
$router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\Auth\LoginController@login');

// Product routes
$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/home', '\App\Controllers\HomeController@index');
$router->get('/about', '\App\Controllers\HomeController@about');
$router->post('/search', '\App\Controllers\HomeController@search');

$router->get('/product_all', '\App\Controllers\ProductController@product');
$router->post('/product', '\App\Controllers\ProductController@productOfType');
$router->get('/detail', '\App\Controllers\ProductController@detailProduct');

$router->get('/cart', '\App\Controllers\CartController@cart');
$router->post('/addCart', '\App\Controllers\CartController@addCart');
$router->post('/del', '\App\Controllers\CartController@del');
$router->get('/delCart', '\App\Controllers\CartController@delCart');
$router->post('/pay', '\App\Controllers\CartController@pay');

// Bill routes
$router->get('/payHistory', '\App\Controllers\BillController@payHistory');
$router->get('/detailBill', '\App\Controllers\BillController@detailBill');
$router->post('/cancleBill/([0-9]+)', '\App\Controllers\BillController@cancel');
$router->post('/recieved/([0-9]+)', '\App\Controllers\BillController@recieved');

// Management Products routes
$router->get('/manageProduct', '\App\Controllers\Manage\ManagementController@getAllProducts');
$router->post('/manageProduct', '\App\Controllers\Manage\ManagementController@sortAllProducts');

$router->get('/create', '\App\Controllers\Manage\ManagementController@showCreatePage');
$router->post('/createProduct', '\App\Controllers\Manage\ManagementController@createProduct');

$router->get('/manage/([A-Za-z0-9]+)', '\App\Controllers\Manage\ManagementController@showUpdatePage');
$router->post('/manage/update/([A-Za-z0-9]+)', '\App\Controllers\Manage\ManagementController@update');

$router->post('/manage/delete/([A-Za-z0-9]+)', '\App\Controllers\Manage\ManagementController@delete');

//Management Bill routes
$router->get('/manageBill', '\App\Controllers\Manage\ManagementController@manageBill');
$router->get('/manageDetailBill', '\App\Controllers\Manage\ManagementController@manageDetailBill');
$router->post('/manage/deleteBill/([0-9]+)', '\App\Controllers\Manage\ManagementController@cancelBill');
$router->post('/manage/sending/([0-9]+)', '\App\Controllers\Manage\ManagementController@send');
$router->post('/manageBill', '\App\Controllers\Manage\ManagementController@sortBill');

// Management Users routes
$router->get('/users', '\App\Controllers\Manage\ManagementController@getAllUsers');
$router->post('/users', '\App\Controllers\Manage\ManagementController@sortAllUsers');
$router->get('/userInfo', '\App\Controllers\Manage\ManagementController@userInfo');
$router->post('/updateUser', '\App\Controllers\Manage\ManagementController@updateUser');
$router->get('/passChange', '\App\Controllers\Manage\ManagementController@passChange');
$router->post('/updatePass', '\App\Controllers\Manage\ManagementController@updatePass');

$router->run();
