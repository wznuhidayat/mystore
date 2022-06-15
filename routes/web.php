<?php

use App\Http\Controllers\Authenticate;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Products;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartProduct;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/{slug}', function () {
    return view('main');
});
Route::get('/login', function () {
    return view('main');
})->name('login');
Route::any('/products/{id}', function () {
    return view('main');
});
Route::get('/main', [Main::class, 'index']);
Route::post('/auth/login', [Authenticate::class, 'login']);
Route::post('/auth/logout', [Authenticate::class, 'logout']);
Route::post('/auth/register', [Authenticate::class, 'register']);
Route::middleware('auth:sanctum')->get('/auth/user', function (Request $request) {
    $user = $request->user();
    $cart = Cart::where('user_id', $user->id)->where('status_cart', 'cart')->first();
    $checkProduct = CartProduct::with('product')->where('cart_id', $cart->id)
        ->get();
    $data = [
        'user' => $user,
        'cart' => $cart,
        'productCart' => $checkProduct
    ];
    return $data;
});
Route::middleware('auth:sanctum')->get('/auth/authenticated', function () {
    return true;
});
Route::get('/api/products', [Main::class, 'products']);
Route::get('/api/test', [CartController::class, 'test']);
Route::post('/api/cart', [Main::class, 'cart']);
Route::resource('/api/product', Products::class);
Route::post('/api/addtocart', [CartController::class, 'addToCart']);
Route::get('/api/getcart/{id}', [CartController::class, 'getCart']);
