<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //select which properties are mass asignable
    protected $fillable = [
        'name',
        'detail'
    ];
}