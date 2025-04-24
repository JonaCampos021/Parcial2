<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelvneta_cami extends Model
{
    protected $table = 'tblvneta_cami';

    protected $fillabe = [
        'Cantidad_cami'
    ];

    public function camisetas(){
        return $this->hasMany(Modelcamisetas::class);
    }
}
