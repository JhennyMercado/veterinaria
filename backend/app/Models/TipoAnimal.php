<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAnimal extends Model
{
    //
    protected $table = 'tipo_animal';

    protected $primaryKey = 'id_tipo';

    protected $fillable = [
        'nom_tipo',
    ];
}
