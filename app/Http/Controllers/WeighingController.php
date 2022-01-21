<?php

namespace App\Http\Controllers;

use App\Weighing;
use Illuminate\Http\Request;

class WeighingController extends Controller
{
    
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
}