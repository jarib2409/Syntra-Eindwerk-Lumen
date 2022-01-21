<?php

namespace App\Http\Controllers;

use App\CatPicture;
use Illuminate\Http\Request;

class CatController extends Controller
{
    
    public function getAllCatPictures()
    {
        return response()->json(CatPicture::all());
    }

    public function getPicturesByCatId($id)
    {
        return response()->json(CatPicture::where('catId', $id));
    }

    public function addCatPicture(Request $request)
    {
        $catPicture = CatPicture::create($request->all());

        return response()->json($catPicture, 201);
    }

    public function updateCatPicture($id, Request $request)
    {
        $catPicture = CatPicture::findOrFail($id);
        $catPicture->update($request->all());

        return response()->json($catPicture, 200);
    }

    public function deleteCatPicture($id)
    {
        CatPicture::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}