<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggas Jaya Abadi - Produk</title>
    <link rel="stylesheet" href="toko-acong.css">
</head>
<body>
    <header>
        <div class="logo">Unggasku</div>
        <nav>
            <ul>
                <li><a href="Unggas.php.html">Beranda</a></li>
                <li><a href="About.php.html">About</a></li>
                <li><a href="saran.php.html">Saran</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=0895605274321&text=Selamat Datang Di Unggasku ! Silahkan Hubungi Nomer Whatsapp Ini Untuk Keterangan Lebih Lanjut ">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Unggas Jaya Abadi</h1>
        <section class="products">
            <h2>Produk Unggas</h2>
            <div class="product">
                <img src="paha-ayam.jpg" alt="Dada Ayam" max width="100">
                <h3>Paha Ayam 250 gr</h3>
                <p>Harga: Rp 9.500</p>
                <button onclick="addToCart('Paha Ayam 250 gr', 9500)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="paha-ayam.jpg" alt="Dada Ayam" max width="100">
                <h3>Paha Ayam 500 gr</h3>
                <p>Harga: Rp 19.000</p>
                <button onclick="addToCart('Paha Ayam 500 gr', 19000)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="paha-ayam.jpg" alt="Dada Ayam" max width="100">
                <h3> Paha Ayam 1kg </h3>
                <p>Harga: Rp 38.000</p>
                <button onclick="addToCart('Paha Ayam 1kg', 38000)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="dada-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Dada Ayam 250 gr</h3>
                <p>Harga: Rp 9.500</p>
                <button onclick="addToCart('Dada Ayam 250 gr', 9500)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="dada-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Dada Ayam 500 gr</h3>
                <p>Harga: Rp 19.000</p>
                <button onclick="addToCart('Dada Ayam 500 gr', 19000)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="dada-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Dada Ayam 1 kg</h3>
                <p>Harga: Rp 38.000</p>
                <button onclick="addToCart('Dada Ayam 1 kg', 38000)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="sayap-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Sayap Ayam 100 gr<h3>
                <p>Harga: Rp 4.200</p>
                <button onclick="addToCart('Sayap Ayam 100 gr', 4200)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="sayap-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Sayap Ayam 200 gr<h3>
                <p>Harga: Rp 8.400</p>
                <button onclick="addToCart('Sayap Ayam 200 gr', 8400)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="kepala-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Kepala Ayam 100 gr<h3>
                <p>Harga: Rp 1.700</p>
                <button onclick="addToCart('Kepala Ayam 100 gr', 1700)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="kepala-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Kepala Ayam 200 gr<h3>
                <p>Harga: Rp 3.400</p>
                <button onclick="addToCart('Kepala Ayam 200 gr', 3400)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="rempela&ati-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Rempela&Ati 100 gr<h3>
                <p>Harga: Rp 1.700</p>
                <button onclick="addToCart('Rempela&Ati 100 gr', 1700)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="rempela&ati-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Rempela&Ati 200 gr <h3>
                <p>Harga: Rp 3.400</p>
                <button onclick="addToCart('Rempela&Ati 200 gr', 3400)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="ceker-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Ceker Ayam 100 gr<h3>
                <p>Harga: Rp 2.000</p>
                <button onclick="addToCart('Ceker Ayam 100 gr', 2000)">Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="ceker-ayam.jpg" alt="Dada Ayam" max width="110">
                <h3>Ceker Ayam 200 gr<h3>
                <p>Harga: Rp 4.000</p>
                <button onclick="addToCart('Ceker Ayam 200 gr', 4000)">Beli Sekarang</button>
            </div>
            
        </section>
        
        <section id="cart">
            <h2>Keranjang Belanja</h2>
            <ul id="cart-items"></ul>
            <p>Total: Rp <span id="total-price">0</span></p>
            <button onclick="checkout()">Checkout</button>
        </section>
        
        <section id="cart">
            <h2>Keranjang Belanja</h2>
            <ul id="cart-items"></ul>
            <p>Total: Rp <span id="total-price">0</span></p>
            <button onclick="checkout()">Checkout</button>
        </section>
    </main>

    <footer>
        <p>&copy; UKL 2024/2025.</p>
    </footer>

    <script src="keranjang.js"></script>
</body>
</html>