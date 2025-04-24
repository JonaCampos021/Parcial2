<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelbalones extends Model
{
    protected $table = 'tblbalones';

    protected $fillabe = [

        'Marca_bal',
        'Tamaño_bal',
        'Precio_bal'
    ];

    public function venta_balon(){
        return $this->hasMany(Modelventa_balon::class);
    }
}
