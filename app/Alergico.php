<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class Alergico extends Model
{
    public function productos(){
        return $this->belongsToMany(Producto::class);
    }
}
