<?php

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

$router->group(['prefix' => 'api'], function () use ($router) {
    //get requests
    // Cat
    $router->get('cats/{id}', ['uses' => 'AutoCatController@getCatById']);
    $router->get('cats', ['uses' => 'AutoCatController@getAllCats']);

    // Adopter
    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    // FosterFamily
    $router->get('fosterfamilies/{id}', ['uses' => 'AutoCatController@getFosterFamilyById']);
    $router->get('fosterfamilies', ['uses' => 'AutoCatController@getAllFosterFamilies']);

    // CatRelation
    $router->get('catrelations/{catId}', ['uses' => 'AutoCatController@getCaRelationByCatId']);
    $router->get('catrelations', ['uses' => 'AutoCatController@getAllCatRelations']);

    // AdopterRoommate
    $router->get('adopterroommates/{adopterId}', ['uses' => 'AutoCatController@getRoommateByAdopterId']);
    $router->get('adopterroommates', ['uses' => 'AutoCatController@getAllAdopterRoommates']);
/*
    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);
*/
    //post request
    $router->post('adopters', ['uses' => 'AutoCatController@addAdopter']);
  
});
