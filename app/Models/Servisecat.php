<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servisecat extends Model
{
    use HasFactory;


    protected $table='servicecategory';
    protected $fillable = [
        's-name',
        'status',
        's-description',

    ];

}
