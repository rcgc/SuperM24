<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    protected $table = 'clientes';

    public $primaryKey  = 'id_cliente';
    protected $fillable = [
        'id_cliente','Nombre', 'RFC','Ciudad', 'Colonia','Domicilio'
    ];

    public $timestamps = true;
    //
}
