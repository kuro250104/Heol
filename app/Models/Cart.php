<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";

    protected $fillable = [
        "user_id",
    ];

    public function cart_product()
    {
        return $this->belongsToMany(Cart_Product::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('size_id');
    }
}
