<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $file = [
        'idProveedor',
        'nombre',
        'fechaRegristro',
        'telefono',
        'correo'
    ];

    public $timestamps = false;
}
