<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table = "deliveries";

    protected $fillable = [
        "name", "email","delivery_address","postal_code","city"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
