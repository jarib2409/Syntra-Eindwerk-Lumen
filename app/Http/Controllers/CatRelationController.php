<?php

namespace App\Http\Controllers;

use App\CatRelation;
use Illuminate\Http\Request;

class CatRelationController extends Controller
{
    
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
}