<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class d_mem extends Authenticatable
{
    protected $table = 'd_mem';
    protected $primaryKey = 'm_id';
    public $incrementing = false;
    public $remember_token = false;
    const CREATED_AT = 'm_insert';
    const UPDATED_AT = 'm_update';

    protected $fillable = ['m_id','m_name','m_birth_tgl','m_nik','m_address','m_img','m_tempat_lahir','m_kel','m_isactive','m_jabatan','m_username', 'm_password', 'm_lastlogin', 'm_lastlogout', 'm_insert', 'm_update'];

    public function d_room_book(){
        return $this->hasMany('App\models\room_book\d_room_book', 'drb_user', 'm_id');
    }
    public function akses($fitur,$aksi){
         $cek = DB::table('d_mem')
                ->leftjoin('r_role', 'r_level', '=', 'm_role')
                ->where('r_menu', '=', $fitur)
                ->where($aksi, '=', 'true') 
                ->where('id', '=', Auth::user()->id)             
                ->get();
          // return $cek;
        
        if(count($cek) != 0)
            return true;
        else
            return false;
    }

}