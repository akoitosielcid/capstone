<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/home', 'Home::home');
// $routes->get('/about', 'Home::about');
$routes->get('/about', 'Home::about');



$routes->get('admin/dashboard/', 'Admin\DashboardController::index'); 
$routes->get('admin/announcements/', 'Admin\AnnouncementController::index'); 
$routes->get('admin/add-announcements/', 'Admin\AnnouncementController::addAnnouncement'); 

