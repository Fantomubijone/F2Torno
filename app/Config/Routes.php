<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Index::index');
$routes->get('/Sukuna', 'Index::friend1');
$routes->get('/Gojo', 'Index::friend2');
$routes->get('/Yuji', 'Index::friend3');
