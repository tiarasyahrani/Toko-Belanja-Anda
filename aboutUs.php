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
  <title>About Us</title>
  <link rel="stylesheet" href="aboutUs.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    scroll-padding-top: 3rem;

  }

  :root {
    --main-color: #ff9f0d;
    --text-color: #fff;
    --other-color: #212121;
    --second-color: #9e9e9e;
    --bg-color: #111111;

    --big-font: 3.5rem;
    --h2-font: 2.6rem;
    --p-font: 1.1rem;
  }

  body {
    background: var(--bg-color);
    color: var(--text-color);
    overflow-x: hidden;

  }

  header {
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


  .navlist {
    display: flex;
  }

  .navlist a {
    color: var(--text-color);
    font-size: var(--n-font);
    font-weight: 600;
    margin: 0 30px;
    transition: all .50s ease;
  }

  .navlist a:hover {
    color: var(--main-color);
  }

  .navlist a.active {
    color: var(--main-color);
  }

  .nav-icons {
    display: flex;
    align-items: center;
    padding: 8px 15px;
    background: var(--main-color);
    border-radius: 3rem;
    box-shadow: #ff9f0d 0px 1px 25px;
  }

  .nav-icons i {
    vertical-align: middle;
    font-size: 25px;
    color: var(--bg-color);
    margin-right: 8px;
    margin-left: 5px;
    transition: all .50s ease;
  }

  #menu-icon {
    font-size: 32px;
    color: var(--bg-color);
    z-index: 10001;
    cursor: pointer;
    display: none;
  }

  .nav-icons i:hover {
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

  header.sticky {
    padding: 12px 14%;
    background: var(--other-color);
  }

  section {
    padding: 70px 14% 60px;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
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

  #confirmLogout:hover {
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

  #cancelLogout:hover {
    background: var(--bg-color);
    color: var(--main-color);
    box-shadow: var(--other-color) 0px 1px 25px;
  }

  .hero {
    position: relative;
    height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    overflow: hidden;
  }

  .hero-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 500px;
    object-fit: cover;
    z-index: 1;
    opacity: 0.4;
  }

  .hero-content {
    position: relative;
    z-index: 2;
  }

  .hero h1 {
    font-size: 59px;
    margin-bottom: 20px;
    color: #fff;
  }

  .hero span {
    color: #ff9f0d;
  }


  .hero-image {
    max-width: 100%;
    height: auto;
    margin-top: 30px;
  }

  .story {
    display: flex;
    justify-content: space-between;
    padding: 80px;
    background: #000;
    gap: 40px;
  }

  .story-text {
    flex: 1;
  }

  .story-text h4 {
    color: #ff9f0d;
    margin-bottom: 10px;
  }

  .story-text h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #fff;
  }

  .story-text p {
    color: #ccc;
  }

  .features {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .feature h3 {
    color: #fff;
    font-size: 18px;
    margin-bottom: 8px;
  }

  .feature p {
    color: #bbb;
  }

  .mission,
  .vision {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 80px;
    background: #111;
    gap: 40px;
  }

  .mission .text,
  .vision .text {
    flex: 1;
    color: #eee;
  }

  .mission img,
  .vision img {
    width: 300px;
    height: auto;
    border-radius: 12px;
  }

  .stats {
    display: flex;
    gap: 30px;
    margin-top: 20px;
  }

  .stats div {
    background: #1a1a1a;
    padding: 10px;
    border-radius: 8px;
    text-align: center;
    color: #fff;
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

  @media screen and (max-width: 1024px) {

    .story,
    .mission,
    .vision {
      flex-direction: column;
      padding: 40px;
    }

    .stats {
      flex-direction: column;
      align-items: flex-start;
    }

    .hero h1 {
      font-size: 36px;
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

    .contact .left,
    .contact .right {
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

    .contact .left h3,
    .contact .right h3 {
      font-size: 16px;
    }

    .contact .left p,
    .contact .right p {
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

    .contact .left h3,
    .contact .right h3 {
      font-size: 14px;
    }

    .contact .left p,
    .contact .right p {
      font-size: 12px;
    }

    .contact .right form input,
    .contact .right form textarea {
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
      <li><a href="tbazenara.php#home" class="active">Home</a></li>
      <li><a href="tbazenara.php#about">About Us</a></li>
      <li><a href="tbazenara.php#shop">Our Product</a></li>
      <li><a href="tbazenara.php#review">Our Customer</a></li>
      <li><a href="tbazenara.php#contact">Contact Us</a></li>
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
  <section class="hero">
    <img src="img/fotoAboutUS.png" alt="Team" class="hero-image" />
    <div class="hero-content">
      <h1>Who <br /><span>We Are?</span></h1>
      <div class="hero-buttons"></div>
    </div>
  </section>

  <section class="story">
    <div class="story-text">
      <h4>OUR STORY</h4>
      <h2>
        Kami mendefinisikan ulang dunia fashion. Gaya yang cocok untuk semua
        ukuran.
      </h2>
      <p>
        Sentuhan kreativitas dan keunikan adalah inti dari setiap koleksi yang
        kami ciptakan—memberi rasa percaya diri dalam setiap penampilan.
      </p>
    </div>
    <div class="features">
      <div class="feature">
        <h3>01. Pengalaman bertahun-tahun di dunia fashion</h3>
        <p>
          Tim kami menggabungkan pengalaman bertahun-tahun dalam desain dan
          retail fashion untuk menghadirkan gaya yang selalu up to date.
        </p>
      </div>
      <div class="feature">
        <h3>02. Ukuran yang inklusif</h3>
        <p>
          Kami percaya bahwa fashion adalah untuk semua orang. Karena itu,
          koleksi kami dirancang agar nyaman dan cocok untuk berbagai bentuk
          tubuh.
        </p>
      </div>
      <div class="feature">
        <h3>03. Koleksi mengikuti tren</h3>
        <p>
          Tetap tampil stylish dengan koleksi musiman yang terinspirasi dari
          tren global dan masukan langsung dari pelanggan.
        </p>
      </div>
    </div>
  </section>

  <section class="mission">
    <div class="text">
      <h2>Our Mission</h2>
      <p>
        Kami berkomitmen untuk menghadirkan fashion berkualitas dengan desain
        yang stylish dan nyaman untuk semua kalangan. Mulai dari remaja hingga
        dewasa, kami membantu pelanggan mengekspresikan diri melalui pakaian
        yang tepat.
      </p>
      <div class="stats">
        <div><strong>94%</strong> Kepuasan Pelanggan</div>
        <div><strong>70K+</strong> Produk Terjual</div>
        <div><strong>10K+</strong> Pelanggan Setia</div>
      </div>
    </div>
    <img src="img/bos1.png" alt="Person" />
  </section>

  <section class="vision">
    <img src="img/bos2.png" alt="Person" />
    <div class="text">
      <h2>Our Vision</h2>
      <p>
        Kami percaya bahwa fashion bukan sekadar tren, tapi cara
        mengekspresikan kepribadian. Visi kami adalah menjadi brand fashion
        lokal terdepan yang menginspirasi gaya hidup positif dan percaya diri,
        baik di pasar nasional maupun internasional.
      </p>
    </div>
  </section>
  <footer class="footer">
    <div class="footer-content">
      <h2>Toko Belanja Anda</h2>
      <p>
        Cari konveksi baju berkualitas dengan harga terjangkau? Kami siap
        membuat pakaian custom dengan bahan terbaik dan jahitan rapi. Pesan
        sekarang dan wujudkan desain impianmu!
      </p>

      <!-- Social Media Icons -->
      <div class="social-icons">
        <a href="https://www.facebook.com/pembuatanseragam/"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/tokobelanjaanda/"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.instagram.com/craazsy_t/"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.instagram.com/zhan_ith/"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.instagram.com/navkeii/"><i class="bx bxl-instagram"></i></a>
      </div>

      <!-- Navigation Links -->
      <div class="footer-nav">
        <a href="tbazenara.html#home">Home</a>
        <a href="tbazenara.html#about">About Us</a>
        <a href="tbazenara.html#shop">Our Shop</a>
        <a href="tbazenara.html#review">Our Customer</a>
        <a href="tbazenara.html#contact">Contact Us</a>
      </div>

      <!-- Footer Credit -->
      <p class="footer-credit">Design By • <a href="#">ZeNaRa</a></p>
    </div>
  </footer>
  <script src="tbazenara.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const sr = ScrollReveal({
        origin: 'bottom',
        distance: '50px',
        duration: 1500,
        reset: false
      });

      sr.reveal('.hero-image', { delay: 200 });
      sr.reveal('.hero-content h1', { delay: 400 });
      sr.reveal('.story-text', { delay: 600 });
      sr.reveal('.feature', { delay: 700, interval: 200 });
      sr.reveal('.mission .text', { delay: 800 });
      sr.reveal('.mission img', { delay: 900 });
      sr.reveal('.vision img', { delay: 900 });
      sr.reveal('.vision .text', { delay: 1000 });
    });
  </script>

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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>