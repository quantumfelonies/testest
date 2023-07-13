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
$routes->get('/', 'Home::index');
$routes->get('landing', 'LandingController::index');

$routes->get('auth/login', 'UserAuthController::login');
$routes->post('send-otp', 'UserAuthController::sendOTP');
$routes->post('verify-otp', 'UserAuthController::verifyOTP');

$routes->get('admin/index', 'AdminController::index');
$routes->get('admin/votersList', 'VoterController::index');
$routes->get('admin/register', 'CandidateController::register');
$routes->get('admin/view', 'CandidateController::index');
$routes->get('admin/list', 'CandidateController::index');

$routes->add('admin/candidates/register', 'CandidateController::register');
$routes->add('admin/candidates', 'CandidateController::list');
$routes->add('admin/candidates/(:num)', 'CandidateController::view/$1');


// $routes->group ('admin', function ($routes) {
//     $routes->get('voters', function(){
//         return "I am tired"
//     });
//     $routes->get('RegCandidates', 'RegCandidatesController::regcandidates');
// }

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
