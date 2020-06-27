<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    public $primaryKey  = 'id_producto';
    protected $fillable = [
        'id_producto','Nombre', 'Marca','Descripcion', 'Precio_venta','Precio_oferta','Precio_compra','Tipo_unidad'
    ];
    public $timestamps = true;
    //
}
