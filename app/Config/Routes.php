<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/' , 'LoginController::index'); 
$routes->post('/login' , 'LoginController::login'); 

//$routes->get('/', 'UsersController::index');
$routes->get('roles', 'UsersController::index'); // Listar roles
$routes->get('roles/new', 'UsersController::new'); // Formulario de creación de rol
$routes->post('roles/create', 'UsersController::create'); // Procesar creación de rol
$routes->get('roles/edit/(:num)', 'UsersController::edit/$1'); // Formulario de edición de rol
$routes->post('roles/update/(:num)', 'UsersController::update/$1'); // Procesar actualización de rol
$routes->get('roles/delete/(:num)', 'UsersController::delete/$1'); // Eliminar rol



//$routes->get('/', 'UsersController::index');
$routes->get('student', 'EstudiateController::index'); // Listar roles
$routes->get('student/new', 'EstudiateController::new'); // Formulario de creación de rol
$routes->post('student/create', 'EstudiateController::create'); // Procesar creación de rol
$routes->get('student/edit/(:num)', 'EstudiateController::edit/$1'); // Formulario de edición de rol
$routes->post('student/update/(:num)', 'EstudiateController::update/$1'); // Procesar actualización de rol
$routes->get('student/delete/(:num)', 'EstudiateController::delete/$1'); // Eliminar rol








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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
