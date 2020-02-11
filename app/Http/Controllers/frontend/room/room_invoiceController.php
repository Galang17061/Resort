<?php

namespace App\Http\Controllers\frontend\room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class room_invoiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.room.room_invoice');
    }
    public function FunctionName($value='')
    {
        # code...
    }
}