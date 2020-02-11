<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class homeController extends Controller
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
    public function index()
    {
        $dt = $this->models->c_room()->get();
        $data = [];
        foreach ($dt as $key => $value) {
           $data[$key] = $value;
           $data[$key]->m_type_room;
           $data[$key]->c_room_image;
           $data[$key]->c_room_features;
        }
        // return $data;
        return view('welcome',compact('data'));
    }
}
