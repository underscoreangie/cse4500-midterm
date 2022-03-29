<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'ghz',
        'ram',
        'category',
        'manufacturer_id'
    ];

    protected $table = 'equipments';

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_equipment');
    }
}
