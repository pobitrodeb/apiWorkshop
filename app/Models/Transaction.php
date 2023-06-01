<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillabe = [
        'quantity', 'buyer_id', 'product_id'
    ];

    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }

}
