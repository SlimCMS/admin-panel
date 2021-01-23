<?php

/**
 * @var RouterInterface $router
 */

use Slimcms\Route\Interfaces\RouterInterface;

$router->get('/admin', 'AdminController@show_dashboard');
$router->get('/admin/modules', 'ModuleController@show_modules');
$router->get('/admin/users', 'AdminController@show_users');
$router->get('/admin/posts', 'AdminController@show_posts');
$router->get('/admin/settings', 'AdminController@show_settings');
$router->get('/admin/theme', 'AdminController@show_theme');
