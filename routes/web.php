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


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// Get Requests /////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Cat
    $router->get('cats/{id}', ['uses' => 'AutoCatController@getCatById']);
    $router->get('cats', ['uses' => 'AutoCatController@getAllCats']);

    // Adopter
    $router->get('adopters/{id}', ['uses' => 'AutoCatController@getAdopterById']);
    $router->get('adopters', ['uses' => 'AutoCatController@getAllAdopters']);

    // FosterFamily
    $router->get('fosterFamilies/{id}', ['uses' => 'AutoCatController@getFosterFamilyById']);
    $router->get('fosterfamilies', ['uses' => 'AutoCatController@getAllFosterFamilies']);

    // CatRelation
    $router->get('catRelations/{catId}', ['uses' => 'AutoCatController@getCaRelationByCatId']);
    $router->get('catRelations', ['uses' => 'AutoCatController@getAllCatRelations']);

    // AdopterRoommate
    $router->get('adopterRoommates/{adopterId}', ['uses' => 'AutoCatController@getRoommateByAdopterId']);
    $router->get('adopterRoommates', ['uses' => 'AutoCatController@getAllAdopterRoommates']);

    // AdopterPet
    $router->get('adopterPets/{adopterId}', ['uses' => 'AutoCatController@getPetsByAdopterId']);
    $router->get('adopterPets', ['uses' => 'AutoCatController@getAllAdopterPets']);

    // VetVisit
    $router->get('vetVisits/{catId}', ['uses' => 'AutoCatController@getVetVisitByCatId']);
    $router->get('', ['uses' => 'AutoCatController@getAllVetVisits']);
    
    // FosterPet
    $router->get('fosterPets/{fosterfamilyId}', ['uses' => 'AutoCatController@getFosterPetByFamilyId']);
    $router->get('vetVisits', ['uses' => 'AutoCatController@getAllFosterPets']);
    
    // FosterRoommate
    $router->get('fosterRoommates/{fosterfamilyId}', ['uses' => 'AutoCatController@getFosterRoommateByFamilyId']);
    $router->get('fosterRoommates', ['uses' => 'AutoCatController@getAllFosterRoommates']);
    
    // CatPicture
    $router->get('catPictures/{catId}', ['uses' => 'AutoCatController@getPicturesByCatId']);
    $router->get('catPictures', ['uses' => 'AutoCatController@getAllCatPictures']);
    
    // Shelter
    $router->get('shelters/{id}', ['uses' => 'AutoCatController@getShelterById']);
    $router->get('shelters', ['uses' => 'AutoCatController@getAllShelters']);
    
    // Weighing
    $router->get('weighings/{catId}', ['uses' => 'AutoCatController@getWeighingsByCatId']);
    $router->get('weighings', ['uses' => 'AutoCatController@getAllWeighings']);
    
    // Notification

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// Post Requests ////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Cat
    $router->post('cats', ['uses' => 'AutoCatController@addCat']);

    // Adopter
    $router->post('adopters', ['uses' => 'AutoCatController@addAdopter']);
    
    // FosterFamily
    $router->post('fosterFamilies', ['uses' => 'AutoCatController@addFosterFamily']);

    // CatRelation
    $router->post('catRelations', ['uses' => 'AutoCatController@addCatRelation']);

    // AdopterRoommate
    $router->post('adopterRoommates', ['uses' => 'AutoCatController@addAdopterRoommate']);

    // AdopterPet
    $router->post('adopterPets', ['uses' => 'AutoCatController@addAdopterPet']);

    // VetVisit
    $router->post('vetVisits', ['uses' => 'AutoCatController@addVetVisit']);

    // FosterPet
    $router->post('forsterPets', ['uses' => 'AutoCatController@addFosterPet']);

    // FosterRoommate
    $router->post('fosterRoommates', ['uses' => 'AutoCatController@addFosterRoommate']);

    // CatPicture
    $router->post('catPictures', ['uses' => 'AutoCatController@addCatPicture']);

    // Shelter
    $router->post('shelters', ['uses' => 'AutoCatController@addShelter']);

    // Weighing
    $router->post('weighings', ['uses' => 'AutoCatController@addWeighing']);

    // Notification

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// Put Requests /////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Cat
    $router->put('cats/{id}', ['uses' => 'AutoCatController@updateCat']);

    // Adopter
    $router->put('adopters/{id}', ['uses' => 'AutoCatController@updateAdopter']);
    
    // FosterFamily
    $router->put('fosterFamilies/{id}', ['uses' => 'AutoCatController@updateFosterFamily']);

    // CatRelation
    $router->put('catRelations/{id}', ['uses' => 'AutoCatController@updateCatRelation']);

    // AdopterRoommate
    $router->put('adopterRoommates/{id}', ['uses' => 'AutoCatController@updateAdopterRoommate']);

    // AdopterPet
    $router->put('adopterPets/{id}', ['uses' => 'AutoCatController@updateAdopterPet']);

    // VetVisit
    $router->put('vetVisits/{id}', ['uses' => 'AutoCatController@updateVetVisit']);

    // FosterPet
    $router->put('fosterPets/{id}', ['uses' => 'AutoCatController@updateFosterPet']);

    // FosterRoommate
    $router->put('fosterRoommates/{id}', ['uses' => 'AutoCatController@updateFosterRoommate']);

    // CatPicture
    $router->put('catPictures/{id}', ['uses' => 'AutoCatController@updateCatPicture']);

    // Shelter
    $router->put('shelters/{id}', ['uses' => 'AutoCatController@updateShelter']);

    // Weighing
    $router->put('weighings/{id}', ['uses' => 'AutoCatController@updateWeighing']);

    // Notification

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// Delete Requests //////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Cat
    $router->delete('cats/{id}', ['uses' => 'AutoCatController@deleteCat']);

    // Adopter
    $router->delete('adopters/{id}', ['uses' => 'AutoCatController@deleteAdopter']);
    
    // FosterFamily
    $router->delete('fosterFamilies/{id}', ['uses' => 'AutoCatController@deleteFosterFamily']);

    // CatRelation
    $router->delete('catRelations/{id}', ['uses' => 'AutoCatController@deleteCatRelation']);

    // AdopterRoommate
    $router->delete('adopterRoommates/{id}', ['uses' => 'AutoCatController@deleteAdopterRoommate']);

    // AdopterPet
    $router->delete('adopterPets/{id}', ['uses' => 'AutoCatController@deleteAdopterPet']);

    // VetVisit
    $router->delete('vetVisits/{id}', ['uses' => 'AutoCatController@deleteVetVisit']);

    // FosterPet
    $router->delete('fosterPets/{id}', ['uses' => 'AutoCatController@deleteFosterPet']);

    // FosterRoommate
    $router->delete('fosterRoommates/{id}', ['uses' => 'AutoCatController@deleteFosterRoommate']);

    // CatPicture
    $router->delete('catPictures/{id}', ['uses' => 'AutoCatController@deleteCatPicture']);

    // Shelter
    $router->delete('shelters/{id}', ['uses' => 'AutoCatController@deleteShelter']);

    // Weighing
    $router->delete('weighings/{id}', ['uses' => 'AutoCatController@deleteWeighing']);

    // Notification




});
