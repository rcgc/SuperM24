<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{

    protected $table = 'estatus';
    public $primaryKey  = 'id_estatus';
    protected $fillable = [
        'id_producto','Descripcion'
    ];
    public $timestamps = true;
    //
}
