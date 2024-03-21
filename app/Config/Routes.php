<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/home', 'Home::home');
// $routes->get('/about', 'Home::about');
// $routes->get('/home', 'Home::home');

$routes->group('home', static function ($routes) {
    $routes->get('login', 'Authentication::login');
    $routes->get('forgot-password', 'Authentication::verification');
    $routes->get('otp','Authentication::otp');
});
$routes->group('auth', static function ($routes) {
    $routes->post('log', 'AuthPost::log');
    $routes->post('send', 'AuthPost::sendVerification');
    $routes->post('verify', 'AuthPost::verificationCode');

});

$routes->group('admin', static function ($routes) {
    $routes->get('dashboard', 'Admin\DashboardController::index');
    $routes->get('announcements', 'Admin\AnnouncementController::index');
    $routes->get('add-announcements', 'Admin\AnnouncementController::create');
    $routes->post('store', 'Admin\AnnouncementController::store');
    $routes->get('edit-announcement/(:num)', 'Admin\AnnouncementController::edit/$1');
    $routes->post('update-announcement', 'Admin\AnnouncementController::update');
    $routes->get('delete-announcement/(:num)', 'Admin\AnnouncementController::delete/$1');

    $routes->get('scholars', 'Admin\ScholarInfoController::index');
    $routes->get('add-scholars', 'Admin\ScholarInfoController::create');
    $routes->post('store-scholar', 'Admin\ScholarInfoController::store');
    $routes->get('edit-scholar/(:num)', 'Admin\ScholarInfoController::edit/$1');
    $routes->post('update-scholar', 'Admin\ScholarInfoController::update');
    $routes->get('delete-scholar/(:num)', 'Admin\ScholarInfoController::delete/$1');



    // $routes->get('edit/(:num)', 'Products::edit/$1');
    // $routes->post('update', 'Products::update');
    // $routes->get('delete/(:num)', 'Products::delete/$1');
});

$routes->group('admin2', static function ($routes) {
    // $routes->get('dashboard', 'Admin\DashboardController::index');
    $routes->get('dashboard', 'Admin\Announcement::index2');
    $routes->get('announcements', 'Admin\AnnouncementController::index');
    $routes->get('add-announcements', 'Admin\AnnouncementController::create');
    $routes->post('store', 'Admin\AnnouncementController::store');
    $routes->get('edit-announcement/(:num)', 'Admin\AnnouncementController::edit/$1');
    $routes->post('update-announcement', 'Admin\AnnouncementController::update');
    $routes->get('delete-announcement/(:num)', 'Admin\AnnouncementController::delete/$1');

    $routes->get('scholars', 'Admin\ScholarInfoController::index');
    $routes->get('add-scholars', 'Admin\ScholarInfoController::create');
    $routes->post('store-scholar', 'Admin\ScholarInfoController::store');
    $routes->get('edit-scholar/(:num)', 'Admin\ScholarInfoController::edit/$1');
    $routes->post('update-scholar', 'Admin\ScholarInfoController::update');
    $routes->get('delete-scholar/(:num)', 'Admin\ScholarInfoController::delete/$1');
    // $routes->get('edit-announcement/(:num)', 'Admin\AnnouncementController::edit/$1');

    // $routes->get('admin/dashboard/', 'Admin\DashboardController::index'); 
// $routes->get('admin/announcements/', 'Admin\AnnouncementController::index'); 
// $routes->get('admin/add-announcements/', 'Admin\AnnouncementController::create'); 
// $routes->get('admin/scholars/', 'Admin\ScholarInfoController::index');
// $routes->get('admin/add-scholars/', 'Admin\ScholarInfoController::AddScholar');
// $routes->get('admin/accounts/', 'Admin\AccountController::index'); 

});
