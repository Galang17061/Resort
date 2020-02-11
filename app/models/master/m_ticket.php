<?php

namespace App\models\master;

use Illuminate\Database\Eloquent\Model;

class m_ticket extends Model
{
    protected $table = 'm_ticket';
    protected $primaryKey = 'mt_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'mt_id',
                            'mt_name',
                            'mt_created_at',
                          ];

    public function c_ticket(){
        return $this->hasMany('App\models\catalog\c_ticket', 'c_ticket', 'mt_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}