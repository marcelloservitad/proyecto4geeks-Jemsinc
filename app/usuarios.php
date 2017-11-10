<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
     protected $table='usuarios';
 protected $fillable = [
        'nombre', 'correo electronico', 'direccion', 'numero de cedula','numero de celular',
    ];

}

protected $hidden = [
        'contraseña', 
    ];