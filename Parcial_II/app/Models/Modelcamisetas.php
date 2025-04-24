<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelcamisetas extends Model
{
    protected $table = 'tblcamisetas';

    protected $fillabe = [
        'Equipo',
        'Talla',
        'Marca',
        'Tipo',
        'Precio'
    ];

    public function vneta_cami(){
        return $this->hasMany(Modelvneta_cami::class);
    }
}
