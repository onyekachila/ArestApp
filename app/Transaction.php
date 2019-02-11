<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Buyer;

class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
}
