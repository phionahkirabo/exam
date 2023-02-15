<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_sender extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'name',
        'names_of_sender',
        'email',
        'location_address',
        // 'qty',
        // 'unity_price',
        'order_id'
       

    ];
}
