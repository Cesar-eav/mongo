<?php
namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Vehiculo extends Model
{
    protected $collection = 'vehiculos';
    protected $fillable = [
        'tipo',
        'marca',
        'modelo',
        'patente',
        'estado',
        'ubicacion',
    ];
}