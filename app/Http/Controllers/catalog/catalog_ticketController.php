<?php

namespace App\Http\Controllers\catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\models;
use Storage;
class catalog_ticketController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $models;
    public function __construct()
    {
        $this->middleware('auth');
        $this->models = new models();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = $this->models->m_ticket()->get();
        $data = $this->models->c_ticket()->with('m_ticket')->get();
        return view('backend.catalog.catalog_ticket.index',compact('data','ticket'));
    }
    public function create()
    {
        $type = DB::table('m_type_room')->get();
        $features = DB::table('m_features')->get();
        return view('backend.catalog.catalog_room.create',compact('type','features'));
    }
    public function save(Request $req)
    {
        $maxid = $this->models->c_ticket()->max('ct_id');
        $id = ($maxid == 0 ? 1 : $maxid+1);
        $save = $this->models->c_ticket()->create([
            'ct_id'=>$id,
            'ct_ticket'=>$req->ticket,
            'ct_qty'=>$req->qty,
            'ct_qty_sold'=>0,
            'ct_qty_left'=>0,
            'ct_created_at'=>date('Y-m-d h:i:s'),
        ]);
     
        return Response()->json(['status'=>'sukses']);
    }
    public function edit()
    {
        return view('catalog.catalog_room.create');
    }
    public function update(Request $req)
    {
        $save = $this->models->c_ticket()->where('ct_id',$req->id)->update([
            'ct_qty'=>$req->qty,
            'ct_qty_sold'=>$req->qty_sold,
            'ct_qty_left'=>$req->qty_left,
            'ct_created_at'=>date('Y-m-d h:i:s'),
        ]);
     
        return Response()->json(['status'=>'sukses']);
    }
    public function delete()
    {
    }
}
