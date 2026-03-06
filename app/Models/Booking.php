<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_type',
        'name',
        'phone',
        'pickup_location',
        'dropoff_location',
        'price',
        'status'
    ];
}