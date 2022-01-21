<?php

namespace App\Http\Controllers;

use App\FosterFamily;
use Illuminate\Http\Request;

class FosterFamilyController extends Controller
{
    
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
}