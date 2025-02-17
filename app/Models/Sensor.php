<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = [
        'temp_',
        'hum_',
        'force_',
        'bend_',
        'pressure_',
        'pulse_rate'
    ];
}
