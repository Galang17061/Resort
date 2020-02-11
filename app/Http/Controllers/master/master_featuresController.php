<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Validator;
use DB;
use App\m_features;

class master_featuresController extends Controller
{

    public function index()
    {

    	$data = DB::table('m_features')->get();

        return view('backend.master.master_features.index',compact('data'));
    }
    public function create()
    {
        return view('backend.master.master_features.create');
    }
    public function save(Request $request)
    {

    	//get all name/value
    	$input = $request->all();
    	//check unique row , if exist == 1
    	$check = DB::table('m_features')->where('mf_name',$request->mf_name)->count();
    	//function check
    	if ($check > 0) {
        	return response()->json(['status'=>'ada']);
    	}
    	//save data
        $data = m_features::create($input);
        //return response 
        if ($data == true) {
        	return response()->json(['status'=>'Sukses']);
        }else{
        	return response()->json(['status'=>'Gagal']);
        }

    }
    public function edit($id)
    {
    	$data = DB::table('m_features')->where('mf_id',$id)->first();

        return view('backend.master.master_features.edit',compact('data'));
    }
    public function update(Request $request)
    {
    	//get all name/value
        // dd($request->all());
        $input = $request->except('mf_id');
    	//check unique row , if exist == 1
    	// $check = DB::table('m_features')->where('mf_name',$request->mf_name)->count();
    	$check = DB::table('m_features')
                        ->where('mf_id',$request->mf_id)
                        ->first();

        if ($check != null) {
            if ($check->mf_id != $request->mf_id) {
                return response()->json(['status'=>'Ada']);
            }
        }
    	//save data
        $data = m_features::where('mf_id', $request->mf_id)->update($input);
        //return response 
        if ($data == true) {
        	return response()->json(['status'=>'Sukses']);
        }else{
        	return response()->json(['status'=>'Gagal']);
        }
    }
    public function delete($id)
    {
    	$check = DB::table('m_features')->where('mf_id',$id)->delete();

    	if ($check == true) {
    		return response()->json(['status'=>'sukses']);
        }else{
        	return response()->json(['status'=>'gagal']);	
    	}
    }
}
