<?php

namespace App\models\catalog;

use Illuminate\Database\Eloquent\Model;

class c_room extends Model
{
    protected $table = 'c_room';
    protected $primaryKey = 'cr_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'cr_id',
                            'cr_kode',
                            'cr_name',
                            'cr_desc',
                            'cr_desc_short',
                            'cr_price',
                            'cr_tax',
                            'cr_type_room',
                            'cr_total',
                            'cr_additional',
                            'cr_serve',
                            'cr_payment',
                            'cr_created_at',
                            'cr_updated_at'
                          ];

    public function c_room_features(){
        return $this->hasMany('App\models\catalog\c_room_features', 'crf_id', 'cr_id');
    }
    public function c_room_image(){
        return $this->hasMany('App\models\catalog\c_room_image', 'cri_id', 'cr_id');
    }
    public function d_room_book(){
        return $this->hasMany('App\models\book_room\d_room_book', 'drb_room_id', 'cr_id');
    }
    public function m_type_room(){
        return $this->belongsTo('App\models\master\m_type_room', 'cr_type_room', 'tr_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}