<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Iluminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return json_encode (["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new Categories();
        $categorie->id = $request->id;
        $categorie->name = $request->name;
        $categorie->description = $request->description;
        $categorie->save();
        return json_encode(['categorie' => $categorie]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categories::find($id);
        $categorie = db::table('categories')
        ->orderBy('id')
        ->get();

        return json_encode(['categorie' => $categorie, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categories::find($id);
        $categorie->id = $request->id;
        $categorie->name = $request->name;
        $categorie->description = $request->description;
        $categorie->save();

        return json_encode(['categorie' => $categorie]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categories::find($id);
        $categorie->delete();

        $categorie = Categories::all();
        return json_encode(['categories' => $categories, 'success' => true]);
    }
}
