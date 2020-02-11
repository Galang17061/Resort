<?php

namespace App\models\book_room;

use Illuminate\Database\Eloquent\Model;

class d_room_invoice extends Model
{
    protected $table = 'd_room_book_invoice';
    protected $primaryKey = 'drbi_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [

  'drbi_id',
  'drbi_code',
  'drbi_book_id',
  'drbi_created_by',
  'drbi_price',
  'drbi_image',
  'drbi_created_at',

                          ];
    public function d_room_book(){
        return $this->belongsTo('App\models\book_room\d_room_book', 'drbi_book_id', 'drb_id');
    }
    public function c_room(){
        return $this->belongsTo('App\models\catalog\c_room', 'crf_id', 'cr_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}