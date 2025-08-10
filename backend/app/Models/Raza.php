<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    //
    protected $table = 'raza';

    protected $primaryKey = 'id_raza';

    protected $fillable = [
        'id_especie',
        'nom_raza',
    ];
}
