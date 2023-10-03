<?php

use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Router;
use App\Controllers\PublicController;
use App\Controllers\UserController;

Router::get('/',[PublicController::class, 'home']);

Router::get('/about',[PublicController::class, 'about']);

Router::get('/test',[PublicController::class, 'test']);
Router::post('/test',[PublicController::class, 'testAns']);

Router::get('/admin/articles', [ArticlesController::class, 'index']);
Router::get('/admin/articles/new', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);
Router::get('/admin/articles/viwe', [ArticlesController::class, 'show']);
Router::get('/admin/articles/edit', [ArticlesController::class, 'edit']);
Router::post('/admin/articles/edit', [ArticlesController::class, 'update']);
Router::get('/admin/articles/delete', [ArticlesController::class, 'delete']);

Router::post('/register', [AuthController::class, 'register']);
Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/login', [AuthController::class, 'loginForm']);
Router::get('/logout', [AuthController::class, 'logout']);

Router::get('/admin/users', [UserController::class, 'index']);
Router::get('/admin/users/viwe', [UserController::class, 'show']);
Router::get('/admin/users/delete', [UserController::class, 'delete']);
