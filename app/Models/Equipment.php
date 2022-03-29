<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'hardwareSpecs', 
        'category',
        'userName',
        'userContact', 
        'manuName', 
        'saleContact',
        'tectContact',
        'purchaseDate',
        'price',
        'invoice' ,
    ];
    
     protected $table = 'equipments';
    
    public function maufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }
    
}


    
