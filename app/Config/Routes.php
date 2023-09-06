<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tamu', 'Tamu::index');
$routes->get('/add_data_tamu', 'Tamu::add_data_tamu');
