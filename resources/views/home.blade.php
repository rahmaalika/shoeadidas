<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/boostrap.min.css')}}">
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: Arial,sans-serif;
            line-height: 1.6;
            background-color: darkgray;
            color: #333;
        }
        header{
            background-color: rgb(93, 134, 141);
            color: #fff;
            padding: 15px 0;
            text-align: center;
            align-items: center;
        }
        header h1{
            margin-bottom: 10px;
            margin-right: 900px;
        }
        nav ul{
            list-style: none;
            padding: 0;
            margin-left: 1050px;
            margin-top: -55px;
        }
        nav ul li a{
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-left: 50px;
            margin-right: 100;
        }
        nav ul li a:hover{
            text-decoration: underline;
        }
        .hero{
            background-image: url(img/adidas_samba_og_rush_pink_1718203362_c7903069_progressive.jpg);
            background-size: cover;
            background-position: center;
            color: darkkhaki;
            text-align: center;
            padding: 100px;
            
        }
        .hero h2{
            font-size: 48px;
            margin-bottom: 20px;
        }
        .hero p{
            font-size: 24px;
            margin-bottom: 30px;
        }
        .hero a{
            background-color: rgb(93, 134, 141);;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }
        .hero a:hover{
            background-color: #555;
        }
        .products{
            padding: 50px 20px;
            text-align: center;
        }
        .products h2{
            font-size: 36px;
            margin-bottom: 20px;
        }
        .product-list{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .product{
            background-color: #fff;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 1);
            width: calc(33.333%-60px);
        }
        .product img{
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 15px;
            height: 300px;
        }
        .product h3{
            font-size: 24px;
            margin-bottom: 10px;
        }
        .product p{
            margin-bottom: 15px;
        }
        .product a{
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
        .product a:hover{
            background-color: #555;
        }
        .about{
            background-color: #f4f4f4;
            padding: 50px 20px;
            text-align: center;
        }
        .about h2{
            font-size: 20px;
            margin-bottom: 20x;
        }
        .about p{
            max-width: 800px;
            margin: 0 auto;
            font-size: 18px;
        }
        footer{
            background-color: rgb(93, 134, 141);;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
        footer p{
            margin: 0;
        }
        @media(max-width:768px){
        .product {
            width: calc(50%-40px);
        }
        .hero h2{
            font-size: 36px;
        }
        .hero p{
            font-size: 18px;
        }
      }
        @media(max-widht:480px){
            .product{
                width: calc(100%-30px);
        }
        .hero h2{
            font-size: 28px;
        }
        .hero p{
            font-size: 16px;
        }
    }
    </style>
</head>
<body>
    <header>  
        <h1>WELCOME SHOE SHOP</h1>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#about">Tentang kami</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero" id="home">
        <h2>SEASON SELE</h2>
        <p>Temukan produk yang berkualitas</p>
        <a href="#products">Belanja Sekarang</a>
    </section>
    <section class="products" id="products">
        <h2>Shop Our Products</h2>
        <div class="product-list">
            <div class="product">
                <img src="img/65bcef5eb878c234923db3d7-adidas-samba-og-royal-blue-shoes-hp7901.jpg" alt="">
                <h3>Adidas Samba_Og Rush Navy</h3>
                <p>Adidas Samba Navy</p>
                <p>IDR 700.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/5f06e4e0-9f69-4e5e-ac0c-94df866abfb2.jpg" alt="">
                <h3>Adidas Samba_Og Rush Black</h3>
                <p>Adidas Samba Black</p>
                <p> IDR 850.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/id-11134207-7r98w-lofqt7ogfabr57.jpeg" alt="">
                <h3>Adidas Samba_Og Rush Green</h3>
                <p>Adidas Samba Green</p>
                <p>IDR 900.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/no_brand_adidas_samba_og_white_halo_blue_-100-_authentic-_full05_n2zggktd.webp" alt="">
                <h3>Adidas Samba_Og Rush White</h3>
                <p>Adidas Samba White</p>
                <p>IDR 3.499.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/5aadcf00-f528-4bc2-88ce-942d25f802dd.jpg" alt="">
                <h3>Adidas Samba_Og Rush Blue</h3>
                <p>Adidas Samba Blue</p>
                <p>IDR 3.000.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/3d870693-5eca-41c8-9bd4-78b4e3e37f01.jpg" alt="">
                <h3>Adidas Samba_Og Rush Yellow</h3>
                <p>Adidas Samba Yellow</p>
                <p>IDR 2.555.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/ih8157_1_footwear_photography_side20lateral20center20view_grey.jpg" alt="">
                <h3>Adidas Samba_Og Black Pink</h3>
                <p>Adidas Samba Black Pink</p>
                <p>IDR 3.499.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/adidas_samba_og_rush_pink_1718203362_c7903069_progressive.jpg" alt="">
                <h3>Adidas Samba_Og White Pink</h3>
                <p>Adidas Samba White Pink</p>
                <p>IDR 3.000.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/adidas_adidas_samba_og_white_green_-ig1024-_full05_v74t9wg.webp" alt="">
                <h3>Adidas Samba_Og Rush Green</h3>
                <p>Adidas Samba Black</p>
                <p> IDR 850.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/samba_coklat.jpg" alt="">
                <h3>Adidas Samba_Og Rsh Browen</h3>
                <p>Adidas Samba Black</p>
                <p> IDR 850.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/adidas_sepatu_sneakers_adidas_samba_og_ig1025_-_20242_full04_l6qukvb0.webp" alt="">
                <h3>Adidas Samba_Og Rush Red</h3>
                <p>Adidas Samba White Red</p>
                <p>IDR 2.555.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/adidas_adidas_samba_black_gum_og_-100-_authentic_full06_sor7qgho.webp" alt="">
                <h3>Adidas Samba_Og Rush Black</h3>
                <p>Adidas Samba Black</p>
                <p>IDR 2.555.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
        </div>  
    </section>
    <section class="about" id="about">
        <h2>Tentang Kami</h2>
        <p>SEPATU ADIDAS SAMBA
            Sepatu sepak bola legendaris yang telah berkembang menjadi ikon mode pakaian berpergian, Sepatu Adidas Samba ada dari waktu ke waktu. Pertama kali menjadi terkenal dipakai sebagai sepatu latihan, sepatu yang anggun dan ramping telah berevolusi, menampilkan desain dan fungsi yang lebih kasual. Dengan pakaian khusus dan gaya olahraga khusus juga tersedia, jajaran sepatu Adidas Samba lebih segar dari sebelumnya.</p>
    </section>

    <footer>
        <p>&copy; 2024 Sepatu Shop Adidas Indonesia.</p>
    </footer>
</body>
</html>