<?php

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = db::table('product')
        ->join('categories', 'product.categories_id', '=', 'categories.id')
        ->select('product.*', "categories.id")
        ->get();
        
        //$products = product::all();
        return json_encode(['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->id = $request->id;
        $product->name = $request->name;
        $product->price = $request-> price;
        $product->stock = $request-> stock;
        $product->categories_id = $request-> categories_id;
        $product->save();

        return json_encode(['product' => $product]);
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
        $product = Product::find($id);
        $categories = db::table('categories')
        ->orderBy('id')
        ->get();

        return json_encode(['product' => $product, 'categories' => $categories]);

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
        //
        $product = Product::find($id);
        $product->id = $request->id;
        $product->name = $request->name;
        $product->price = $request-> price;
        $product->stock = $request-> stock;
        $product->categories_id = $request-> categories_id;
        $product->save();

        return json_encode(['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        $product = db::table('product')
        ->join('categories', 'product.categories_id', '=', 'categories.id')
        ->select('product.*', "categories.id")
        ->get();

        return json_encode(['product' => $product, 'success' => true]);
    }
}
