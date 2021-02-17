<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crops_related extends Model
{
    use HasFactory;
    protected $table = 'crops_related';

    protected $fillable = [
        
        'parent_id',
        'cycle',
        'crops',
        'crops_per_cycle',
        'planted_target',
        'planted_actual',
        'total_area_planted_target',
        'total_area_planted_actual',
        'date_harvested_target',
        'date_harvested_actual',
        'total_area_harvested_target',
        'total_area_harvested_actual',
        'total_produce',
        'total_sold',
        'priceperkg',
        'totalsales',
        'remarks'

    ];

}


