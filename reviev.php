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
    <title>Yorumlar</title>
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
            <a href="reviev.php" class="active">Yorumlar</a>
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

        <div class="search-form">
            <input type="text" class="search-input" id="search-box" placeholder="search here" />
            <i class="fas fa-search"></i>
        </div>
    </header>
    <!--! header section end  -->

    <!--! review section start  -->
    <section class="review" id="review">
        <h1 class="heading">MÜŞTERİ <span>YORUMLARI</span></h1>
        <div class="box-container">
            <?php
include("baglanti.php");

$sec="Select *From comments";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    
     while($cek=$sonuc->fetch_assoc()){
        $turN="SELECT name FROM tours WHERE tourID=".$cek['Tours_tourID'];
        $sonucN=$baglan->query($turN);
         if($sonuc->num_rows>0){
             $tour=$sonucN->fetch_assoc();
             $tourName=$tour['name'];
         }
        
        echo"
         <div class='box'>
         <img src='images/quote.png' alt='quote' />
                <p>".$cek['comment']."</p>  
                <h3> Tur Adı: ".$tourName."</h3>
         </div>
        ";
    }
}

?>
        </div>
    </section>
    <!--! review section end  -->

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
            <a href="menu.php"  >Yurt Dışı Turlar</a>
            <a href="products.php" >Yurt İçi Turlar</a>
            <a href="reviev.php" class="active">Yorumlar</a>
            <a href="contact.php" >İletişim</a>
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
