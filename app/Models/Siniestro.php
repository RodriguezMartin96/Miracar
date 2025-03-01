<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siniestro extends Model
{
    const MARCAS =
    [
        'ME' => 'Mercedes Benz',
        'BM' => 'BMW',
        'AU' => 'Audi',
        'VO' => 'Volkswagen',
        'FO' => 'Ford',
        'CH' => 'Chevrolet',
        'TO' => 'Toyota',
        'NI' => 'Nissan',
        'HO' => 'Honda',
        'SU' => 'Suzuki',
        'RE' => 'Renault',
        'PE' => 'Peugeot',
        'CI' => 'Citroën',
        'FI' => 'Fiat',
        'SE' => 'Seat'
    ];

    const COMBUSTIBLES =
    [
        'E' => 'Eléctrico',
        'G' => 'Gasolina',
        'D' => 'Diesel',
        'H' => 'Hibrído'
    ];

    const CLIENTES =
    [
        'E' => 'Eléctrico',
        'G' => 'Gasolina',
        'D' => 'Diesel',
        'H' => 'Hibrído'
    ];
}
