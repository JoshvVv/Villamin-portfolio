<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    protected $fillable = ([

        'first',
        'middle',
        'last',
        'role',
        'description',
        'month',
        'day',
        'year',
        'site',
        'email',
        'number',
        'description1',
        'description2',
        'description3',
        'image'
        
        
      
      
    ]);
}
