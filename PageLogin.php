<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('478248295792-q0otkvkcqt9jr5c1knef5bqljdjol1jn.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/tokobelanjaandaaa/google-callback.php'); 
$client->addScope("email");
$client->addScope("profile");

$login_url = $client->createAuthUrl() . '&prompt=select_account';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBA Website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" ;>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

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
#greeting {
    font-size: 28px;
    font-weight: 600;
    color: #333;
    margin: 20px;
    text-align: center;
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
header.sticky{
    padding: 12px 14%;
    background: var(--other-color);
}
.background {
    width: 100%;
    height: 100vh;
    background: url('img/bg4.gif') no-repeat;
    background-size: cover;
    background-position: center;
    filter: blur(10px);
}
.container {
    position: absolute;
    width: 75%;
    height: 550px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background: url('img/bg4.gif') no-repeat;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    margin-top: 20px;
  }
  
.container .content{
    width: 58%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: transparent;
    padding: 80px;
    color: #e4e4e4;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
}
.content .logo {
    font-size: 30px;
}

.text-sci h2 {
    font-size: 40px;
    line-height: 1;
}
.text-sci h2 span {
    font-size: 25px;
}
.text-sci p {
    font-size: 16px;
    margin: 20px 0;
}
.social-icons a i{
    font-size: 22px;
    color: #e4e4e4;
    margin-right: 10px;
    transition: .5s ease;
}
.social-icons a:hover i{
    transform: scale(1.2);
}

.container .logreg-box{
    width: calc(100% - 58%);
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    overflow: hidden;
}
.logreg-box .form-box{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: transparent;
    backdrop-filter: blur(20px);
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    color: #e4e4e4;

}
.logreg-box .form-box.login {
    transform: translateX(0);
    transition: transform .6s ease;
    transition-delay: .7s;
}
.logreg-box.active .form-box.login {
    transform: translateX(430px);
    transition-delay: 0s;
}
.logreg-box .form-box.register {
    transform: translateX(430px);
    transition: transform .6s ease;
    transition-delay: .0s
}

.logreg-box.active .form-box.register {
    transform: translateX(0);
    transition-delay: .7s;
}
.form-box h2 {
    font-size: 32px;
    text-align: center;
}
.form-box .input-box{
    width: 340px;
    height: 50px;
    border-bottom: 2px solid #e4e4e4;
    margin: 30px 0;
    position: relative;
}
.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    color: #e4e4e4;
    font-weight: 500;
    padding-right: 28px;
}
.input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    font-weight: 500;
    transition: .5s ease;
    pointer-events: none;
}
.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
}
.input-box .icon{
    position: absolute;
    right: 0;
    top: 13px;
    font-size: 19px;
}
.form-box .remember-forgot {
    font-size: 14.5px;
    font-weight: 500;
    margin: 15px 0 15px;
    display: flex;
    justify-content: space-between;
}
.remember-forgot label input {
    accent-color: #e4e4e4;
    margin-right: 3px;
}
.remember-forgot a {
    color: #e4e4e4;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: underline;
}
.btn {
    width: 100%;
    height: 45px;
    background: var(--main-color);
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    color: #e4e4e4;
    font-weight: 500;
    box-shadow: 0 0 10px rgb(0, 0, 0, .5);
}
.form-box .login-register {
    font-size: 14.5px;
    font-weight: 500;
    text-align: center;
    margin-top: 25px;
}
.login-register p a{
    color:  #e4e4e4;
    font-weight: 600;
    text-decoration: none;
}
.login-register p a:hover {
    text-decoration: underline;
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
            <a href="PageLogin.html"><i class='bx bxs-user fs-4'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bxl-firebase'></i>TBA</h2>
            <div class="text-sci">
                <h2>Welcome!<br><span>To Our Website.</span></h2>
                <p>"Bergabunglah dengan komunitas kami dan nikmati pengalaman terbaik dalam mengakses layanan yang kami
                    sediakan.
                    Masuk sekarang dan temukan kemudahannya!"</p>

                <div class="social-icons">
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-tiktok'></i></a>
                    <a href="#"><i class='bx bxl-tiktok'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box" id="login">
            <div class="form-box login">
                <form action="proses_login.php" method="POST">
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn">Sign In</button>
                    <br>
                    <a href="google-login.php" class="btn"
                        style="display: flex; align-items: center; margin-top: 10px; justify-content: center; gap: 10px; background: white; border: 1px solid #ccc; padding: 10px 20px; color: #555; font-weight: bold; border-radius: 5px;">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo"
                            style="width: 20px;">
                        Login with Google
                    </a>




                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register" id="register">
                <form action="register.php" method="POST">
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bx-user'></i></span>
                        <input type="text" id="name" name="name" required>
                        <label>Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" id="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" id="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" name="agree"> I agree to the terms & conditions </label>
                    </div>

                    <button type="submit" class="btn">Sign Up</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Sign in</a></p>
                    </div>
                </form>
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

    <script src="login.js"></script>
    <script src="tbazenara.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>