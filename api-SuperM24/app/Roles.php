<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    public $primaryKey  = 'id_roles';
    protected $fillable = [
        'id_permiso','Descripcion'
    ];
    public $timestamps = true;

}
