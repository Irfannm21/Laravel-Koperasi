<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function pembayaranable(){
        return $this->morphTo();
    }
}
