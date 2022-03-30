<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'hardwareSpecs',
        "category",
        "userName",
        "userContact",
        "manuName",
        "saleInfo",
        "techInfo",
        'price',
        "purchaseDate",
        "invoice",
    ];

    protected $table = 'equipments';
}

