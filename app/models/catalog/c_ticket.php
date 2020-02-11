<?php

namespace App\models\catalog;

use Illuminate\Database\Eloquent\Model;

class c_ticket extends Model
{
    protected $table = 'c_ticket';
    protected $primaryKey = 'ct_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'ct_id',
                            'ct_ticket',
                            'ct_qty',
                            'ct_qty_sold',
                            'ct_qty_left',
                            'ct_created_at',
                            'ct_updated_at'
                          ];

    public function m_ticket(){
        return $this->belongsTo('App\models\master\m_ticket', 'ct_ticket', 'mt_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}