<?php

namespace App\Http\Controllers\frontend\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models;
use Mail;
use Auth;
class paymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $models;
    public function __construct()
    {
        $this->models = new models();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $dt = $this->models->d_room_book()->with('d_mem','c_room','d_room_guest')->where('drb_id',$req->id_book)->get();
        $dt[0]->d_room_guest[0]->drbg_first_name;
        return view('frontend.payment.payment',compact('dt'));
    }
    public function FunctionName($value='')
    {
        # code...
    }
}