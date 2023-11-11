<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Sale extends Model
{
    use HasFactory;
    protected $table='sales';
    protected $fillable=['id','customerId','productId','amount','amountDue','payment','created_at','updated_at'];

    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customerId');
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'productId');
    }
}
