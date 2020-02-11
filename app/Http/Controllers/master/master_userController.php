<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Validator;
use DB;
use App\d_role;

class master_userController extends Controller
{

    public function index()
    {

        $data = DB::table('d_mem')->where('m_role','!=','10')->where('m_role','!=','11')->get();

        return view('backend.master.master_user.index',compact('data'));
    }
    public function create()
    {
        return view('backend.master.master_user.create');
    }
    public function save(Request $request)
    {

        //get all name/value
        $input = $request->all();
        //check unique row , if exist == 1
        $check = DB::table('d_role')->where('r_level',$request->r_level)->count();
        //function check
        if ($check > 0) {
            return response()->json(['status'=>'ada']);
        }
        //save data
        $data = d_role::create($input);
        //return response 
        if ($data == true) {
            return response()->json(['status'=>'sukses']);
        }else{
            return response()->json(['status'=>'gagal']);
        }

    }
    public function edit($id)
    {
        $data = DB::table('d_role')->where('r_id',$id)->first();

        return view('backend.master.master_user.edit',compact('data'));
    }
    public function update(Request $request)
    {
        //get all name/value
        $input = $request->except('r_id');
        //check unique row , if exist == 1
        // $check = DB::table('d_role')->where('r_level',$request->r_level)->count();
        $check = DB::table('d_role')
                        ->where('r_id',$request->r_id)
                        ->first();

        if ($check != null) {
            if ($check->r_id != $request->r_id) {
                return response()->json(['status'=>'ada']);
            }
        }
        //save data
        $data = d_role::where('r_id', $request->r_id)->update($input);
        //return response 
        if ($data == true) {
            return response()->json(['status'=>'sukses']);
        }else{
            return response()->json(['status'=>'gagal']);
        }
    }
    public function delete($id)
    {
        $check = DB::table('d_role')->where('r_id',$id)->delete();

        if ($check == true) {
            return response()->json(['status'=>'sukses']);
        }else{
            return response()->json(['status'=>'gagal']);   
        }
    }
}
