<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaselinePulseRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'age_group',
        // 'height_group',
        'weight_range',
        'pulse_rate',
    ];
}
