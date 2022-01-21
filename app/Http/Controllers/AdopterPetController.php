<?php

namespace App\Http\Controllers;

use App\AdopterPets;
use Illuminate\Http\Request;

class AdopterPetController extends Controller
{
    
    public function getAllAdopters()
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
}