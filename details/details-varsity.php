<?php
session_start();

$loggedIn = isset($_SESSION['user']) && !empty($_SESSION['user']);
$user = $loggedIn ? $_SESSION['user'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Classic Varsity Jacket</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" ;>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
  <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    scroll-padding-top: 3rem;
    
}
:root{
    --main-color: #ff9f0d;
    --text-color: #fff;
    --other-color: #212121;
    --second-color: #9e9e9e;
    --bg-color: #111111;

    --big-font: 3.5rem;
    --h2-font: 2.6rem;
    --p-font: 1.1rem;
}
body{
    background: var(--bg-color);
    color: var(--text-color);
    overflow-x: hidden;

}
header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 30px 14%;
    transition: all .50s ease;
}
.logo img {
    width: 130px; 
    height: auto; 
}
.logo {
    margin-right: 20px; 
}
    
    
.navlist{
    display: flex;
}
.navlist a {
    color: var(--text-color);
    font-size: var(--n-font);
    font-weight: 600;
    margin: 0 30px;
    transition: all .50s ease;
}
.navlist a:hover{
    color: var(--main-color);
}
.navlist a.active{
    color: var(--main-color);
}
.nav-icons{
    display: flex;
    align-items: center;
    padding: 8px 15px;
    background: var(--main-color);
    border-radius: 3rem;
    box-shadow: #ff9f0d 0px 1px 25px;
}
.nav-icons i{
    vertical-align: middle;
    font-size: 25px;
    color: var(--bg-color);
    margin-right: 8px;
    margin-left: 5px;
    transition: all .50s ease;
}
#menu-icon{
    font-size: 32px;
    color: var(--bg-color);
    z-index: 10001;
    cursor: pointer;
    display: none;
}
.nav-icons i:hover{
    transform: scale(1.1);
    color: var(--text-color);
}
.nav-icons .dropdown-menu {
    min-width: 250px;
    border-radius: 0.5rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 0;
    overflow: hidden;
}

/* Header dalam dropdown (nama, email, member since) */
.nav-icons .user-header {
    background-color: var(--main-color);
    color: #fff;
    padding: 1rem;
    text-align: center;
}

/* Email dan member since lebih kecil */
.nav-icons .user-header small {
    display: block;
    font-size: 0.8rem;
    margin-top: 0.25rem;
}

/* Footer (logout button) */
.nav-icons .dropdown-footer {
    padding: 0.75rem;
    text-align: center;
    background-color: #f8f9fa;
}

/* Tombol logout */
.nav-icons .dropdown-footer button {
    width: 100%;
    font-size: 0.85rem;
    border-radius: 0.3rem;
}


.bg-primary {
    --bs-bg-opacity: 1;
    background-color: var(--main-color) !important;
}
  .btn{   
    display: inline-block;
    padding: 15px 35px;
    background: var(--other-color);
    color: var(--main-color);
    font-size: var(--p-font);
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 3rem;
    transition: all .50s ease;
}
.btn:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: #ff9f0d 0px 1px 25px;
}
header.sticky{
    padding: 12px 14%;
    background: var(--other-color);
}
.modal-checkout {
  display: none; /* Hidden default */
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.7); /* Semi-transparan */
}
      


    /* Modal Content Box */
    .modal-content {
      background-color: #2b2b2b;
      margin: 5% auto;
      padding: 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 500px;
      color: #fff;
      position: fixed;
    }

    /* Close Button */
    .close-button {
      position: absolute;
      top: 10px;
      right: 20px;
      color: #fff;
      font-size: 28px;
      cursor: pointer;
    }

    /* Inside Form */
    .modal-content input,
    .modal-content textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      background-color: #fff;
      color: #000;
    }

    .modal-content h2 {
      margin-bottom: 20px;
      font-size: 22px;
    }
.product-container {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: auto;
    margin: 60px auto;
    padding: 40px;
    border-radius: 10px;
    margin: 80px auto 60px; /* Tambahkan margin atas */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.product-images {
    flex: 1;
    padding-right: 20px;
    text-align: center;
}

.main-image {
    width: 90%;
    max-width: 500px;
    border-radius: 10px;
    display: block;
    margin: 0 auto;
}

.thumbnail-container {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.thumbnail {
    width: 44%;
    border-radius: 5px;
}

.description {
    color: var(--main-color);
}
.description-text {
    text-align: justify;
    color: var(--text-color);
    font-size: 16px;
    line-height: 1.6;
}

.product-info {
    flex: 1;
    color: var(--other-color);
    padding: 10px;
}

.collection-title {
    font-size: 14px;
    color: var(--main-color);
    text-transform: uppercase;
}

.product-title {
    font-size: 28px;
    margin: 10px 0;
    color: var(--main-color);
}

.delivery {
    font-size: 14px;
    color: var(--text-color);
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.price-section {
    margin: 20px 0;
}

.regular-price {
    font-size: 20px;
    text-decoration: line-through;
    color: gray;
    margin-right: 10px;
}

.member-price {
    font-size: 22px;
    font-weight: bold;
    color: var(--main-color);
}

.member-price small {
    font-size: 14px;
    color: gray;
    display: block;
}


.button-container {
    display: flex;
    gap: 10px;
    margin: 15px 0;
}

.buy-now {
    flex: 1;
    padding: 12px;
    font-size: var(--p-font);
    border: none;
    border-radius: 3rem;
    background: var(--other-color);
    color: var(--main-color);
    transition: all .50s ease;
    display: inline-block;

}

.buy-now:hover {
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: #ff9f0d 0px 1px 25px;
}

/* Dropdown Styling */
.dropdown-section {
    color: var(--text-color);
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.dropdown-title {
    cursor: pointer;
    font-size: 16px;
    text-transform: uppercase;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: color 0.3s ease;
}

.dropdown-title i {
    transition: transform 0.3s ease;
}

.rotated {
    transform: rotate(180deg);
}

.dropdown-content {
    display: none;
    padding: 10px 0;
    border-top: 1px solid #ddd;
    font-size: 14px;
    color: #555;
}

.dropdown-content.show {
    display: block;
}

.footer {
    background-color: var(--other-color);
    color: #fff;
    text-align: center;
    padding: 40px 20px;
    position: relative;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
}

.footer-content h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.footer-content p {
    font-size: 14px;
    color: #ccc;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Social Media Icons */
.social-icons {
    margin: 15px 0;
}

.social-icons a {
    display: inline-block;
    margin: 0 8px;
    color: #bbb;
    font-size: 18px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: var(--main-color);
}

/* Footer Navigation */
.footer-nav {
    margin: 20px 0;
}

.footer-nav a {
    display: inline-block;
    margin: 5px 8px;
    padding: 8px 14px;
    border: 1px solid #555;
    border-radius: 20px;
    color: #bbb;
    font-size: 14px;
    text-decoration: none;
    transition: background 0.3s ease, color 0.3s ease;
}

.footer-nav a:hover {
    background: var(--main-color);
    color: #fff;
}

/* Footer Credit */
.footer-credit {
    margin-top: 20px;
    font-size: 12px;
    color: #888;
}

.footer-credit a {
    color: #4da6ff;
    text-decoration: none;
}

.footer-credit a:hover {
    text-decoration: underline;
}

/* RESPONSIVE DESIGN */
@media (max-width: 768px) {
    .product-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 15px;
    }
    
    .product-images {
        padding-right: 0;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .main-image {
        max-width: 100%;
        margin: 0 auto;
    }
    
    .thumbnail-container {
        justify-content: center;
    }
    
    .thumbnail {
        width: 44%;
        margin: 0;
    }
    
    .product-info {
        text-align: center;
    }

    .description-text {
        text-align: justify;
        font-size: 16px;
        line-height: 1.6;
    }
    
    .button-container {
        flex-direction: column;
    }
    
    .buy-now {
        width: 100%;
    }
}

@media (max-width: 500px) {
    .product-title {
        font-size: 24px;
    }
    
    .description-text {
        font-size: 14px;
    }
    
    .price-section {
        text-align: center;
    }
    
    .member-price small {
        font-size: 12px;
    }
}

@media (max-width: 1545px) {
    header {
        padding: 22px 4%;
        transition: 0.2s ease;
    }
    header.sticky {
        padding: 14px 4%;
        transition: 0.2s ease;
    }
    section {
        padding: 50px 4% 40px;
        transition: 0.2s ease;
    }
    .container {
        padding: 30px 4% 50px;
    }
}

@media (max-width: 1180px) {
    :root {
        --big-font: 4rem;
        --h2-font: 2.2rem;
        --p-font: 1.15rem;
    }
    .home {
        height: 85vh;
    }
}

@media (max-width: 1060px) {
    #menu-icon {
        display: block;
    }
    .navlist {
        position: absolute;
        top: -1000px;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        text-align: left;
        background: var(--other-color);
        transition: all 0.5s ease;
    }
    .navlist a {
        display: block;
        padding: 0.5rem;
        margin: 1rem;
        border-left: 2px solid var(--main-color);
    }
    .navlist.open {
        top: 100%;
    }
}

@media (max-width: 1045px) {
    :root {
        --big-font: 3.3rem;
        --h2-font: 2rem;
    }

}



@media (max-width: 475px) {
    :root {
        --big-font: 2.8rem;
        --h2-font: 2rem;
    }
}
@media (max-width: 600px) {
    .footer-content p {
        font-size: 12px;
        padding: 0 10px;
    }

    .footer-nav a {
        font-size: 12px;
        padding: 6px 12px;
    }
}

  </style>

<body>
  <header>
    <a href="#" class="logo"><img src="img/pembuatan seragam.png" alt=""></a>
    <ul class="navlist">
      <li><a href="../tbazenara.php#home" class="active">Home</a></li>
      <li><a href="../tbazenara.php#about">About Us</a></li>
      <li><a href="../tbazenara.php#shop">Our Product</a></li>
      <li><a href="../tbazenara.php#review">Our Customer</a></li>
      <li><a href="../tbazenara.php#contact">Contact Us</a></li>
    </ul>

<div class="nav-icons">
    <?php if ($loggedIn): ?>
        <li class="nav-item dropdown user-menu list-unstyled d-inline-block">
            <!-- Trigger dropdown dengan icon -->
            <a href="#" class="nav-link dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bx bx-user fs-4"></i>
            </a>

            <!-- Dropdown menu -->
            <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-2" style="min-width: 250px;">
                <li class="bg-primary text-white text-center p-3 rounded-top">
                    <strong><?= htmlspecialchars($user['name']) ?></strong><br />
                    <small><?= htmlspecialchars($user['email']) ?></small><br />
                    <small class="d-block mt-1">Member since <?= date("M. Y", strtotime($user['created_at'] ?? 'now')) ?></small>
                </li>
                <li class="text-center p-2">
                    <form id="logoutForm" action="logout.php" method="POST">
                        <button type="button" id="logoutBtn" class="btn btn-outline-danger btn-sm w-100">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    <?php else: ?>
        <a href="../PageLogin.php" class="nav-link p-0">
            <i class="bx bxs-user fs-4"></i>
        </a>
    <?php endif; ?>
          <div class="bx bx-menu" id="menu-icon"></div>

</div>

    <div id="logoutModal" class="modal">
      <div class="modal-content">
        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
          <p>Are you sure you want to exit?</p>
          <p>Out of <strong>TokoBelanjaAnda</strong> as
            <strong><?= htmlspecialchars($_SESSION['user']['email']) ?></strong>?
          </p>
        <?php else: ?>
          <p>You are not logged in yet.</p>
        <?php endif; ?>
        <div class="modal-buttons">
          <button id="confirmLogout">Keluar</button>
          <button id="cancelLogout">Batalkan</button>
        </div>
      </div>
    </div>




  </header>
  <div class="product-container">
    <div class="product-images">
      <img src="../imgproduct/varsity1.png" alt="Classic Varsity Jacket" class="main-image" />
      <div class="thumbnail-container">
        <img src="../imgproduct/varsity3.png" alt="Fabric Detail" class="thumbnail" />
        <img src="../imgproduct/varsity2.png" alt="Stitching Detail" class="thumbnail" />
      </div>
    </div>
    <div class="product-info">
      <h2 class="collection-title">CLOTHING COLLECTION</h2>
      <h1 class="product-title">Classic Varsity Jacket</h1>
      <p class="delivery">🚚 Delivery from 3 days</p>
      <h3 class="description">DESCRIPTION</h3>
      <p class="description-text">
        Ingin tampil lebih keren dengan gaya klasik? Classic Varsity Jacket
        adalah pilihan terbaik! Mengusung desain ala jaket baseball Amerika,
        varsity ini memadukan bahan katun premium untuk badan dan kulit
        sintetis pada lengan, menciptakan tampilan yang sporty namun tetap
        elegan. Jaket ini dilengkapi dengan bordir emblem eksklusif, kancing
        snap-button, serta detail ribbed pada kerah dan pergelangan tangan
        untuk kenyamanan ekstra.
      </p>

      <div class="price-section">
        <span class="regular-price">130K</span>
        <span class="member-price">125K <small>Member (Save 5K)</small></span>
      </div>

      <div class="button-container">
        <button class="buy-now" onclick="openModal()">Order Now</button>
      </div>

      <!-- Modal Pop-up -->
      <div id="orderModal" class="modal-checkout">
        <div class="modal-content">
          <span class="close-button" onclick="closeModal()">&times;</span>
          <h2>Form Pemesanan</h2>
          <form id="checkoutForm">
            <label>Jenis Produk:</label>
            <input type="text" id="produk" placeholder="Hoodie" required />

            <label>Ukuran:</label>
            <input type="text" id="ukuran" placeholder="L" required />

            <label>Warna:</label>
            <input type="text" id="warna" placeholder="Hitam" required />

            <label>Jumlah:</label>
            <input type="text" id="jumlah" placeholder="1" required />

            <label>Upload Desain Sendiri (Opsional):</label>
            <input type="file" id="desain" accept="image/*" /><br /><br />

            <label>Rincian Catatan/Tambahan:</label>
            <textarea id="tambahan" placeholder="Contoh: Sablon nama di bagian belakang."></textarea>

            <div class="button-container">
              <button type="button" class="buy-now" onclick="kirimWhatsApp()">
                Kirim via WhatsApp
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- DIMENSIONS -->
      <div class="dropdown-section">
        <h3 class="dropdown-title" data-target="dimensions-content">
          SIZE GUIDE <i class="fas fa-chevron-down"></i>
        </h3>
        <div id="dimensions-content" class="dropdown-content">
          <p>Available Sizes: S, M, L, XL, XXL</p>
          <p>Regular Fit - True to Size</p>
          <p>
            Size Chart: Chest Width (cm) <br />
            S: 50 | M: 53 | L: 56 | XL: 59 | XXL: 62
          </p>
        </div>
      </div>

      <!-- FABRIC DETAILS -->
      <div class="dropdown-section">
        <h3 class="dropdown-title" data-target="fabric-content">
          FABRIC DETAILS <i class="fas fa-chevron-down"></i>
        </h3>
        <div id="fabric-content" class="dropdown-content">
          <p>
            Bahan: >Body: Cotton blend berkualitas tinggi<br />
            >Sleeves: Synthetic Leather tahan lama
          </p>
          <p>
            Tahan angin dan nyaman dipakai dalam berbagai cuaca, kain tebal
            namun tetap ringan, desain sporty dengan nuansa klasik
          </p>
          <p>
            Detail: Bordir emblem eksklusif di dada atau lengan, kancing
            snap-button untuk tampilan yang lebih vintage
          </p>
        </div>
      </div>

      <!-- LARGE ITEMS DELIVERY & RETURN -->
      <div class="dropdown-section">
        <h3 class="dropdown-title" data-target="delivery-content">
          DELIVERY & RETURN <i class="fas fa-chevron-down"></i>
        </h3>
        <div id="delivery-content" class="dropdown-content">
          <p>Estimated delivery: 3-5 business days</p>
          <p>Free returns within 14 days</p>
          <p>Exchange available for different sizes</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="footer-content">
      <h2>Toko Belanja Anda</h2>
      <p>
        Cari konveksi baju berkualitas dengan harga terjangkau?
        Kami siap membuat pakaian custom dengan bahan terbaik dan jahitan rapi.
        Pesan sekarang dan wujudkan desain impianmu!
      </p>

      <!-- Social Media Icons -->
      <div class="social-icons">
        <a href="https://www.facebook.com/pembuatanseragam/"><i class='bx bxl-facebook'></i></a>
        <a href="https://www.instagram.com/tokobelanjaanda/"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.instagram.com/craazsy_t/"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.instagram.com/zhan_ith/"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.instagram.com/navkeii/"><i class='bx bxl-instagram'></i></a>
      </div>

      <!-- Navigation Links -->
      <div class="footer-nav">
        <a href="../tbazenara.php#home">Home</a>
        <a href="../tbazenara.php#about">About Us</a>
        <a href="../tbazenara.php#shop">Our Shop</a>
        <a href="../tbazenara.php#review">Our Customer</a>
        <a href="../tbazenara.php#contact">Contact Us</a>
      </div>

      <!-- Footer Credit -->
      <p class="footer-credit">Design By • <a href="#">ZeNaRa</a></p>
    </div>
  </footer>

  <script src="../script.js"></script>
  <script src="../tbazenara.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const sr = ScrollReveal({
        origin: "top",
        distance: "85px",
        duration: 2500,
        reset: true,
      });

      sr.reveal(".product-container", { delay: 400 });
      sr.reveal(".product-images", { delay: 400 });
      sr.reveal(".product-info", { delay: 200 });
      sr.reveal(".dropdown-section", { delay: 500, interval: 100 });
    });
  </script>
  <script>
    function kirimWhatsApp() {
      const produk = document.getElementById("produk").value;
      const ukuran = document.getElementById("ukuran").value;
      const warna = document.getElementById("warna").value;
      const jumlah = document.getElementById("jumlah").value;

      const tambahan = document.getElementById("tambahan").value;
      const desain =
        document.getElementById("desain").files.length > 0
          ? "Ya (akan dikirim manual)"
          : "Tidak";

      const nomorTujuan = "+628888094444"; // Nomor WhatsApp kamu
      const pesan = `*Hai* Toko Belanja Anda👋

*Berikut rincian pesanan saya:*
• Produk: ${produk}
• Ukuran: ${ukuran}
• Warna: ${warna}
• Jumlah: ${jumlah}
• Upload Desain Sendiri: ${desain}

*Rincian Tambahan:*
${tambahan}

Jika saya mengunggah desain sendiri, akan saya kirimkan setelah ini. Terima kasih 🙏`;

      const encodedPesan = encodeURIComponent(pesan);
      const url = `https://wa.me/${nomorTujuan}?text=${encodedPesan}`;
      window.open(url, "_blank");
    }
  </script>
  <script>
    function openModal() {
      document.getElementById("orderModal").style.display = "block";
    }

    function closeModal() {
      document.getElementById("orderModal").style.display = "none";
    }

    // Close modal when click outside of it
    window.onclick = function (event) {
      const modal = document.getElementById("orderModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>