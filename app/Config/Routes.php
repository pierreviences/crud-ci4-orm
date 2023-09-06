<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tamu', 'Tamu::index');
$routes->get('/add_data_tamu', 'Tamu::add_data_tamu');
$routes->post('/proses_add_tamu', 'Tamu::proses_add_tamu');
$routes->get('/edit_data_tamu/(:any)', 'Tamu::edit_data_tamu/$1');
