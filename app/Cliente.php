<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use SoftDeletes;
    protected $table = 'cliente';
    
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['nombre', 'apellidos', 'fecha_de_nacimiento', 'correo', 'ip', 'telefono', 'direccion', 'estado_civil', 'sueldo_anual'];
}
