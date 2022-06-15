<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'user_id' => 'required'
        ]);
        
        $userId = $request->user_id;
        $product= Product::findOrFail($request->product_id);
        $cart = Cart::where('user_id', $userId)->where('status_cart','cart')->first();
        // $cart = CartProduct::with(['cart' => function($query) use($userId)
        // {
        //      $query->where('cart.user_id', $userId);
        //      $query->where('cart.status_cart','cart');
        // }])->first();
        if ($cart) {
            $itemcart = $cart;
        } else {
            //nyari jumlah cart berdasarkan user yang sedang login untuk dibuat no invoice
            $inputancart['user_id'] = $userId;
            $inputancart['status_cart'] = 'cart';
            $inputancart['date'] = 1654718640246;
            $itemcart = Cart::create($inputancart);
        }
        $checkProduct = CartProduct::where('cart_id', $itemcart->id)
                                ->where('product_id', $product->id)
                                ->first();
        $qty = 1;
        $productCart = [];
        if ($checkProduct) {
            $checkProduct->updateQty($checkProduct, $qty);
        } else 
        {
            $inputan = $request->all();

            $inputan['product_id'] = $product->id;
            $inputan['cart_id'] = $itemcart->id;
            $inputan['qty'] = $qty;
            $checkProduct = $inputan;
            $itemsCart = CartProduct::create($inputan);
        }
        $data = [
            'product'=> $checkProduct,
            'iduser' => $userId
        ];
        return response()->json($data,200);
    }
    public function getCart($id){
        $cart = Cart::where('user_id', $id)->where('status_cart','cart')->first();
        $checkProduct = CartProduct::where('cart_id', $cart->id)
                                ->get();
        $data = [
            'cart' => $cart,
            'listCart' => $checkProduct
        ];
        return response()->json($data,200);
    }
    public function test()
    {
        $cart = CartProduct::with(['cart'])->get()->toArray();
        dd($cart);
    }
}
