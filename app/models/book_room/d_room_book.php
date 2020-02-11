<?php

namespace App\models\book_room;

use Illuminate\Database\Eloquent\Model;

class d_room_book extends Model
{
    protected $table = 'd_room_book';
    protected $primaryKey = 'drb_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

  

    protected $fillable = [
                            'drb_id' ,
                            'drb_code' ,
                            'drb_start_date',
                            'drb_end_date',
                            'drb_qty',
                            'drb_total_price',
                            'drb_guest',
                            'drb_user',
                            'drb_token',
                            'drb_token2',
                            'drb_created_by', 
                            'drb_room_price',
                            'drb_room_id',
                            'drb_additional_price',
                            'drb_tax_price',
                            'drb_serve_price',
                            'drb_type_bed',
                            'drb_created_at',
                            'drb_updated_at'
                          ];

    public function d_room_guest(){
        return $this->hasMany('App\models\book_room\d_room_guest', 'drbg_book_id', 'drb_id');
    }
    public function d_mem(){
        return $this->belongsTo('App\d_mem', 'drb_user', 'm_id');
    }
    public function c_room(){
        return $this->belongsTo('App\models\catalog\c_room', 'drb_room_id', 'cr_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}