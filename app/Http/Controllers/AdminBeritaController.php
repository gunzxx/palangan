<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', [
            'page' => 'admin',
            'beritas' => $beritas,
        ]);
    }

    public function create()
    {
        return view('admin.berita.create', [
            'page' => 'admin',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($request->hero) {
            $request->validate([
                'hero' => 'image',
            ]);
        }

        $berita = Berita::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        if ($request->hero) {
            $berita->addMediaFromRequest('hero')->toMediaCollection('hero');
        }

        return redirect('/admin/berita')->with([
            'success' => 'Data berhasil ditambahkan',
        ]);
    }

    public function edit($id)
    {
        if (!$berita = Berita::find($id)) {
            return redirect('/admin/berita')->with([
                'error' => 'Data tidak ditemukan',
            ]);
        }

        return view('admin.berita.edit', [
            'page' => 'admin',
            'berita' => $berita,
        ]);
    }

    public function update($id, Request $request)
    {
        if (!$berita = Berita::find($id)) {
            return redirect('/admin/berita')->with([
                'error' => 'Data tidak ditemukan',
            ]);
        }

        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($request->hero) {
            $request->validate([
                'hero' => 'image',
            ]);
            $berita->addMediaFromRequest('hero')->toMediaCollection('hero');
        }

        $berita->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect('/admin/berita')->with([
            'success' => 'Data berhasil ditambahkan',
        ]);
    }
}
