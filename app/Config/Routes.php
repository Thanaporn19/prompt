<?php

namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');   // default controller
$routes->setDefaultMethod('index');      // default method
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// เส้นทางหน้าแรก
$routes->get('/', 'Home::index'); // หน้าแรกเรียก Home::index

