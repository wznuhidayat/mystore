<?php

use App\Http\Controllers\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use Illuminate\Http\Request;
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
Route::any('/products/{id}', function () {
    return view('main');
});
Route::get('/main', [Main::class, 'index']);
Route::post('/auth/login', [Authenticate::class, 'login']);
Route::post('/auth/logout', [Authenticate::class, 'logout']);
Route::post('/auth/register', [Authenticate::class, 'register']);
Route::middleware('auth:sanctum')->get('/auth/user',function(Request $request){
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/auth/authenticated',function(){
    return true;
});

