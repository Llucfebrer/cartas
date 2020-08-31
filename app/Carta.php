<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class Carta extends Model
{
    //
    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
