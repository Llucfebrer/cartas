<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alergico;

class Producto extends Model
{
    //
    public function carta(){
        return $this->belongsTo(Carta::class);
    }

    public function alergicos(){
        return $this->belongsToMany(Alergico::class);
    }
}
