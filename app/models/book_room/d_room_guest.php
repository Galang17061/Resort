<?php

namespace App\models\book_room;

use Illuminate\Database\Eloquent\Model;

class d_room_guest extends Model
{
    protected $table = 'd_room_book_guest';
    protected $primaryKey = 'drbg_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [

  'drbg_id',
  'drbg_book_id',
  'drbg_first_name',
  'drbg_last_name',
  'drbg_address',
  'drbg_email',
  'drbg_phone',
  'drbg_phone1'

                          ];
    public function d_room_book(){
        return $this->belongsTo('App\models\book_room\d_room_book', 'drbg_book_id', 'drb_id');
    }
    public function c_room(){
        return $this->belongsTo('App\models\catalog\c_room', 'crf_id', 'cr_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}