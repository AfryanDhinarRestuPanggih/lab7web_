<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Auto routing enabled
$routes->setAutoRoute(true);

// Suppress IDE warnings for route definitions
// CodeIgniter 4 accepts string as second parameter for controller::method format
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos');

// Routes untuk Artikel (Public)
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

// Route untuk test database
$routes->get('/testdb', 'TestDB::index');

// Admin Group Routes
$routes->group('admin', function($routes) {
$routes->get('artikel', 'Artikel::admin_index');
$routes->add('artikel/add', 'Artikel::add');
$routes->post('artikel/save', 'Artikel::save');
$routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
$routes->post('artikel/update/(:any)', 'Artikel::update/$1');
$routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});
