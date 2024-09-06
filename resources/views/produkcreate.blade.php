@extends('template')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-mt-5">
                    <div class="card-header text-center">
                        Form Produk
                    </div>
                    <div class="card-body">
                        <form method="post" action="/produk/create" enctype="multipart/form-data">
                        @csrf
                            <div class="form-gruop pt-2">
                                <label for="produktName">Nama Produk</label>
                                <input type="text" class="form-control" id="produkNme" placeholder="Masukan nama produk" name="nama_produk" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="kategori">Kategori</label>
                                <input type="text" class="form-control" id="kategori" placeholder="Masukan kategori produk" name="kategori" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" id="price" placeholder="Masukan harga produk" name="harga" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="quantity">Jumlah</label>
                                <input type="number" class="form-control" id="quantity" placeholder="Masuka jumlah produk" name="jumlah" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="quantity">Stok</label>
                                <input type="number" class="form-control" id="quantity" placeholder="Masukan stok produk" name="stok" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" name="foto" id="image" >
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>