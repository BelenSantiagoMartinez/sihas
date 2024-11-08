<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register_admin', 'Home::register_admin');
$routes->get('/register_case', 'Home::register_case');
$routes->get('/case_file', 'Home::case_file');

