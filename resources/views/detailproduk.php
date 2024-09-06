<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <div class="row">
      <!-- Gambar Produk -->
      <div class="col-md-6">
        <div class="card">
          <img src="https://via.placeholder.com/500x500" class="card-img-top" alt="Gambar Produk">
        </div>
      </div>

      <!-- Detail Produk -->
      <div class="col-md-6">
        <h1 class="display-4">Nama Produk</h1>
        <p class="text-muted">$99.99</p>

        <p class="lead">Deskripsi singkat produk ini. Produk ini sangat bagus dan berkualitas tinggi.</p>

        <div class="d-flex align-items-center my-3">
          <input type="number" class="form-control me-2" value="1" min="1" style="max-width: 100px;">
          <button class="btn btn-primary">Tambah ke Keranjang</button>
        </div>

        <h5 class="mt-4">Spesifikasi Produk</h5>
        <ul class="list-group">
          <li class="list-group-item">Spesifikasi 1</li>
          <li class="list-group-item">Spesifikasi 2</li>
          <li class="list-group-item">Spesifikasi 3</li>
        </ul>

        <div class="mt-4">
          <h5>Ulasan</h5>
          <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="Tulis ulasan Anda di sini..."></textarea>
          </div>
          <button class="btn btn-secondary">Kirim Ulasan</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
