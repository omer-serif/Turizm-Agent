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
    <title>Hakkımızda</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <!--! header section start  -->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="logo" />
        </a>
        <nav class="navbar">
            <a href="index.php">Ana Sayfa</a>
            <a href="about.php" class="active">Hakkımızda</a>
            <a href="menu.php">Yurt Dışı Turlar</a>
            <a href="products.php">Yurt İçi Turlar</a>
            <a href="reviev.php">Yorumlar</a>
            <a href="contact.php">İletişim</a>
            <a href="blogs.php">Bloglar</a>
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

    <!--! about section start  -->
    <section class="about" id="about">
        <h1 class="heading">BİZ <span>KİMİZ?</span></h1>
        <div class="row">
            <div class="image">
                <img src="images/about.jpg" alt="about" />
            </div>
            <div class="content">
                <h3>Umuttepe Turizm Acentesi: Keşif Dolu Bir Maceraya Hazır Olun!</h3>
                <p>
                    Umuttepe merkezli turizm acentemiz, maceraperest ruhları ve keşfetme arzularını canlandırmak için var. Yılların deneyimi ve tutkulu ekibimizle, seyahat tutkunlarını unutulmaz anılarla doldurmak için çalışıyoruz. Amacımız, müşterilerimize sadece gezginlik değil, aynı zamanda keşif ve öğrenme deneyimleri sunmaktır. Ülkelerin zengin kültürünü ve doğal güzelliklerini keşfetmek isteyen herkes için özel ve özelleştirilmiş seyahat paketleri sunuyoruz.
                </p>
                <p>
                    Misyonumuz, müşterilerimize sadece bir tatil değil, hayatlarının en unutulmaz deneyimlerini sunmaktır. Ülkelerin gizli hazinelerini ortaya çıkarmak, yerel kültürü ve insanları keşfetmek için çaba gösteriyoruz. Ekibimiz, her seyahatin kişisel ve özel olması gerektiğine inanır ve bu doğrultuda müşterilerimize benzersiz ve özelleştirilmiş hizmetler sunar.
                </p>
                <p>
                    Bizimle birlikte seyahat eden herkes, sadece turistik yerlerin ötesine geçmekle kalmaz, aynı zamanda kendilerini keşfederler. Ülkelerin eşsiz manzaralarını ve deneyimlerini yaşamak için bizimle seyahat eden herkes, bir sonraki maceraya olan tutkusunu artırır. Turizm acentemiz, müşterilerimize bir tatil değil, bir yaşam deneyimi sunmayı taahhüt eder.
                </p>
                <p>
                    Müşteri memnuniyetini en üst düzeyde tutarak, her bir seyahati özel kılmak için sürekli çaba gösteriyoruz. Yenilikçi yaklaşımlarımız, geniş hizmet yelpazemiz ve müşterilerimizin ihtiyaçlarına duyarlılığımız ile sektörde öncü bir konumda bulunuyoruz. Amacımız, her müşterinin beklentilerini aşarak, seyahat deneyimlerini unutulmaz kılmak ve onlara hayal ettikleri tatili yaşatmaktır.
                </p>
                <a href="#" class="btn">Daha Fazla Bilgi</a>
            </div>
        </div>
    </section>
    <!--! about section end  -->

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
            <a href="about.php" class="active">Hakkımızda</a>
            <a href="menu.php">Yurt Dışı Turlar</a>
            <a href="products.php">Yurt İçi Turlar</a>
            <a href="reviev.php">Yorumlar</a>
            <a href="contact.php">İletişim</a>
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
