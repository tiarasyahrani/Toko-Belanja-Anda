<?php
session_start();

$loggedIn = isset($_SESSION['user']) && !empty($_SESSION['user']);
$user = $loggedIn ? $_SESSION['user'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBA Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" ;>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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

/* Container dropdown */
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

header.sticky{
    padding: 12px 14%;
    background: var(--other-color);
}
section{
    padding: 70px 14% 60px;
}
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background-color: rgba(0,0,0,0.4);
}
.modal-content p {
    color: var(--other-color);
    padding: 20px;
}
.modal-content {
  background-color: #fff;
  margin: 15% auto;
  padding: 20px;
  border-radius: 8px;
  width: 80%;
  max-width: 400px;
  text-align: center;
}
.modal-buttons button {
  padding: 10px 20px;
  margin: 0 10px;
  border: none;
  cursor: pointer;
}
#confirmLogout {
  background-color: var(--main-color);
  color: #fff;
      border-radius: 3rem;
    transition: all .50s ease;
}
#confirmLogout:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: #ff9f0d 0px 1px 25px;
}
#cancelLogout {
  background-color: var(--bg-color);
  color: #fff;
      border-radius: 3rem;
    transition: all .50s ease;
}
#cancelLogout:hover{
    background: var(--bg-color);
    color: var(--main-color);
    box-shadow: var(--other-color) 0px 1px 25px;
}

.home{
    position: relative;
    height: 100vh;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem;
}

.home-img img{
    width: 80%;
    height: auto;
}
.home-text h1{
    font-size: var(--big-font);
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 3rem;
}
.span{
    color: var(--main-color);
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
.btn i{
    vertical-align: middle;
    margin-left: 9px;
    font-size: 20px;
}
.btn:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: #ff9f0d 0px 1px 25px;
}
.btn2{
    display: inline-block;
    margin-left: 30px;
    font-size: var(--p-font);
    font-weight: 500;
    letter-spacing: 1px;
    color: var(--main-color);
    border-bottom: 3px solid var(--main-color);
    transition: all .50s ease;
}
.btn2:hover{
    transform: scale(1.1) translateX(12px);
}

.container{
    padding: 30px 14% 70px;
    display: grid;
    gap: 30px;
    grid-template-columns: repeat(auto-fit, minmax(300px, auto));
    text-align: center;
}
.container-box{
    padding: 30px 30px 30px 30px;
    background: var(--other-color);
    border-radius: 3rem;
}
.container-box img{
    width: 100%;
    max-width: 50px;
    height: auto;
}
.container-box h3{
     font-size: 18px;
     font-weight: bold;
     margin: 16px 0;
}
.container-box a{
    color: var(--second-color);
    font-size: var(--p-font);
    letter-spacing: 1px;
    transition: all .50s ease;
}
.container-box a:hover{
    color: var(--main-color);
}
.about{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 4rem;
}
.about-img img{
    width: 100%;
    height: auto;
}
.about-text h2{
    font-size: var(--h2-font);
    line-height: 1.3;
    margin-bottom: 2rem;
    margin-right: 5rem;
}
.about-text p{
    color: var(--second-color);
    font-size: var(--p-font);
    line-height: 30px;
    margin-bottom: 3rem;
}
.middle-text{
    text-align: center;
}
.middle-text h4{
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--main-color);
}
.middle-text h2{
    font-size: var(--h2-font);
}
.shop-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    grid-auto-rows: 1fr;
    gap: 2rem;
    margin-top: 4rem;
}

.row{
    position: relative;
    min-height: 450px; /* Sesuaikan tinggi minimum */
    padding: 10px 35px 40px;
    background: var(--other-color);
    border-radius: 1rem;
}
.row img{
    width: 100%;
    height: auto; /* Memastikan aspek rasio tetap terjaga */
    max-height: 200px; /* Batasi tinggi maksimum jika diperlukan */
    border-radius: 1rem;
    margin-top: 3rem;
    transition: transform .50s ease;
    cursor: pointer;
    object-fit: cover; /* Memastikan gambar tetap proporsional */

}
.row h3{
    font-size: 18px;
    margin-bottom: 5px;
    margin-top: 1.5rem;
    font-weight: 700;
}
.row p{
    color: var(--second-color);
    line-height: 30px;
    margin-bottom: 1.1rem;
}
.in-text {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px; /* Beri jarak agar tidak terlalu rapat */
}

.in-text .price h6{
    display: flex;
    align-items: center;
    font-size: 17px;
    color: var(--main-color);
    font-weight: 600;
}
.in-text .s-btnn a{
    display: inline-block;
    padding: 9px 20px;
    background: var(--bg-color);
    font-size: 14px;
    font-weight: 500;
    color: var(--main-color);
    letter-spacing: 1px;
    text-align: center;
    border-radius: 3rem;
    transition: all .50s ease;
}
.in-text .s-btnn a:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: #ff9f0d 0px 1px 25px;
}

.top-icon{
    position: absolute;
    top: 30px;
    left: 35px;
}
.top-icon i{
    font-size: 22px;
    color: var(--main-color);
}
.row-btn{
    text-align: center;
    margin-top: 5rem;
}
.row img:hover{
    transform: scale(1.1);
}
.review-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, auto));
    gap: 2rem;
    align-items: center;
    margin-top: 4rem;
}
.box{
    padding: 35px;
    background: var(--other-color);
    border-radius: 3rem;
}
.box p{
        color: var(--second-color);
        font-size: 15px;
        line-height: 20px;
        margin-bottom: 1.5rem;
}
.in-box{
    display: flex;
    align-items: center;
    gap: 30px;
}
.bx-img img{
    width: 70px;
    height: 70px;
    border-radius: 3rem;
}
.bxx-text h4{
    margin: 5px 0;
    font-size: 18px;
}
.bxx-text h5{
    color: var(--second-color);
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    margin-bottom: 10px;
}
.ratings i{
    color: var(--main-color);
    font-size: 18px;
    margin-right: 5px;
}

.contact {
    display: flex;
    justify-content: space-between;
    margin: 50px 0;
    padding: 10px 35px 40px;
}
.contact .left {
    width: 50%;
    margin-left: 250px;
}
.contact .right {
    width: 50%;
    margin-right: 200px;
}
.contact .left h3, .contact .right h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 20px;
}
.contact .left p, .contact .right p {
    font-size: 14px;
    color: #666;
    margin: 10px 0;
}
.contact .left ul {
    list-style: none;
    padding: 0;
}
.contact .left ul li {
    margin: 10px 0;
    font-size: 14px;
}
.contact .left ul li i {
    margin-right: 10px;
}
.contact .right form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.contact .right form input, .contact .right form textarea {
    width: 48%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}
.contact .right form textarea {
    width: 100%;
    height: 100px;
}
.contact .right form button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background: var(--other-color);
    color: var(--main-color);
    transition: all .50s ease;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}
.contact .right form button:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: #ff9f0d 0px 1px 25px;
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

.scroll{
    position: fixed;
    bottom: 2.2rem;
    border-top: 3rem;
    right: 3.2rem;
}
.scroll i{
    font-size: 22px;
    color: var(--text-color);
    background: var(--main-color);
    padding: 10px;
    border-radius: 2rem;
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
    .home-img img,
    .about-img img {
        width: 100%;
        max-width: 490px;
        height: auto;
    }
    .home {
        height: 70vh;
    }
}

@media (max-width: 860px) {
    .home {
        grid-template-columns: 1fr;
        height: auto;
        gap: 1rem;
    }
    .home-text {
        padding-top: 60px;
    }
    .home-img {
        text-align: center;
    }
    .about {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    .about-img {
        text-align: center;
    }
}

@media (max-width: 520px) {
    .contact-img {
        gap: 1.5rem;
        text-align: center;
    }
    .contact-img img {
        width: 100%;
        max-width: 170px;
        height: auto;
    }
    .social i {
        margin: 0 10px;
    }
    .contact-text {
        max-width: 100%;
    }
    .details {
        gap: 1.5rem;
    }
}

@media (max-width: 475px) {
    :root {
        --big-font: 2.8rem;
        --h2-font: 2rem;
    }
}

@media (max-width: 440px) {
    .home {
        height: auto;
        gap: 1rem;
    }
    .home-text {
        text-align: center;
    }
}
/* Responsif untuk Tablet dan Handphone */
@media (max-width: 1024px) {
    .contact {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 20px;
    }
    
    .contact .left, .contact .right {
        width: 90%;
        margin: 0;
    }
    
    .contact .left {
        margin-bottom: 20px;
    }
    
    .contact .right form {
        flex-direction: column;
    }
    
    .contact .right form input {
        width: 100%;
    }
}

@media (max-width: 768px) {
    .contact {
        padding: 15px;
    }
    
    .contact .left h3, .contact .right h3 {
        font-size: 16px;
    }
    
    .contact .left p, .contact .right p {
        font-size: 13px;
    }
    
    .contact .right form button {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .contact {
        padding: 10px;
    }
    
    .contact .left h3, .contact .right h3 {
        font-size: 14px;
    }
    
    .contact .left p, .contact .right p {
        font-size: 12px;
    }
    
    .contact .right form input, .contact .right form textarea {
        font-size: 12px;
        padding: 8px;
    }
    
    .contact .right form button {
        font-size: 12px;
        padding: 8px;
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
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#shop">Our Product</a></li>
            <li><a href="#review">Our Customer</a></li>
            <li><a href="#contact">Contact Us</a></li>
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
        <a href="PageLogin.php" class="nav-link p-0">
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
    <section class="home" id="home">
        <div class="home-text">
            <h1>Making Your <span class="span">Clothing Ideas</span> a Reality</h1>
            <a href="#shop" class="btn">Explore Product<i class="bx bxs-right-arrow"></i></a>
            <a href="#shop" class="btn2">Order Now</a>
        </div>
        <div class="home-img">
            <img src="img/aboutt.png" alt="Honey Image">
        </div>
    </section>
    <section class="container">
        <div class="container-box">
            <img src="img/c1.png" alt="">
            <h3>09:00 am - 6:00 pm</h3>
            <a href="#">Working Hours</a>
        </div>

        <div class="container-box">
            <img src="img/c2.png" alt="">
            <h3>Toko Belanja Anda</h3>
            <a href="https://maps.app.goo.gl/YpKkBamcecq2U64U9">Get Direction</a>
        </div>

        <div class="container-box">
            <img src="img/c3.png" alt="">
            <h3>+(62)888-809-4444</h3>
            <a href="https://wa.me/c/628888094444">Call us Now</a>
        </div>
    </section>
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/home.png" alt="">
        </div>

        <div class="about-text">
            <h2> Tentang Kami <br>– Konveksi Berkualitas & Terpercaya.</h2>
            <p>Selamat datang di TBA, tempat terbaik untuk menemukan pakaian dan aksesori berkualitas dengan harga
                terjangkau. Kami menyediakan berbagai pilihan fashion, mulai dari t-shirt, kemeja, hoodie, varsity,
                polo, hingga topi dan jersey, dengan desain stylish dan bahan nyaman.

                Terima kasih telah memilih TBA! Selamat berbelanja! </p>
            <a href="aboutUs.php" class="btn">Explore Story<i class="bx bxs-right-arrow"></i></a>
        </div>
    </section>
    <section class="shop" id="shop">
        <div class="middle-text">
            <h4>Our Shop</h4>
            <h2>Let's check popular products</h2>
        </div>

        <div class="shop-content">
            <div class="row">
                <img src="img/hoodie.png" alt="">
                <h3>HOODIE</h3>
                <p>Hoodie berkualitas tinggi dengan bordir atau sablon sesuai keinginan.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 120.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-hoodie.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/kemeja.png" alt="">
                <h3>KEMEJA</h3>
                <p>Kemeja formal dan casual dengan desain custom untuk bisnis atau personal.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 100.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-kemeja.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/kaos.png" alt="">
                <h3>T-SHIRT</h3>
                <p>Kaos custom dengan berbagai pilihan bahan dan teknik cetak terbaik.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 60.000 </h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-tshirt.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/topi.png" alt="">
                <h3>TOPI</h3>
                <p>Topi bordir atau sablon untuk identitas brand, merchandise. </p>
                <div class="in-text">
                    <div class="price">
                        <h6> Rp 30.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-topi.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/pdh.png" alt="">
                <h3>PDH</h3>
                <p>PDH berkualitas untuk instansi, organisasi, atau komunitas dengan desain profesional.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 120.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-pdh.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/jersey.png" alt="">
                <h3>JERSEY</h3>
                <p>Jersey custom untuk olahraga, esport, atau komunitas dengan bahan nyaman</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 80.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-jersey.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/varsity.png" alt="">
                <h3>VARSITY</h3>
                <p> Jaket eksklusif dengan desain custom untuk komunitas, tim, atau brand Anda.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 180.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-varsity.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/polo.png" alt="">
                <h3>POLO</h3>
                <p>Kaos berkerah elegan dengan bahan nyaman, cocok untuk seragam atau event.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 70.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="details/details-polo.php">Learn More</a>
                    </div>
                </div>
                <div class="top-icon">
                    <a href="#"><i class="bx bx-heart"></i></a>
                </div>
            </div>
        </div>

        <div class="row-btn">
            <a href="#" class="btn">All Products<i class="bx bxs-right-arrow"></i></a>
        </div>
    </section>
    <section class="review" id="review">
        <div class="middle-text">
            <h4>Our Customer</h4>
            <h2>Cliens Review About Our Product</h2>
        </div>
        <div class="review-content">
            <div class="box">
                <p>Tim sangat responsif membantu desain yang saya inginkan. Hasil akhirnya benar-benar sesuai dengan
                    yang saya bayangkan. Terima kasih!</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="img/felixx.jpg" alt="">
                    </div>
                    <div class="bxx-text">
                        <h4>Lee Felixx</h4>
                        <h5>Artist</h5>
                        <div class="ratings">
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>Harga terjangkau tapi kualitas tetap juara! Saya pesan hoodie dan jersey untuk komunitas kami, dan
                    semuanya sangat puas. Recommended!!</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="img/sabrina.jpg" alt="">
                    </div>
                    <div class="bxx-text">
                        <h4>Sabrina Carpenter</h4>
                        <h5>Artist</h5>
                        <div class="ratings">
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>Bahan yang digunakan sangat nyaman, jahitan rapi, dan sablon kuat. Sangat puas dengan layanan dan
                    kualitasnya. Pasti akan pesan lagi!</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="img/marklee.jpg" alt="">
                    </div>
                    <div class="bxx-text">
                        <h4>Mark Lee</h4>
                        <h5>Artist</h5>
                        <div class="ratings">
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="middle-text" id="contact">
        <h2>Contact Us</h2>
    </div>
    <div class="contact">

        <div class="left">
            <h3>
                Call us
            </h3>
            <p>
                Call our team Mon-Fri from 09:00 am - 6:00 pm
            </p>
            <ul>
                <li>
                    <i class='bx bxs-phone-call'></i>
                    +(62)888-809-4444
                </li>
            </ul>
            <h3>
                Chat with us
            </h3>
            <p>
                Speak to our friendly team via live chat.
            </p>
            <ul>
                <li>
                    <i class='bx bx-message-dots'></i>
                    Start a live chat
                </li>
                <li>
                    <i class='bx bxs-envelope'></i>
                    Shoot us an email
                </li>
                <li>
                    <i class='bx bxl-twitter'></i>
                    Message us on Twitter
                </li>
            </ul>
        </div>
        <div class="right">
            <form action="contact_process.php" method="POST">
                <input name="first_name" placeholder="First name" type="text" />
                <input name="last_name" placeholder="Last name" type="text" />
                <input name="email" placeholder="Email" type="email" />
                <input name="phone" placeholder="Phone number" type="tel" />
                <textarea name="message" placeholder="Leave us a message..."></textarea>
                <button type="submit">Send message</button>
            </form>

            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                <script>
                    window.onload = function () {
                        alert("Pesan berhasil dikirim! Terima kasih atas pesan Anda.");
                    }
                </script>
            <?php endif; ?>
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
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#shop">Our Shop</a>
                <a href="#review">Our Customer</a>
                <a href="#contact">Contact Us</a>
            </div>

            <!-- Footer Credit -->
            <p class="footer-credit">Design By • <a href="#">ZeNaRa</a></p>
        </div>
    </footer>


    <a href="#" class="scroll">
        <i class="bx bx-up-arrow-alt"></i>
    </a>



    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="tbazenara.js"></script>
    <script>
        const logoutBtn = document.getElementById('logoutBtn');
        const logoutModal = document.getElementById('logoutModal');
        const cancelLogout = document.getElementById('cancelLogout');
        const confirmLogout = document.getElementById('confirmLogout');
        const logoutForm = document.getElementById('logoutForm');

        logoutBtn.addEventListener('click', function () {
            logoutModal.style.display = 'block';
        });

        cancelLogout.addEventListener('click', function () {
            logoutModal.style.display = 'none';
        });

        confirmLogout.addEventListener('click', function () {
            logoutForm.submit(); // mengirim form ke logout.php
        });

        // Tutup modal jika klik di luar modal
        window.addEventListener('click', function (event) {
            if (event.target == logoutModal) {
                logoutModal.style.display = 'none';
            }
        });
    </script>
    <!-- Bootstrap CSS -->

<!-- Bootstrap JS Bundle (termasuk Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", this.window.scrollY > 80);
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
}; 

const sr = ScrollReveal({
    origin: 'top',
    distance: '85px',
    duration: 2500,
    reset: true
})

sr.reveal ('.home-text',{delay:300});
sr.reveal ('.home-img',{delay:400});
sr.reveal ('.container',{delay:400});

sr.reveal ('.about-img',{});
sr.reveal ('.about-text',{delay:300});

sr.reveal ('.middle-text',{});
sr.reveal ('.arow-btn,.shop-content',{delay:300});

sr.reveal ('.review-content,.contact',{delay:300});
sr.reveal ('.footer-footer',{delay:300});







document.getElementById("showProducts").addEventListener("click", function(event) {
    event.preventDefault(); 
    var extraProducts = document.getElementById("extraProducts");
    if (extraProducts.style.display === "none") {
        extraProducts.style.display = "grid";
    } else {
        extraProducts.style.display = "none";
    }
});

</script>


</body>

</html>