<?php

namespace App\Http\Controllers;

use App\auto;
use Illuminate\Http\Request;
use DB;
// Illuminate\Support\Facades\DB


        /*  
        SELECT authors.name AS author, books.name AS book, books.price FROM authors
        JOIN books ON authors.id = books.author.id
        */ 

        /* 
        SELECT authors.name AS author, books.name AS book, books.price FROM authors
        JOIN books ON authors.id = books.author.id
        */ 
class AutoCatController extends Controller
{

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////// CatController //////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllCats()
    {
        return response()->json(Cat::all());
    }

    public function getCatById($id)
    {
        return response()->json(Cat::findOrFail($id));
    }

    public function addCat(Request $request)
    {
        $cat = Cat::create($request->all());

        return response()->json($cat, 201);
    }

    public function updateCat($id, Request $request)
    {
        $cat = Cat::findOrFail($id);
        $cat->update($request->all());

        return response()->json($cat, 200);
    }

    public function deleteCat($id)
    {
        Cat::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// AdopterController ////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllAdopters()
    {
        return response()->json(Adopter::all());
    }

    public function getAdopterById($id)
    {
        return response()->json(Adopter::findOrFail($id));
    }

    public function createAdopter(Request $request)
    {
        $adopter = Adopter::create($request->all());

        return response()->json($adopter, 201);
    }

    public function updateAdopter($id, Request $request)
    {
        $adopter = Adopter::findOrFail($id);
        $adopter->update($request->all());

        return response()->json($adopter, 200);
    }

    public function deleteAdopter($id)
    {
        Adopter::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////// FosterFamilyController ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllFosterFamilies()
    {
        return response()->json(FosterFamily::all());
    }

    public function getFosterFamilyById($id)
    {
        return response()->json(FosterFamily::findOrFail($id));
    }

    public function createFosterFamily(Request $request)
    {
        $FosterFamily = FosterFamily::create($request->all());

        return response()->json($FosterFamily, 201);
    }

    public function updateFosterFamily($id, Request $request)
    {
        $FosterFamily = FosterFamily::findOrFail($id);
        $FosterFamily->update($request->all());

        return response()->json($FosterFamily, 200);
    }

    public function deleteFosterFamily($id)
    {
        FosterFamily::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// CatRelationController ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllCatRelations()
    {
        return response()->json(CatRelation::all());
    }

    public function getCatRelationByCatId($id)
    {
        return response()->json(CatRelation::where('cat1Id', $id));
    }

    public function addCatRelation(Request $request)
    {
        $cat = CatRelation::create($request->all());

        return response()->json($cat, 201);
    }

    public function updateCatRelation($id, Request $request)
    {
        $cat = CatRelation::findOrFail($id);
        $cat->update($request->all());

        return response()->json($cat, 200);
    }

    public function deleteCatRelation($id)
    {
        CatRelation::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////// AdopterRoommateController //////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllAdopterRoommates()
    {
        return response()->json(AdopterRoommate::all());
    }

    public function getRoommatesByAdopterId($id)
    {
        return response()->json(AdopterRoommate::where('adopterId', $id));
    }

    public function createAdopterRoommate(Request $request)
    {
        $adopterRoommate = AdopterRoommate::create($request->all());

        return response()->json($adopterRoommate, 201);
    }

    public function updateAdopterRoommate($id, Request $request)
    {
        $adopterRoommate = AdopterRoommate::findOrFail($id);
        $adopterRoommate->update($request->all());

        return response()->json($adopterRoommate, 200);
    }

    public function deleteAdopterRoommate($id)
    {
        AdopterRoommate::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// AdopterPetController /////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllAdopterPets()
    {
        return response()->json(AdopterPets::all());
    }

    public function getPetsByAdopterId($id)
    {
        return response()->json(AdopterPets::where('adopterId', $id));
    }

    public function createAdopterPet(Request $request)
    {
        $adopterPet = AdopterPets::create($request->all());

        return response()->json($adopterPet, 201);
    }

    public function updateAdopterPet($id, Request $request)
    {
        $adopterPet = AdopterPets::findOrFail($id);
        $adopterPet->update($request->all());

        return response()->json($adopterPet, 200);
    }

    public function deleteAdopterPet($id)
    {
        AdopterPets::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// vetVisitController ///////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllVetVisits()
    {
        return response()->json(VetVisit::all());
    }

    public function getVetVisitByCatId($id)
    {
        return response()->json(VetVisit::where('catId', $id));
    }

    public function createVetVisit(Request $request)
    {
        $vetVisit = VetVisit::create($request->all());

        return response()->json($vetVisit, 201);
    }

    public function updateVetVisit($id, Request $request)
    {
        $vetVisit = VetVisit::findOrFail($id);
        $vetVisit->update($request->all());

        return response()->json($vetVisit, 200);
    }

    public function deleteVetVisit($id)
    {
        VetVisit::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// FosterPetController //////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllFosterPets()
    {
        return response()->json(FosterPet::all());
    }

    public function getFosterPetByFamilyId($id)
    {
        return response()->json(FosterPet::where('fosterFamilyId', $id));
    }

    public function createFosterPet(Request $request)
    {
        $FosterPet = FosterPet::create($request->all());

        return response()->json($FosterPet, 201);
    }

    public function updateFosterPet($id, Request $request)
    {
        $FosterPet = FosterPet::findOrFail($id);
        $FosterPet->update($request->all());

        return response()->json($FosterPet, 200);
    }

    public function deleteFosterPet($id)
    {
        FosterPet::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////// FosterRoommateController //////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllFosterRoommates()
    {
        return response()->json(FosterRoommate::all());
    }

    public function getFosterRoommateByFamilyId($id)
    {
        return response()->json(FosterRoommate::where('fosterFamilyId', $id));
    }

    public function createFosterRoommate(Request $request)
    {
        $FosterRoommate = FosterRoommate::create($request->all());

        return response()->json($FosterRoommate, 201);
    }

    public function updateFosterRoommate($id, Request $request)
    {
        $FosterRoommate = FosterRoommate::findOrFail($id);
        $FosterRoommate->update($request->all());

        return response()->json($FosterRoommate, 200);
    }

    public function deleteFosterRoommate($id)
    {
        FosterRoommate::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// CatPictureController /////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAllCatPictures()
    {
        return response()->json(CatPicture::all());
    }

    public function getPicturesByCatId($id)
    {
        return response()->json(CatPicture::where('catId', $id));
    }

    public function addCatPicture(Request $request)
    {
        $catPicture = CatPicture::create($request->all());

        return response()->json($catPicture, 201);
    }

    public function updateCatPicture($id, Request $request)
    {
        $catPicture = CatPicture::findOrFail($id);
        $catPicture->update($request->all());

        return response()->json($catPicture, 200);
    }

    public function deleteCatPicture($id)
    {
        CatPicture::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// ShelterController /////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    public function getAllShelters()
    {
        return response()->json(Shelter::all());
    }

    public function getShelterById($id)
    {
        return response()->json(Shelter::findOrFail($id));
    }

    public function createShelter(Request $request)
    {
        $shelter = Shelter::create($request->all());

        return response()->json($shelter, 201);
    }

    public function updateShelter($id, Request $request)
    {
        $shelter = Shelter::findOrFail($id);
        $shelter->update($request->all());

        return response()->json($shelter, 200);
    }

    public function deleteShelter($id)
    {
        Shelter::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// WeighingController /////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    public function getAllWeighings()
    {
        return response()->json(Weighing::all());
    }

    public function getWeighingsByCatId($id)
    {
        return response()->json(Weighing::where('catId', $id));
    }

    public function createWeighing(Request $request)
    {
        $weighing = Weighing::create($request->all());

        return response()->json($weighing, 201);
    }

    public function updateWeighing($id, Request $request)
    {
        $weighing = Weighing::findOrFail($id);
        $weighing->update($request->all());

        return response()->json($weighing, 200);
    }

    public function deleteWeighing($id)
    {
        Weighing::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////// NotificationController /////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   


    /* public function showOneAuthor($id)
    {
        return response()->json(Author::find($id));
    }

    public function create(Request $request)
    {
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    } */
}