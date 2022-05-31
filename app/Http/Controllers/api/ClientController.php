<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Iluminate\Support\Facades\DB;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $client = Client::all();
       return json_encode(['client' => $client]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->id = $request->id;
        $client->name=$request->name;
        $client->surname=$request->surname;
        $client->birth_date=$request->birth_date;
        $client->phone_number=$request->phone_number;
        $client->email=$request->email;
        $client->save();
        return json_encode(['client' => $client]);
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
        $client =Client::find($id);
        $client= DB::table('client')
        ->orderBy('id')
        ->get();

        return json_encode(['client' => $client, 'client' => $client]);
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
        $client = Client::find($id);
        $client->id = $request -> id;
        $client->name = $request -> name;
        $client->surname = $request -> surname;
        $client->adress = $request -> adress;
        $client->birth_date = $request -> birth_date;
        $client->phone_number = $request -> phone_number;
        $client->email = $request -> email;
        $client->save();
        return json_encode(['client' =>$client]);
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
        $client = Client::find($id);
        $client->delete();

        $client=Client::all();
        return json_encode(['client' => $client, 'success' => true]);
    }
}
