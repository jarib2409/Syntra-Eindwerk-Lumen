<?php

namespace App\Http\Controllers;

use App\VetVisit;
use Illuminate\Http\Request;

class VetVisitController extends Controller
{
    
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
}