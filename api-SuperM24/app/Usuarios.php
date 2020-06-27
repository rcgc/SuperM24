<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    public $primaryKey  = 'id_usuario';
    protected $fillable = [
        'Nombre', 'Password','Alias','Telefono'
    ];
 }
