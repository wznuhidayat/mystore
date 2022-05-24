<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingProduct extends Model
{
    use HasFactory;
    protected $table = 'rating_product';
    public $timestamps = false;
    protected $fillable = [
        'rate',
        'count',
        'product_id',
    ];
}
