@extends('template')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center text-white" style="background-color:aqua;">Tambah Produk</div>
            </div>
            <div class="card-body">
                <form action="/produk/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pt-2">
                        <label for="productName">Nama Produk</label>
                        <input type="text" class="form-control" id="productName" placeholder="Masukan nama produk" name="name" value="{{$produk->name}}">
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
                        <input type="number" class="form-control" id="price" placeholder="Masukan harga produk" name="price" value="{{$produk->price}}">
                    </div>
                    <div class="form-group pt-2">
                        <label for="stok">Jumlah</label>
                        <input type="number" class="form-control" id="stok" placeholder="Masukan jumlah produk" name="stok" value="{{$produk->stok}}">
                    </div>
                    <div class="form-gruop pt-2">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Masukan jumlah produk" value="{{old(deskripsi)}}" name="deskripsi">
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