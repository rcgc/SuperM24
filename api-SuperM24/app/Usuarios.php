<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    public $primaryKey  = 'id_usuario';
    protected $fillable = [
        'id_usuario','Nombre', 'Alias','Telefono'
    ];
    public $timestamps = true;
}
