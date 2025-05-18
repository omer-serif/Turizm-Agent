
<?php

session_start();
include("baglanti.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>İletişim</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <!--! header section start  -->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="logo" />
        </a>
        <nav class="navbar">
            <a href="index.php">Anasayfa</a>
            <a href="about.php">Hakkımızda</a>
            <a href="menu.php">Yurt Dışı Turlar</a>
            <a href="products.php">Yurt İçi Turlar</a>
            <a href="reviev.php">Yorumlar</a>
            <a href="contact.php" class="active">İletişim</a>
            <a href="blogs.php">Blog</a>
        </nav>

        <div>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <a href="logout.php" style="font-size: 22px;">Çıkış Yap</a>
            <?php else: ?>
            <a href="giris.php" style="font-size:22px;">Giriş Yap</a>
            <?php endif; ?>
        </div>

        <div class="search-form">
            <input type="text" class="search-input" id="search-box" placeholder="search here" />
            <i class="fas fa-search"></i>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <i class="fas fa-times"></i>
                <img src="images/menu-1.png" alt="menu" />
                <div class="content">
                    <h3>Maldivler(Y)</h3>
                    <div class="price">$199.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <i class="fas fa-times"></i>
                <img src="images/menu-1.png" alt="menu" />
                <div class="content">
                    <h3>Maldivler(Y)</h3>
                    <div class="price">$199.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <i class="fas fa-times"></i>
                <img src="images/menu-1.png" alt="menu" />
                <div class="content">
                    <h3>Maldivler(Ç)</h3>
                    <div class="price">$159.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <i class="fas fa-times"></i>
                <img src="images/menu-1.png" alt="menu" />
                <div class="content">
                    <h3>Maldivler(Ç)</h3>
                    <div class="price">$159.99/-</div>
                </div>
            </div>
            <a href="#" class="btn">Şimdi Öde</a>
        </div>
    </header>
    <!--! header section end  -->

    <!--! contact section start  -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>İletİşİm</span></h1>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.212922656672!2d29.9254006!3d40.823286599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb4e8ad751f097%3A0xdb29061ce8f77254!2zS29jYWVsaSDDnG5pdmVyc2l0ZXNpIFVtdXR0ZXBlIEthbXDDvHPDvCBCIEthcMSxc8Sx!5e0!3m2!1str!2str!4v1714992837096!5m2!1str!2str" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form>
                <h3>İrtİbat</h3>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="isim" />
                </div>
                <div class="inputBox">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="email" />
                </div>
                <div class="inputBox">
                    <i class="fas fa-phone"></i>
                    <input type="number" placeholder="telefon numarası" />
                </div>
                <input type="submit" class="btn" value="İrtibat" />
            </form>
        </div>
    </section>
    <!--! contact section end  -->

    <!--! footer section start  -->
    <section class="footer">
        <div class="search">
            <input type="text" class="search-input" placeholder="ara" />
            <button class="btn btn-primary">Ara</button>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="index.php" >Anasayfa</a>
            <a href="about.php" >Hakkımızda</a>
            <a href="menu.php">Yurt Dışı Turlar</a>
            <a href="products.php">Yurt İçi Turlar</a>
            <a href="reviev.php">Yorumlar</a>
            <a href="contact.php"  class="active">İletişim</a>
            <a href="blogs.php">Blog</a>
        </div>

        <div class="credit">
            created by <span>Turizm Agent</span> | all rigths reserved
        </div>
    </section>
    <!--! footer section end  -->

    <script src="js/script.js"></script>
</body>

</html>
