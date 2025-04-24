<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modeluniforme extends Model
{
    protected $table = 'tblcamisetas';

    protected $fillabe = [
        'Equipo_uni',
        'Talla_uni',
        'Marca_uni',
        'Tipo_uni',
        'Precio_uni'
    ];

    public function venta_uni(){
        return $this->hasMany(Modelventa_uni::class);
    }
}
