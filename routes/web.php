<?php

use App\Http\Controllers\LumenAuthController;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('home/index', 'HomeController@Index');

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    //Country
    $router->get('country', 'CountryController@Index');
    $router->post('country', 'CountryController@createCountry');
    $router->put('country/{id}', 'CountryController@updateCountry');
    $router->delete('country/{id}', 'CountryController@deleteCountry');
    //Customer
    $router->get('customer', 'CustomerController@Index');
    $router->post('customer', 'CustomerController@createCustomer');
    $router->put('customer/{id}', 'CustomerController@updateCustomer');
    $router->delete('customer/{id}', 'CustomerController@deleteCustomer');
    //User Auth
    $router->post('login', 'LumenAuthController@login');
    $router->post('logout', 'LumenAuthController@logout');
    $router->post('refresh', 'LumenAuthController@refresh');
    $router->post('me', 'LumenAuthController@me');
});

// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->post('login', 'LumenAuthController@login');
//     $router->post('logout', 'LumenAuthController@logout');
//     $router->post('refresh', 'LumenAuthController@refresh');
//     $router->post('me', 'LumenAuthController@me');
// });
