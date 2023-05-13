<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        "name", "price","description","important_to_note","category_id","size"
    ];

    public function product_user()
    {
        return $this->hasMany(Product_user::class);
    }

    public function cart_product()
    {
        return $this->hasMany(Cart_Product::class);
    }
}
