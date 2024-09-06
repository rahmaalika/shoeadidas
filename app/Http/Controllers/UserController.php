<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        $validasi = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($validasi)) {
            return redirect('/index')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan', 'login anda gagal');
    }

    public function show(){
        $data['total'] = Produk::count();
        $data['produk'] = Produk::all();
        return view('produk', $data);
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
