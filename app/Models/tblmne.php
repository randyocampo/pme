<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblmne extends Model
{
    use HasFactory;

     protected $table = 'tblmnes';

    protected $fillable = [
        
        'year_covered',
        'region',
        'province',
        'municipality',
        'barangay',
        'projectid',
        'projecttitle',
        'individual',
        'association',
        'members',
        'remarks'
    ];

                                


   
    

}
