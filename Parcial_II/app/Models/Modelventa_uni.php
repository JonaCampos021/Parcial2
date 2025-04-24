<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelventa_uni extends Model
{
    protected $table = 'tblventa_uni';

    protected $fillabe = [
        'Cantidad_uni'
    ];

    public function uniforme(){
        return $this->hasMany(Modeluniforme::class);
    }
}
