<?php

namespace App\Http\Controllers;

use App\Models\Produk;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    //
    public function show(){
        $data['produk'] = Produk::orderby('name','asc')->get();
        $data['total'] = Produk::count();

        return view('produk',$data);
    }
    public function search(Request $request){
        $data['produk'] = Produk::where('nama_produk',$request->cari)->orWhere('kategori',$request->cari)->get();
        $data['total'] = $data['produk']->count();

        return view('produk',$data);
    }
    public function create(){
        return view('produkcreate');
    }

    public function add(Request $request){
        // $validateData = $request->validate([
        //     'nama' => 'required',
        //     'kategori' => 'required',
        //     'harga' => 'required',
        //     'jumlah' => 'required',
        //     'foto' => 'image'
        // ]);
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request -> file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }
        $produk = Produk::create([
            'name' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'stok' => $request->stok,
            'gambar' => $fileName
        ]);
        if($produk){
            Session::flash('pesan','Data berhasil ditambahkan');
        }else{
            Session::flash('pesan','Data gagal ditambahkan');
        }
        
        return redirect('index');
    }

    public function edit(Request $request){
        $data['produk'] = Produk::all();
        $data['produk'] = Produk::find($request->id);
        return view('produkedit',$data);
    }

    public function delete(Request $request)
    {
        $produk = Produk::find($request->id);
        $delete = Produk::where('id', $request->id)->delete();
        if ($delete) {
            if($produk->foto) {
                Storage::delete('foto/' .$produk->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        }else{
            Session::flash('pesan', 'Data gagal dihapus');
        }
        return redirect('produk');
    }

    public function update(Request $request){
        // $produk = Produk::find($request->id);

        // Storage::delete($produk->foto);
        
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        // $update = 
        $update = Produk::where('id',$request->id)->update([
            'name' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'gambar' => $fileName
        ]);
        if($update){
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('produk');

    }

    public function showtmp(){
        return view('dasboard');
    }
}

