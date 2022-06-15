<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CartProduct extends Model
{
    use HasFactory;
    protected $table = 'cart_product';
    public $timestamps = false;
    protected $fillable = [
        'product_id',
        'cart_id',
        'qty'
    ];
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function cartjoin()
    {
        return  DB::table($this->table)
        ->join('cart', 'cart.id', '=', $this->table.'.cart_id')
        ->get();
    }
    public function updateQty($productCart,$qty=1){
        $this->attributes['qty'] = $productCart->qty + $qty;
        self::save();
    }
}
