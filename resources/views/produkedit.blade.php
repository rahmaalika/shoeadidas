@extends('template')
@section('content')

<div class="container-fluid">
    <a href="#" class="navbar-brand" style="font-style: italic; font-family:'Segeo UI',Tahoma,Geneva,Verdana, sans-serif; color:white; margin-left: 8%;">Lunettes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justipy-content-end" id="mynavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link" style="color:white">Home</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link" style="color: white">Kategori</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link" style="color: white">Logout</a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center text-white" style="background-color:rgb(184, 223, 223);">Tambah Produk</div>
            </div>
            <div class="card-body">
                <form action="/produk/edit/{{$produk->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pt-2">
                        <label for="productName">Nama Produk</label>
                        <input type="text" class="form-control" id="productName" placeholder="Masukan nama produk" name="nama_produk" value="{{$produk->name}}">
                    </div>
                    <div class="form-group pt-2">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori">
                            <option value="adidas samba">adidas samba</option>
                            <option value="sepatu pvn">sepatu pvn</option>
                        </select>
                    </div>
                    <div class="form-gruop pt-2">
                        <label for="price">Harga</label>
                        <input type="number" class="form-control" id="price" placeholder="Masukan harga produk" name="harga" value="{{$produk->price}}">
                    </div>
                    <div class="form-group pt-2">
                        <label for="stok">Jumlah</label>
                        <input type="number" class="form-control" id="stok" placeholder="Masukan jumlah produk" name="jumlah" value="{{$produk->stok}}">
                    </div>
                    <div class="form-gruop pt-2">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control-file" name="foto" id="image">
                    </div>
                    <button type="submit" class="btn w-100 btn-block mt-5 text-white" style="background-color: rgb(250, 229, 202);">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="bootstrap-5.3.2-dist/js/bootstrap.min.js">

@endsection