<?php

// Modelo: app/Models/Estacionamiento.php
namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Estacionamiento extends Model
{
    protected $collection = 'estacionamientos';
    protected $fillable = [
        'nombre',
        'ciudad',
        'direccion',
        'coordenadas',
        'capacidad',
        'disponibles',
    ];

    protected $casts = [
        'coordenadas' => 'array', // Para que se guarde como un array en MongoDB
    ];
}