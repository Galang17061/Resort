<?php

namespace App\Http\Controllers\catalog;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use DB;

class catalog_categoriesController extends Controller
{
    
    public function index()
    {
        $data = DB::table('m_category')->get();

        return view('catalog.catalog_category.index',compact('data'));
    }
}
