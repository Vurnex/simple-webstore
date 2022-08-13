<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

#$routes->get('/', 'Home::index');

//Homepage
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);

//View Products
$routes->get('/products', 'Products::index',['filter' => 'auth']);

//View Cart
$routes->get('/cart', 'Cart::index',['filter' => 'auth']);

//Complete Purchase
$routes->get('/cart/complete', 'Cart::complete',['filter' => 'auth']);

//Add Products
$routes->get('/addproducts', 'AddProducts::index',['filter' => 'auth']);

//Edit Products
$routes->get('/editproducts', 'EditProducts::index',['filter' => 'auth']);

//View Sales
$routes->get('/sales', 'Sales::index',['filter' => 'auth']);

//Delete Sales
$routes->get('/sales/delete/(:any)', 'Sales::delete/$1',['filter' => 'auth']);
$routes->post('/sales/delete/(:any)', 'Sales::delete/$1',['filter' => 'auth']);

//Add Students
$routes->get('/createstudents', 'CreateStudents::index',['filter' => 'auth']);

//Delete Students
$routes->get('/students/delete/(:any)', 'Students::delete/$1',['filter' => 'auth']);
$routes->post('/students/delete/(:any)', 'Students::delete/$1',['filter' => 'auth']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
