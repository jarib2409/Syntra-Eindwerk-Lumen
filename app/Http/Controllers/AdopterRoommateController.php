<?php

namespace App\Http\Controllers;

use App\AdopterRoommate;
use Illuminate\Http\Request;

class AdopterRoommateController extends Controller
{
    
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
}