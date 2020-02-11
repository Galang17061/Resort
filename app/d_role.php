<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_role extends Model
{
   protected $table = 'd_role';
   protected $primaryKey = 'r_id';
   const CREATED_AT = 'r_insert_at';
   const UPDATED_AT = 'r_updated_at';

   protected $fillable = ['r_id','r_name','r_level','r_insert_at','r_updated_at'];
}

    