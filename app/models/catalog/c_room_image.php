<?php

namespace App\models\catalog;

use Illuminate\Database\Eloquent\Model;

class c_room_image extends Model
{
    protected $table = 'c_room_image';
    protected $primaryKey = 'cri_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'cri_id',
                            'cri_dt',
                            'cri_image',
                            'cri_created_at',
                            'cri_updated_at'
                          ];

    public function c_room(){
        return $this->belongsTo('App\models\catalog\c_room', 'cri_id', 'cr_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}