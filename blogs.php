
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
    <title>Blog</title>
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
            <a href="contact.php">İletişim</a>
            <a href="blogs.php" class="active">Blog</a>
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

    <!--! blogs section start  -->
    <section class="blogs" id="blogs">
        <h1 class="heading"><span>blog</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="blog" />
                </div>
                <div class="content">
                    <a href="#" class="title">Paskalya heykelleri</a>
                    <span>by admin / 12 Mart, 2022</span>
                    <p>
                        Paskalya heykelleri, geleneksel olarak Paskalya bayramı kutlamalarında kullanılan, genellikle çikolatadan yapılan veya diğer malzemelerle şekillendirilen dini ve sembolik figürlerdir.
                    </p>
                    <a href="#" class="btn">Devamını Oku</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="blog" />
                </div>
                <div class="content">
                    <a href="#" class="title">Petra'da zaman yolculuğu</a>
                    <span>by admin / 10 Mayıs, 2020</span>
                    <p>
                        Petra, antik çağlardan kalma muhteşem bir kaya şehridir ve Ürdün'ün en ünlü turistik yerlerinden biridir, kayalara oyulmuş saraylar ve tapınaklarla tanınır.
                    </p>
                    <a href="#" class="btn">Devamını Oku</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="blog" />
                </div>
                <div class="content">
                    <a href="#" class="title">Ayder'de puslu çay</a>
                    <span>by admin / 28 Haziran, 2019</span>
                    <p>
                        Ayder Yaylaları, Karadeniz'in yeşil cenneti olarak bilinir; şifalı suları, muhteşem doğası ve yayla yaşamıyla ziyaretçilerine huzur dolu bir kaçış sunar.
                    </p>
                    <a href="#" class="btn">Devamını Oku</a>
                </div>
            </div>
        </div>
    </section>
    <!--! blogs section end  -->

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
            <a href="contact.php">İletişim</a>
            <a href="blogs.php" class="active">Blog</a>
        </div>

        <div class="credit">
            created by <span>Turizm Agent</span> | all rigths reserved
        </div>
    </section>
    <!--! footer section end  -->

    <script src="js/script.js"></script>
</body>

</html>
