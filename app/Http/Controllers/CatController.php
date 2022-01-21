<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    
    public function getAllCats()
    {
        return response()->json(Cat::all());
    }

    public function getCatById($id)
    {
        return response()->json(Cat::find($id));
    }

    public function addCat(Request $request)
    {
        $cat = Cat::create($request->all());

        return response()->json($cat, 201);
    }

    public function updateCat($id, Request $request)
    {
        $cat = Cat::findOrFail($id);
        $cat->update($request->all());

        return response()->json($cat, 200);
    }

    public function deleteCat($id)
    {
        Cat::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}