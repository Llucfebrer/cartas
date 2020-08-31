<?php

namespace App;
use App\Carta;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = [
        'nombre', 'direccion', 'descripcion',
    ];

    public function cartas()
    {
        return $this->hasMany(Carta::class);
    }
}
