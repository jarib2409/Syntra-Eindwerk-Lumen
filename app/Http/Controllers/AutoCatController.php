<?php

namespace App\Http\Controllers;

use App\auto;
use Illuminate\Http\Request;
use DB;
// Illuminate\Support\Facades\DB


        /*  
        SELECT authors.name AS author, books.name AS book, books.price FROM authors
        JOIN books ON authors.id = books.author.id
        */ 

        /* 
        SELECT authors.name AS author, books.name AS book, books.price FROM authors
        JOIN books ON authors.id = books.author.id
        */ 
class AutoCatController extends Controller
{
    
    public function showCats()
    {
        $result = DB::query("SELECT * FROM cats");
        return json_encode($result);
    }

    public function addAdopter()
    {
        
    }

    public function addCat(){

    }

    /* public function showOneAuthor($id)
    {
        return response()->json(Author::find($id));
    }

    public function create(Request $request)
    {
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    } */
}