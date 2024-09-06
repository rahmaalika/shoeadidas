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
                        <form method="post" action="/produk/create/" enctype="multipart/form-data">
                        @csrf
                            <div class="form-gruop pt-2">
                                <label for="username">Nama User</label>
                                <input type="text" class="form-control" id="produkNme" placeholder="Masukan nama user"
                                 name="name" value="{{old('name')}}" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="kategori">Email</label>
                                <input type="email" class="form-control" id="kategori" placeholder="Masukan email user"
                                 name="email" value="{{old('email')}}" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="email">Password</label>
                                <input type="text" class="form-control" id="price" placeholder="Masukan email user"
                                 name="password" value="{{old('password')}}" >
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" name="foto" id="image" >
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 btn-block mt-5" style="background-color: rgb(223, 247, 247)">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>