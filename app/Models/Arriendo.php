<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Arriendo extends Model
{
    protected $collection = 'arriendos';
    protected $fillable = [
        'id_arriendo',
        'id_cliente',
        'id_vehiculo',
        'fecha_inicio',
        'fecha_fin',
        'modalidad',
        'costo_total',
        'cliente',  // Almacenaremos los datos del cliente y vehículo embebidos
        'vehiculo', // Para simplificar las consultas y evitar joins costosos en MongoDB.
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'cliente' => 'array',
        'vehiculo' => 'array',
    ];
    public $timestamps = false; // Deshabilitar timestamps
}
