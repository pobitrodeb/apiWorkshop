<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const AVIALBE_PRODUCT   = 'aviable';
    const UNAVIABLE_PRODUCT = 'unavaible';

    protected $fillabe = [
        'name', 'description', 'quantity', 'status', 'image', 'seller_id'
    ];

    public function isAviable(){
        return $this->status = Product::AVIALBE_PRODUCT;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
