<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/home', 'Home::home');
// $routes->get('/about', 'Home::about');
$routes->get('/about', 'Home::about');



$routes->group('admin', static function($routes){
    $routes->get('dashboard', 'Admin\DashboardController::index');
    $routes->get('announcements', 'Admin\AnnouncementController::index');
    $routes->get('add-announcements', 'Admin\AnnouncementController::create');
    $routes->post('store', 'Admin\AnnouncementController::store');
    $routes->get('scholars', 'Admin\ScholarInfoController::index');
    $routes->get('add-scholars', 'Admin\ScholarInfoController::create');
    $routes->post('store-scholar', 'Admin\ScholarInfoController::store');
    // $routes->get('edit/(:num)', 'Products::edit/$1');
    // $routes->post('update', 'Products::update');
    // $routes->get('delete/(:num)', 'Products::delete/$1');
});


// $routes->get('admin/dashboard/', 'Admin\DashboardController::index'); 
// $routes->get('admin/announcements/', 'Admin\AnnouncementController::index'); 
// $routes->get('admin/add-announcements/', 'Admin\AnnouncementController::create'); 
// $routes->get('admin/scholars/', 'Admin\ScholarInfoController::index');
// $routes->get('admin/add-scholars/', 'Admin\ScholarInfoController::AddScholar');
// $routes->get('admin/accounts/', 'Admin\AccountController::index'); 


