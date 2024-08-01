<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index',[
            'page' => 'admin',
        ]);
    }

    public function profile(){
        return view('admin.profile',[
            'page' => 'admin',
        ]);
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);

        if($request->profileImg){
            $request->validate([
                'profileImg' => 'image',
            ]);
            auth()->user()->addMediaFromRequest('profileImg')->toMediaCollection('profile');
        }

        return redirect('/admin/profile')->with([
            'success' => 'Data berhasil diperbarui',
        ]);
    }
}
