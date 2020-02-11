<?php

namespace App\models\catalog;

use Illuminate\Database\Eloquent\Model;

class c_room_features extends Model
{
    protected $table = 'c_room_features';
    protected $primaryKey = 'crf_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'crf_id',
                            'crf_dt',
                            'crf_features',
                            'crf_created_at',
                            'crf_updated_at'
                          ];

    public function c_room(){
        return $this->belongsTo('App\models\catalog\c_room', 'crf_id', 'cr_id');
    }
    public function m_features(){
        return $this->belongsTo('App\models\master\m_features', 'crf_features', 'mf_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}