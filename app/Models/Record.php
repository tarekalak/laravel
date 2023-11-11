<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    use HasFactory;
    protected $table='records';
    protected $fillable=['id','type','customerId','productId','amount','amountReceived','amountDue','remainder','totalRemainder','created_at',];

    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customerId');
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'productId');
    }
}


