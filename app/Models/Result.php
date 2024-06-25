<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sweat_level',
        'pain_level',
        'fatigue_level',
        'pulse_rate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
