<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;
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
        /*$categories = DB::table('categories')
      
        ->select('categories.*')
        ->get();*/
        
        return view("categories.index", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = DB::table('categories')
        ->orderBy('id')
        ->get();
        return view ('categories.new', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new categories();
        $categories-> id = $request->id;
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->save();

        $categories= Categories::all();
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::find($id);
        $categories=DB::table('categories')
        ->orderBy('id')
        ->get();
        return view('categories.edit', ['categories' => $categories, 'categories' => $categories]);

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
        $categories=Categories::find($id);
        $categories =new categories();
        $categories->id = $request->id;
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->save();

        $categories=Categorie::all();
        return view('categories.index', ['categories' => $categories]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=Categories::find($id);
        $categories->delete();
        
        $categories= Categories::all();
        return view ('categories.index', ['categories' => $categories]);

    }
}
