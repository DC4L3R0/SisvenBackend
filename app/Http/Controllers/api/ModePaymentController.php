<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModePayment;
use Illuminate\Support\Facades\DB;

class ModePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mode_payment = ModePayment::all();
        return json_encode(['mode_payment' => $mode_payment]);
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
        $mode_payement = new Pay_method();
        $mode_payment -> id = $request -> id;
        $mode_payment -> name = $request -> name;
        $mode_payment -> other_details = $request -> other_details;
        $mode_payment -> save();

        return json_encode(['mode_payment' => $mode_payment]);
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
        $mode_payement = ModePayment::find($id);
        $mode_payement = db::table('mode_payment')
        ->orderBy('id')
        ->get();

        return json_encode(['mode_payment' => $mode_payement, 'mode_payment' => $mode_payement]);
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
        $mode_payment = ModePayment::find($id);
        $mode_payement -> id = $request -> id;
        $mode_payement -> name = $request -> name;
        $mode_payement -> other_details = $request -> other_details;
        $mode_payement -> save();

        return json_encode(['mode_payment' => $mode_payment]);
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
        $mode_payment = ModePayment::find($id);
        $mode_payment -> delete();

        $mode_payment = ModePayment::all();
        return json_encode(["mode_payment" => $mode_payment, 'success' => true]);
    }
}
