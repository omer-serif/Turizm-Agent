<?php

include("baglanti.php");
if(isset( $_POST["email"], $_POST["password"]))
{
    $email = $_POST['email'];
    $password = $_POST['password']; 
    
    $secim = "SELECT *FROM customers WHERE email ='$email'";
    $calistir=mysqli_query($baglan,$secim);
    $kayitsayisi= mysqli_num_rows($calistir);
    
    if($kayitsayisi>0){
        
        $ilgilikayit=mysqli_fetch_assoc($calistir);
        $hashlişifre=$ilgilikayit["password"];
        
        if(password_verify($password,$hashlişifre))
        {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION["email"]=$ilgilikayit["email"];
            $_SESSION["name"]=$ilgilikayit["name"];
            $_SESSION["customerID"]=$ilgilikayit["customerID"];
            header("location:index.php");
        }
        else{
            echo "parola yanlış";
        }
    }
    else{
        echo "kullanıcı adı yanlış";
    }
        
}

if(isset($_POST["Mname"],$_POST["Mpassword"]))
{
    $Mname=$_POST["Mname"];
    $Mpassword=$_POST["Mpassword"];
    $secim = "SELECT *FROM managers WHERE name ='$Mname'";
    $calistir=mysqli_query($baglan,$secim);
    $kayitsayisi= mysqli_num_rows($calistir);
    if($kayitsayisi>0){
        $ilgilikayit=mysqli_fetch_assoc($calistir);
        $Psecim="SELECT *FROM managers WHERE password ='$Mpassword'";
        $Pcalistir=mysqli_query($baglan,$Psecim);
        $Pkayitsayisi=mysqli_num_rows($Pcalistir);
        
        if($Pkayitsayisi>0){
            session_start();
            $_SESSION["name"]=$ilgilikayit["name"];
            $_SESSION["managerID"]=$ilgilikayit["managerID"];
            header("location:admin.php");
            
        }
        else{echo "admin şifresi hatalı";}
        
        
    }
    else{echo "admin kullanıcı adı hatalı";}
}


?>

<?php

session_start();


include("baglanti.php");

if(isset($_POST["kaydet"])){
if(isset($_POST["isim"], $_POST["email"], $_POST["tel"], $_POST["sifre"], $_POST["date"]))
{
    $id=0;
    $adSoyad=$_POST["isim"];
    $email=$_POST["email"];
    $tel=$_POST["tel"];
    $sifre=password_hash($_POST["sifre"],PASSWORD_DEFAULT);
    $dogumTarihi=$_POST["date"];

    $ekle="INSERT INTO customers(customerID,name, eMail, phoneNumber, birthDate, password) VALUES ('".$id."' , '".$adSoyad."' , '".$email."' , '".$tel."' , '".$dogumTarihi."' , '".$sifre."')";
    
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
    <title>Giriş</title>
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
        <div class="row">
            <form action="giris.php" method="post">
                <h3>Kullanıcı Girişi</h3>

                <div class="inputBox">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="email" />
                </div>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="password" name="password" placeholder="şifre" />
                </div>

                <input type="submit" class="btn" value="Giriş Yap" />
            </form>
        </div>
    </section>


    <section class="contact" id="contact">
        <br>
        <div class="row">
            <form action="giris.php" method="post">
                <h3>Kayıt Ol</h3>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="isim" placeholder="isim" />
                </div>
                <div class="inputBox">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="email" />
                </div>
                <div class="inputBox">
                    <i class="fas fa-phone"></i>
                    <input type="number" name="tel" placeholder="telefon numarası" />
                </div>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="sifre" placeholder="şifre">
                </div>
                <div class="inputBox">
                    <input type="date" name="date" placeholder="doğum tarihi">
                </div>
                <input type="submit" name="kaydet" class="btn" value="Kayıt Ol" />
            </form>
        </div>
    </section>



    <section class="contact" id="contact">
        <div class="row">
            <form action="giris.php" method="post">
                <h3>Admin Girişi</h3>

                <div class="inputBox">

                    <input type="text" name="Mname" placeholder="kullanıcı adı" />
                </div>
                <div class="inputBox">

                    <input type="password" name="Mpassword" placeholder="şifre" />
                </div>

                <input type="submit" class="btn" value="Giriş Yap" />
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
