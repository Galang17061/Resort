<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\models\catalog\c_room;
use App\d_mem;
use App\models\catalog\c_room_features;
use App\models\catalog\c_room_image;
use App\models\catalog\c_ticket;
use App\models\master\m_type_room;
use App\models\master\m_features;
use App\models\master\m_ticket;
use App\models\book_room\d_room_book;
use App\models\book_room\d_room_guest;


class models extends Model
{
    public function c_room()
    {
        $c_room = new c_room();
        return $c_room;
    }
    public function d_mem()
    {
        $d_mem = new d_mem();
        return $d_mem;
    }
    public function c_room_features()
    {
        $c_room_features = new c_room_features();
        return $c_room_features;
    }
    public function c_room_image()
    {
        $c_room_image = new c_room_image();
        return $c_room_image;
    }
    public function m_type_room()
    {
        $m_type_room = new m_type_room();
        return $m_type_room;
    }
    public function m_features()
    {
        $m_features = new m_features();
        return $m_features;
    }
    public function c_ticket()
    {
        $c_ticket = new c_ticket();
        return $c_ticket;
    }
    public function m_ticket()
    {
        $m_ticket = new m_ticket();
        return $m_ticket;
    }
    public function d_room_book()
    {
        $d_room_book = new d_room_book();
        return $d_room_book;
    }
    public function d_room_guest()
    {
        $d_room_guest = new d_room_guest();
        return $d_room_guest;
    }

}
