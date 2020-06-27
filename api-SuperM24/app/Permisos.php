<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $table = 'permisos';
    public $primaryKey  = 'id_permiso';
    protected $fillable = [
        'id_permiso','Descripcion'
    ];
    public $timestamps = true;

}
