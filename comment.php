<?php

session_start();


include("baglanti.php");

if(isset($_POST["comment"])){
if(isset($_POST["tur"], $_POST["yorum"]))
{
    $id=0;
    $tourID=$_POST["tur"];
    $comment=$_POST["yorum"];
    
    
    $ekle="INSERT INTO comments(comment, Tours_tourID) VALUES ('".$comment."' , '".$tourID."')";
    
    if($baglan->query($ekle)===TRUE)
    {    
        echo "yeni kayıt başarıyla oluşturuldu";
    }
    else 
    {
        echo "Hata: " . $ekle . "<br>" . $baglan->error;
    }
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
            <a href="index.php">Ana Sayfa</a>
            <a href="about.php">Hakkımızda</a>
            <a href="menu.php">Yurt Dışı Turlar</a>
            <a href="products.php">Yurt İçi Turlar</a>
            <a href="reviev.php">Yorumlar</a>
            <a href="contact.php">İletişim</a>
            <a href="blogs.php">Bloglar</a>
        </nav>

        <div class="buttons">
            <button id="search-btn">
                <i class="fas fa-search"></i>
            </button>
            <button id="cart-btn">
                <i class="fas fa-plane"></i>
            </button>
            <button id="menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    <!--! header section end  -->



    <section class="contact" id="contact">
        <br>
        <div class="row">
            <form action="comment.php" method="post">
                <h3>Yorum Yap</h3>
                <label style="font-size:24px; color:white;">Tur Seçin:</label><br>
                <select name="tur">
                    <option value="1">Maldivler</option>
                    <option value="2">Cinque Terre</option>
                    <option value="3">Machu Picchu</option>
                    <option value="4">Gize Piramitleri</option>
                    <option value="5">Eski Mardin</option>
                    <option value="6">Ölü Deniz</option>
                    <option value="7">Kapadokya</option>

                </select><br><br>
                <div class="inputBox">
                    <input type="text" name="yorum" placeholder="yorumunuz...">
                </div>
                <input type="submit" name="comment" class="btn" value="Yorum Yap" />
            </form>
        </div>
    </section>


    <!--! footer section start  -->
    <section class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>


        <div class="credit">
            created by <span>Turizm Agent</span> | all rigths reserved
        </div>
    </section>
    <!--! footer section end  -->

    <script src="js/script.js"></script>
</body>

</html>
