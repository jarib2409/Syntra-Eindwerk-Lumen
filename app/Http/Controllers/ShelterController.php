<?php

namespace App\Http\Controllers;

use App\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    
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
}