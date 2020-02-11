<?php

namespace App\Http\Controllers\backend\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\models;
use Storage;
class order_roomController extends Controller
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
        $data = $this->models->d_room_book()->with('d_mem')->with('d_room_guest')->get();
        return view('backend.order.order_room.index',compact('data'));
    }
    public function create()
    {
        $type     = DB::table('m_type_room')->get();
        $features = DB::table('m_features')->get();
        return view('backend.order.order_room.create',compact('type','features'));
    }
    public function save(Request $req)
    {
        // dd($req->all());
        $maxid = $this->models->c_room()->max('cr_id');
        $id = ($maxid == 0 ? 1 : $maxid+1);
        $total = filter_var($req->cr_price,FILTER_SANITIZE_NUMBER_INT)/1+filter_var($req->cr_tax,FILTER_SANITIZE_NUMBER_INT)/1+filter_var($req->cr_serve,FILTER_SANITIZE_NUMBER_INT)/1+filter_var($req->cr_additional,FILTER_SANITIZE_NUMBER_INT)/1;
        $save = $this->models->c_room()->create([
            'cr_id'=>$id,
            'cr_name'=>$req->cr_name,
            'cr_desc'=>$req->cr_desc,
            'cr_desc_short'=>$req->cr_desc_short,
            'cr_type_room'=>$req->cr_type,
            'cr_total'=>$total,
            'cr_price'=>filter_var($req->cr_price,FILTER_SANITIZE_NUMBER_INT)/1,
            'cr_tax'=>filter_var($req->cr_tax,FILTER_SANITIZE_NUMBER_INT)/1,
            'cr_serve'=>filter_var($req->cr_serve,FILTER_SANITIZE_NUMBER_INT)/1,
            'cr_additional'=>filter_var($req->cr_additional,FILTER_SANITIZE_NUMBER_INT)/1,
            'cr_payment'=>$req->payment,
        ]);
     
        for ($i=0; $i <count($req->features) ; $i++) { 
            $save_features = $this->models->c_room_features()->create([
                'crf_id'=>$id,
                'crf_features'=>$req->features[$i],
            ]); 
        }

        if($req->hasfile('crd_img')){
            foreach($req->file('crd_img') as $index => $image )
            {
                $photo = 'room/room_'.$id.'_'.$index.'.png';
                Storage::put($photo,file_get_contents($image));
                $save_image = $this->models->c_room_image()->create([
                    'cri_id'=>$id,
                    'cri_image'=>$photo,
                ]); 
            }
        }
        // return 'a';
    }
    public function edit()
    {
        return view('order.order_room.create');
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
