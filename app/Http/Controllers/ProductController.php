<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::limit(3)->get();
        return view('katalog', [
            'products' => $products,
            'page' => 'katalog',
        ]);
    }
}
