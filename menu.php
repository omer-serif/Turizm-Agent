<?php

include("baglanti.php");
session_start();

if(isset($_POST["Maldivler"]))
{
    $ID=0;
    $price=199;
    $Customers_customID=$_SESSION["customerID"];
    $tursec="SELECT tourID FROM tours WHERE name = 'Maldivler';";
    $calistir=mysqli_query($baglan,$tursec);
    $kayitsayisi= mysqli_num_rows($calistir);
    if($kayitsayisi>0){
        $ilgilikayit=mysqli_fetch_assoc($calistir); 
    }
    $Tours_tourID=$ilgilikayit["tourID"];
    
    $insertRezervation="INSERT INTO customers_has_tours(rezervationID, Customers_customerID, Tours_tourID, totalPrice) VALUES ('".$ID."','".$Customers_customID."','".$Tours_tourID."','".$price."')";
    
    if($baglan->query($insertRezervation)===TRUE)
    {    
        echo "yeni kayıt başarıyla oluşturuldu";
    }
    else 
    {
        echo "Hata: " . $insertRezervation . "<br>" . $baglan->error;
    }
}

if(isset($_POST["Cinque_Terre"]))
{
    $ID2=0;
    $price2=159;
    $Customers_customID2=$_SESSION["customerID"];
    $tursec="SELECT tourID FROM tours WHERE name = 'Cinque Terre';";
    $calistir=mysqli_query($baglan,$tursec);
    $kayitsayisi= mysqli_num_rows($calistir);
    if($kayitsayisi>0){
        $ilgilikayit=mysqli_fetch_assoc($calistir); 
    }
    $Tours_tourID=$ilgilikayit["tourID"];
    
    $insertRezervation="INSERT INTO customers_has_tours(rezervationID, Customers_customerID, Tours_tourID, totalPrice) VALUES ('".$ID2."','".$Customers_customID2."','".$Tours_tourID."','".$price2."')";
    
    if($baglan->query($insertRezervation)===TRUE)
    {    
        echo "yeni kayıt başarıyla oluşturuldu";
    }
    else 
    {
        echo "Hata: " . $insertRezervation . "<br>" . $baglan->error;
    }
}



include("baglanti.php");
if(isset($_POST["Machu_Picchu"]))
{
    $ID=0;
    $price=159;
    $Customers_customID=$_SESSION["customerID"];
    $tursec="SELECT tourID FROM tours WHERE name = 'Machu Picchu';";
    $calistir=mysqli_query($baglan,$tursec);
    $kayitsayisi= mysqli_num_rows($calistir);
    if($kayitsayisi>0){
        $ilgilikayit=mysqli_fetch_assoc($calistir); 
    }
    $Tours_tourID=$ilgilikayit["tourID"];
    
    $insertRezervation="INSERT INTO customers_has_tours(rezervationID, Customers_customerID, Tours_tourID, totalPrice) VALUES ('".$ID."','".$Customers_customID."','".$Tours_tourID."','".$price."')";
    
    if($baglan->query($insertRezervation)===TRUE)
    {    
        echo "yeni kayıt başarıyla oluşturuldu";
    }
    else 
    {
        echo "Hata: " . $insertRezervation . "<br>" . $baglan->error;
    }
}


if(isset($_POST["Gize_Piramitleri"]))
{
    $ID=0;
    $price=159;
    $Customers_customID=$_SESSION["customerID"];
    $tursec="SELECT tourID FROM tours WHERE name = 'Gize Piramitleri';";
    $calistir=mysqli_query($baglan,$tursec);
    $kayitsayisi= mysqli_num_rows($calistir);
    if($kayitsayisi>0){
        $ilgilikayit=mysqli_fetch_assoc($calistir); 
    }
    $Tours_tourID=$ilgilikayit["tourID"];
    
    $insertRezervation="INSERT INTO customers_has_tours(rezervationID, Customers_customerID, Tours_tourID, totalPrice) VALUES ('".$ID."','".$Customers_customID."','".$Tours_tourID."','".$price."')";
    
    if($baglan->query($insertRezervation)===TRUE)
    {    
        echo "yeni kayıt başarıyla oluşturuldu";
    }
    else 
    {
        echo "Hata: " . $insertRezervation . "<br>" . $baglan->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Yurt Dışı Turlar</title>
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
            <a href="about.php">Hakkımızda</a>
            <a href="menu.php" class="active">Yurt Dışı Turlar</a>
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

    </header>
    <!--! header section end  -->

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
                    <form action="menu.php" method="post">

                        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <a href="comment.php" style="font-size:20px;"> Yorum Yap </a>
                        <br><br>
                        <input type="submit" class="btn" name="Maldivler" value="Satın Al" />
                        <?php else: ?>
                        <a href="giris.php" style="font-size:22px;">Satın almadan önce giriş yapınız.</a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box-head">
                    <img src="images/menu-2.jpg" alt="menu" />
                    <span class="menu-category"></span>
                    <h3>Cinque Terre</h3>
                    <div class="price">$159.99 <span>179.99</span></div>
                </div>
                <form action="menu.php" method="post">
                    <br><br>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <a href="comment.php" style="font-size:20px;"> Yorum Yap </a>
                    <br><br>
                    <input type="submit" class="btn" name="Cinque_Terre" value="Satın Al" />
                    <?php else: ?>
                    <a href="giris.php" style="font-size:22px;">Satın almadan önce giriş yapınız.</a>
                    <?php endif; ?>
                </form>
            </div>
            <div class="box">
                <div class="box-head">
                    <img src="images/menu-3.png" alt="menu" />
                    <span class="menu-category"></span>
                    <h3>Machu Picchu</h3>
                    <div class="price">$179.99 <span> 199.99</span></div>
                </div>
                <form action="menu.php" method="post">

                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <a href="comment.php" style="font-size:20px;"> Yorum Yap </a>
                    <br><br>
                    <input type="submit" class="btn" name="Machu_Picchu" value="Satın Al" />
                    <?php else: ?>
                    <a href="giris.php" style="font-size:22px;">Satın almadan önce giriş yapınız.</a>
                    <?php endif; ?>
                </form>
            </div>
            <div class="box">
                <div class="box-head">
                    <img src="images/menu-4.jpg" alt="menu" />
                    <span class="menu-category"></span>
                    <h3>Gize Piramitleri</h3>
                    <div class="price">$129.99 <span>$149.99</span></div>
                </div>
                <form action="menu.php" method="post">
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <a href="comment.php" style="font-size:20px;"> Yorum Yap </a>
                    <br><br>
                    <input type="submit" class="btn" name="Gize_Piramitleri" value="Satın Al" />
                    <?php else: ?>
                    <a href="giris.php" style="font-size:22px;">Satın almadan önce giriş yapınız.</a>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </section>
    <!--! menu section end  -->

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
            <a href="menu.php"  class="active">Yurt Dışı Turlar</a>
            <a href="products.php">Yurt İçi Turlar</a>
            <a href="reviev.php">Yorumlar</a>
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
