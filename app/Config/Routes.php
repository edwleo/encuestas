<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/encuesta/agregar', 'ResultadoController::registrar');
$routes->get('/encuesta/confirmar', 'ResultadoController::confirmar');

$routes->get('/api/public/empresas/(:num)', 'APIController::getCompanyData/$1');