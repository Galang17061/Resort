<?php

namespace App\models\master;

use Illuminate\Database\Eloquent\Model;

class m_features extends Model
{
    protected $table = 'm_features';
    protected $primaryKey = 'mf_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'mf_id',
                            'mf_name',
                            'mf_icon',
                            'mf_created_at',
                            'mf_updated_at',
                          ];

    public function c_room_features(){
        return $this->hasMany('App\models\catalog\c_room_features', 'crf_features', 'mf_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}