<?php

namespace App\Http\Controllers;

use App\FosterRoommate;
use Illuminate\Http\Request;

class FosterRoommateController extends Controller
{
    
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
}