<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('tiempo','Home::api');


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
/* RUTEO DE NOTICIAS */
$routes->get('listar','Noticias::index');

$routes->get('crear','Noticias::crear');

$routes->post('guardar','Noticias::guardar');

$routes->get('borrar/(:num)','Noticias::borrar/$1');

$routes->get('editar/(:num)','Noticias::editar/$1');

$routes->post('actualizar','Noticias::actualizar');

/*RUTEO DE <CATEGOIRAS></CATEGOIRAS*/

$routes->get('listarCategorias','Categorias::index');

$routes->get('crearCategoria','Categorias::crear');

$routes->post('guardarCategoria','Categorias::guardar');

$routes->get('borrarCategoria/(:num)','Categorias::borrar/$1');

$routes->get('editarCategoria/(:num)','Categorias::editar/$1');

$routes->post('actualizarCategoria','Categorias::actualizar');

/*RUTEO DE <USUARIOS></USUARIOS> */
$routes->get('admin', 'Usuarios::panel');

$routes->get('loginA', 'Usuarios::login');

$routes->post('loginLecture', 'Usuarios::lecture');

$routes->get('listarUsuarios','Usuarios::index');

$routes->get('crearUsuario','Usuarios::crear');

$routes->post('guardarUsuario','Usuarios::guardar');

$routes->get('borrarUsuario/(:num)','Usuarios::borrar/$1');

$routes->get('editarUsuario/(:num)','Usuarios::editar/$1');

$routes->post('actualizarUsuario','Usuarios::actualizar');

$routes->get('salir','Usuarios::salir');

