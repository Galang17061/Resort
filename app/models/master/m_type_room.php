<?php

namespace App\models\master;

use Illuminate\Database\Eloquent\Model;

class m_type_room extends Model
{
    protected $table = 'm_type_room';
    protected $primaryKey = 'tr_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'tr_id',
                            'tr_name',
                            'tr_created_at',
                          ];

    public function c_room(){
        return $this->hasMany('App\models\catalog\c_room', 'cr_type_room', 'tr_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}