<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCreate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'category',
        'city',
        'price',
        'room_capacity',
        'description',
        'address'
    ];
}
