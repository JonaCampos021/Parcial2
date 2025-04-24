<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelventa_balon extends Model
{
    protected $table = 'tblventa_balon';

    protected $fillabe = [
        'Cantidad_bal'
    ];

    public function balones(){
        return $this->hasMany(Modelbalones::class);
    }
}
