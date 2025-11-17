<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchGame extends Model
{
    protected $fillable = [
        'home_team',
        'away_team',
        'home_score',
        'away_score',
        'match_date',
        'location',
        'competition',
        'season',
        'status',
        'notes',
    ];
}
