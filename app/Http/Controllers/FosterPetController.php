<?php

namespace App\Http\Controllers;

use App\FosterPet;
use Illuminate\Http\Request;

class FosterPetController extends Controller
{
    
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
}