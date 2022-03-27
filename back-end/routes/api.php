<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api'
], function(Router $router){

    $router->prefix('auth')->group(function (Router $router) {

        $router->post('login', [AuthController::class, 'login']);
        $router->post('logout', [AuthController::class, 'logout']);
        $router->post('refresh', [AuthController::class, 'refresh']);

    });


    $router->resource('user', UserController::class);
    $router->resource('blog', BlogController::class);
    $router->get('role', [RoleController::class, 'index']);
    $router->get('permission', [PermissionController::class, 'index']);


});

