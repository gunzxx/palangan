<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.index',[
            'page' => 'admin',
            'products' => $products,
        ]);
    }

    public function edit($id){
        if(!$product= Product::find($id)){
            return redirect('admin');
        }
        dd($product);
    }

    public function delete($id){
        if(!$product= Product::find($id)){
            return response()->json([
                'message' => 'data tidak ditemukan',
            ], 404);
        }
        
        $product->delete();
        return response()->json([
            'message' => 'data berhasil dihapus',
        ]);
    }
}
