<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    use HasFactory;
protected $table='abouts';
    protected $fillable = [
        'title',
        'subtitle',
        'description',

    ];


}
