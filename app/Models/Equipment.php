<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

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
    
    public $sortable = ['userName', 'category', 'manuName'];

    protected $table = 'equipments';
}

