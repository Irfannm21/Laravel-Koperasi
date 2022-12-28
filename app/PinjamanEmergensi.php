<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinjamanEmergensi extends Model
{
    protected $guarded = [];


    public function pembayarans(){
        return $this->morphMany('App\Pembayaran','pembayaranable');
    }

    public function anggota(){
        return $this->belongsTo('App\Anggota');
    }
}
