<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinjamanUsp extends Model
{
    protected $guarded = [];

    public function anggota(){
        return $this->belongsTo('App\Anggota');
    }

    public function pembayarans(){
        return $this->morphMany('App\Pembayaran','pembayaranable');
    }
}
