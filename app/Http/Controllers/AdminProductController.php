<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index',[
            'page' => 'admin',
            'products' => $products,
        ]);
    }

    public function create(){
        return view('product.create');
    }

    public function edit($id){
        if(!$product= Product::find($id)){
            return redirect('admin/product');
        }
        // dd($product);
        return view('product.edit',[
            'page' => 'admin',
            'product' => $product,
        ]);
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'seller' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'contact' => 'required',
        ]);
        
        $product = Product::create([
            'name' => $request->name,
            'seller' => $request->seller,
            'price' => $request->price,
            'detail' => $request->detail,
            'contact' => '+62'.substr($request->detail, 1),
        ]);

        if($request->gambar){
            $request->validate([
                'gambar' => 'image',
            ]);
            $product->addMediaFromRequest('gambar')->toMediaCollection('preview');
        }
        
        return redirect('admin')->with([
            'success' => 'Data berhasil ditambahkan',
        ]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'seller' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'contact' => 'required',
        ]);
        if(!$product= Product::find($id)){
            return redirect('admin')->withErrors([
                'error' => 'Data tidak ditemukan'
            ]);
        }

        if($request->gambar){
            $request->validate([
                'gambar' => 'image',
            ]);
            $product->addMediaFromRequest('gambar')->toMediaCollection('preview');
        }

        $product->update([
            'name' => $request->name,
            'seller' => $request->seller,
            'price' => $request->price,
            'detail' => $request->detail,
            'contact' => '+62'.substr($request->contact, 1),
        ]);
        
        return redirect('admin/product')->with([
            'success' => 'Data berhasil diperbarui',
        ]);
    }

    public function delete($id){
        if(!$product= Product::find($id)){
            return response()->json([
                'message' => 'data tidak ditemukan',
            ], 404);
        }
        
        // $product->delete();
        return response()->json([
            'message' => 'data berhasil dihapus',
        ]);
    }
}
