<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Produtos::index');
##$routes->add('/home', 'Home::index');
$routes->setAutoRoute(true);
//$routes->post('/horaTrabalhada/save_registro', 'Horatrabalhada::save_registro');
$routes->get('/produtos/model', 'Produtos::model');
$routes->get('/produtos/novo', 'Produtos::novo');
$routes->post('/produtos/save', 'Produtos::save');


$routes->get('/clientes/novo', 'Clientes::novo');
$routes->get('/clientes/index', 'Clientes::index');
$routes->post('/clientes/store', 'Clientes::store');
$routes->get('/clientes/editar', 'Clientes::editar');

$routes->get('/inicio/index', 'Inicio::index');