<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class Main extends Controller
{
    public function index()
    {
        
        return view('main');
    }
    public function products()
    {
        $data = Product::orderBy('id')->paginate(10);
        // dd($data);
        return response()->json($data);
    }
}
