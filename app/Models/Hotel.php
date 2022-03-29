<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = "hotel";
    protected $fillable = [
        "id",
        "name",
        "image",
        "location",
        "price_per_night",
        "facilities",
        "synopsis"
    ];
}
