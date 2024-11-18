<?php

use app\controllers\ArticleController;
use app\controllers\AuthController;
use app\controllers\CategoryController;
use app\controllers\DashboardController;
use app\controllers\FrontendController;
use app\controllers\MediaController;
use app\controllers\UserController;
use app\middlewares\AdminMiddleware;
use app\middlewares\GuestMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Frontend
$router->get('/', FrontendController::class . '->index')->setAlias('home');
$router->get('/@alias',FrontendController::class.'->category')->setAlias('category');
$router->get('/@alias/view/@aliasId',FrontendController::class.'->view_blog')->setAlias('view_blog');

// Admin
$router->group('/admin', function(Router $router){

    // auth
    $router->get('/login',AuthController::class.'->login')->setAlias('admin.login');
    $router->post('/login',AuthController::class.'->loginRequest')->setAlias('admin.login_request');
    $router->get('/register',AuthController::class.'->register')->setAlias('admin.register');

},[GuestMiddleware::class]);

$router->group('/admin', function(Router $router){

    // auth
    $router->get('/logout',AuthController::class.'->logout')->setAlias('admin.logout');

    // dashboard
    $router->get('/dashboard', DashboardController::class.'->index')->setAlias('admin.dashboard.index');

    // users
    $router->get('/users',UserController::class.'->index')->setAlias('admin.users.index');
    $router->get('/users/create',UserController::class.'->create')->setAlias('admin.users.create');
    $router->post('/users/create',UserController::class.'->store')->setAlias('admin.users.store');
    $router->get('/users/edit/@id', UserController::class.'->edit')->setAlias('admin.users.edit');
    $router->post('/users/edit/@id', UserController::class.'->update')->setAlias('admin.users.update');
    $router->get('/users/delete/@id',UserController::class.'->destroy')->setAlias('admin.users.delete');

    // articles
    $router->get('/articles',ArticleController::class.'->index')->setAlias('admin.articles.index');
    $router->get('/articles/create',ArticleController::class.'->create')->setAlias('admin.articles.create');
    $router->post('/articles/create',ArticleController::class.'->store')->setAlias('admin.articles.store');
    $router->get('/articles/edit/@id', ArticleController::class. '->edit')->setAlias('admin.articles.edit');
    $router->post('/articles/edit/@id', ArticleController::class. '->update')->setAlias('admin.articles.update');
    $router->get('/articles/delete/@id',ArticleController::class.'->destroy')->setAlias('admin.articles.delete');
    $router->get('/articles/getAliasId/@alias',ArticleController::class.'->getAliasId')->setAlias('admin.articles.get_aliasId');
    
    // category
    $router->get('/category', CategoryController::class.'->index')->setAlias('admin.category.index');
    $router->get('/category/create',CategoryController::class.'->create')->setAlias('admin.category.create');
    $router->post('/category/create',CategoryController::class.'->store')->setAlias('admin.category.store');
    $router->get('/category/edit/@id', CategoryController::class.'->edit')->setAlias('admin.category.edit');
    $router->post('/category/edit/@id', CategoryController::class.'->update')->setAlias('admin.category.update');
    $router->get('/category/delete/@id',CategoryController::class.'->destroy')->setAlias('admin.category.delete');
    $router->get('/category/@alias',CategoryController::class.'->articles')->setAlias('admin.category.articles');

    // medias
    $router->get('/media/files', MediaController::class.'->index')->setAlias('admin.media.files');
    $router->post('/media/upload_files', MediaController::class.'->uploadFiles')->setAlias('admin.media.upload_files');

},[AdminMiddleware::class]);