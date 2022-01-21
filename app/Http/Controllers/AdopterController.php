<?php

namespace App\Http\Controllers;

use App\Adopter;
use Illuminate\Http\Request;

class AdopterController extends Controller
{
    
    public function getAllAdopters()
    {
        return response()->json(Adopter::all());
    }

    public function getAdopterById($id)
    {
        return response()->json(Adopter::find($id));
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
}