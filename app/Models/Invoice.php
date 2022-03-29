
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_date',
        'customer_id'
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function equipments()
    {
        return $this->belongsToMany(Equipment::class, 'invoice_equipment');
    }
}
