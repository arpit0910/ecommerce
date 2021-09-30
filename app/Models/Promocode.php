<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    use HasFactory;

    protected $table = 'promocodes';

    protected $fillable = [
        'code',
        'description',
        'start_date',
        'end_date',
        'min_order_amount',
        'discount_amount',
        'discount_type',
        'maximum_discount',
        'status',
    ];
}
