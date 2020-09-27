<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    protected $table = 'gastos';
    public $primaryKey = 'idGasto';
    protected $fillable = [
        'descripcion', 'monto', 'idConcepto'
    ];
    public $timestamps = true;
    //
}
