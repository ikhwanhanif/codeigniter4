<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Images::index');

$routes->get('images/create', 'Images::create');
$routes->post('images/store', 'Images::store');
$routes->get('images/edit/(:num)', 'Images::edit/$1');
$routes->post('images/update', 'Images::update');
$routes->delete('images/delete/(:num)', 'Images::delete/$1');

