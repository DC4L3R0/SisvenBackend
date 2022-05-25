<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;



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
        return view("client.index", ["client" => $client]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = DB::table('client')
        ->orderBy('id_client')
        ->get();
        return view('client.new', ['client' => $client]);

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

        $client -> id_client = $request -> id_client;
        $client -> name = $request -> name;
        $client -> surname = $request -> surname;
        $client -> adress = $request -> adress;
        $client -> birth_date = $request -> birth_date;
        $client -> phone_number = $request -> phone_number;
        $client -> email = $request -> email; 
        $client -> save();

        $client = Client::all();
        return view('client.index', ['Client' => $client]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_client)
    {
        $client = Client::find($id_client);
        $client=DB::table('client')
        ->orderBy('id_client')
        ->get();
        return view('client.edit', ['categories' => $client, 'client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_client)
    {
        $client = Client::find($id_client);

        $client = new client();

        $client -> id_client = $request -> id_client;
        $client -> name = $request -> name;
        $client -> surname = $request -> surname;
        $client -> adress = $request -> adress;
        $client -> birth_date = $request -> birth_date;
        $client -> phone_number = $request -> phone_number;
        $client -> email = $request -> email;

        $client -> save();

        $client = Client::all();
        return view('client.index', ['client' => $client]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client -> delete();

        $client = Client::all();
        return view('client.index', ['client' => $client]);
    }
}
