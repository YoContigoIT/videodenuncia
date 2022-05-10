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
$routes->setDefaultController('client\MainController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');

$routes->group('justicia', function ($routes) {
    $routes->get('/', 'admin/LoginController::index');
    $routes->get('login', 'admin/LoginController::index');

    $routes->group('dashboard', function ($routes) {
        $routes->get('/', 'admin/DashboardController::index');
        $routes->get('atencion', 'admin/DashboardController::atencion');
    });
});

$routes->group('denuncia', function ($routes) {
    $routes->get('/', 'client/LoginController::index');
    $routes->get('login', 'client/LoginController::index');
    $routes->get('registro', 'client/RegistroController::index');
    $routes->get('recuperar', 'client/LoginController::change_password');

    $routes->group('dashboard', function ($routes) {
        $routes->get('/', 'client/DashboardController::index');
        $routes->get('video-denuncia', 'client/DashboardController::video_denuncia');
        $routes->get('denuncias', 'client/DashboardController::denuncias');
    });
});

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
