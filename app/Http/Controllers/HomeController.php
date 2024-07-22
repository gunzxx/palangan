<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // $products = Product::all();
        $products = Product::limit(3)->get();
        return view('home', [
            'products' => $products,
            'page' => 'home',
        ]);
    }
}
