<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $collection = 'clientes';
    protected $fillable = [
        'rut',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'email',
        'telefono',
        'direccion',
        'comuna',
        'ciudad',
        'licencia_conducir',
        'fecha_vencimiento_licencia',
    ];

     protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_vencimiento_licencia' => 'date',
    ];
}
