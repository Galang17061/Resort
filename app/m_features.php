<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_features extends Model
{
   protected $table = 'm_features';
   protected $primaryKey = 'mf_id';
   const CREATED_AT = 'mf_created_at';
   const UPDATED_AT = 'mf_updated_at';

   protected $fillable = ['mf_id','mf_name','mf_icon','mf_created_at','mf_updated_at'];
}

    