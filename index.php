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
    <title>Turizm Acentesi</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <!--! header section start  -->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="logo" />
        </a>
        <nav class="navbar">
            <a href="index.php" class="active">Anasayfa</a>
            <a href="about.php">Hakkımızda</a>
            <a href="menu.php">Yurt Dışı Turlar</a>
            <a href="products.php">Yurt İçi Turlar</a>
            <a href="reviev.php">Yorumlar</a>
            <a href="contact.php">İletişim</a>
            <a href="blogs.php">Blog</a>
        </nav>

        <div>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <a href="logout.php" style="font-size: 22px;">Çıkış Yap</a>
            <?php else: ?>
            <a href="giris.php" style="font-size:22px;">Giriş Yap</a>
            <?php endif; ?>
        </div>
    </header>
    <!--! header section end  -->
    
    

    <!--! home section start  -->
    <section class="home" id="home">
        <div class="content">
            <h3>Her yere hızlı ve güvenli seyahat</h3>
            <p>
                Machu Picchu, Peru'nun And Dağları'nda bulunan antik bir şehirdir. İnka İmparatorluğu döneminde inşa edilmiş olan bu muhteşem yapı, dünya çapında manzarası ve tarihi önemi ile tanınır. Her yıl binlerce turist, bu benzersiz antik yerin büyüleyici atmosferini deneyimlemek için ziyaret ediyor.
            </p>
        </div>
    </section>
    <!--! home section end  -->

    <!--! menu section start  -->
    <section class="menu" id="menu">
        <h1 class="heading"><span>Popüler</span> Turlar</h1>
        <div class="box-container">
            <div class="box">
                <div class="box-head">
                    <img src="images/menu-1.png" alt="menu" />
                    <span class="menu-category"></span>
                    <h3>Maldivler</h3>
                    <div class="price">$199.99 <span>219.99</span></div>
                </div>
                <div class="box-bottom">
                    <a href="menu.php" class="btn">Daha Fazla Bilgi</a>
                </div>
            </div>
            <div class="box">
                <div class="box-head">
                    <img src="images/menu-2.jpg" alt="menu" />
                    <span class="menu-category"></span>
                    <h3>Cinque Terre</h3>
                    <div class="price">$159.99 <span>179.99</span></div>
                </div>
                <div class="box-bottom">
                    <a href="menu.php" class="btn">Daha Fazla Bilgi</a>
                </div>
            </div>
            <div class="box">
                <div class="box-head">
                    <img src="images/menu-3.png" alt="menu" />
                    <span class="menu-category"></span>
                    <div class="price">$179.99 <span> 199.99</span></div>
                </div>
                <div class="box-bottom">
                    <a href="menu.php" class="btn">Daha Fazla Bilgi</a>
                </div>
            </div>
            <div class="box">
                <div class="box-head">
                    <img src="images/menu-4.jpg" alt="menu" />
                    <span class="menu-category"></span>
                    <h3>Gize Piramitleri</h3>
                    <div class="price">$129.99 <span>$149.99</span></div>
                </div>
                <div class="box-bottom">
                    <a href="menu.php" class="btn">Daha Fazla Bilgi</a>
                </div>
            </div>
        </div>
    </section>
    <!--! menu section end  -->

    <!--! products section start  -->
    <section class="products" id="products">
        <h1 class="heading"><span>Yurt İçİ</span> Turlar</h1>
        <div class="box-container">
            <div class="box">
                <div class="box-head">
                    <span class="title"></span>
                    <a href="#" class="name">Eski Mardin</a>
                </div>
                <div class="image">
                    <img src="images/product-1.jpg" alt="" />
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">$59.99</b>
                        <span class="amount">Yetişkin / Çocuk $39.99</span>
                    </div>
                    <div class="product-btn">
                        <div class="box-bottom">
                            <a href="products.php" class="btn">Daha Fazla Bilgi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-head">
                    <span class="title"></span>
                    <a href="#" class="name">Ölü Deniz</a>
                </div>
                <div class="image">
                    <img src="images/product-2.jpg" alt="" />
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">$69.99</b>
                        <span class="amount">Yetişkin / Çocuk $49.99</span>
                    </div>
                    <div class="product-btn">
                        <div class="box-bottom">
                            <a href="products.php" class="btn">Daha Fazla Bilgi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box dark-bg">
                <div class="box-head">
                    <span class="title"></span>
                    <a href="#" class="name">Kapadokya</a>
                </div>
                <div class="image">
                    <img src="images/dark-product.jpg" alt="" />
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">$69.99</b>
                        <span class="amount">Yetişkin / Çocuk $49.99</span>
                    </div>
                    <div class="product-btn">
                        <div class="box-bottom">
                            <a href="products.php" class="btn">Daha Fazla Bilgi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--! products section end  -->

    <!--! about section start  -->
    <section class="about" id="about">
        <h1 class="heading">BİZ <span>KİMİZ</span></h1>
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

    <!--! review section start  -->
    <section class="review" id="review">
        <h1 class="heading">MÜŞTERİ <span>YORUMLARI</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/quote.png" alt="quote" />
                <p>
                    "Machu Picchu'ya yaptığım ziyaret beni büyüledi! Bu antik şehir, gerçekten görülmeye değer bir yer. Manzarası nefes kesici ve tarihi atmosferi sizi içine çekiyor. Rehberimiz çok bilgiliydi ve gezimiz boyunca bize harika bir deneyim sundu. Kesinlikle tavsiye ederim!"
                </p>
                <img src="images/avatar-1.jpg" alt="avatar" class="user" />
                <h3>Adam Brown</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="box">
                <img src="images/quote.png" alt="quote" />
                <p>
                    "Maldivler'de geçirdiğim tatil benzersizdi! Bu tropikal cennetteki berrak sular ve beyaz kumlar gerçekten hayranlık uyandırıcıydı. Konakladığımız resort mükemmeldi; hizmetleri ve konforuyla beklentilerimizi aştı. Şnorkelle dalma deneyimi unutulmazdı, renkli balıklar ve mercan resifleri suda bir dünya yarattı. Buraya kesinlikle tekrar gelmek istiyorum!"
                </p>
                <img src="images/avatar-2.png" alt="avatar" class="user" />
                <h3>John Doe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="box">
                <img src="images/quote.png" alt="quote" />
                <p>
                    "Eski Mardin'in tarih ve kültür dolu sokakları beni büyüledi! Bu antik şehir, kendine özgü mimarisi ve tarihi dokusuyla gerçek bir hazine. Daracık taş sokaklarda dolaşmak, tarihi yapıları ve geleneksel evleri keşfetmek inanılmaz bir deneyimdi. Yerel lezzetlerin tadına bakmak ve yöresel el işi ürünleri görmek unutulmazdı. Eski Mardin, kendinizi geçmişte bir zaman yolculuğunda hissettiren bir yer ve kesinlikle görülmesi gereken bir destinasyon!"
                </p>
                <img src="images/avatar-3.png" alt="avatar" class="user" />
                <h3>Lisa Arambula</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </section>
    <!--! review section end  -->
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
            <a href="index.php" class="active">Anasayfa</a>
            <a href="about.php">Hakkımızda</a>
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
