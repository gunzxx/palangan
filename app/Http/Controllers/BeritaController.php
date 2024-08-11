<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $beritas = Berita::all();
        return view('berita',[
            'page' => 'berita',
            'beritas' => $beritas,
        ]);
    }

    public function detail($id){
        if(!$berita = Berita::find($id)){
            return redirect('berita')->with([
                'error' => 'Berita tidak ditemukan'
            ]);
        }

        return view('berita.detail',[
            'page' => 'berita',
            'berita' => $berita,
        ]);
    }
}
