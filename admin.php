<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ADMİN PANEL</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <!--! header section start  -->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="logo" />
        </a>
        <nav class="navbar">

            <h1> Hoş geldiniz </h1>
        </nav>

        <div class="buttons">
        </div>

    </header>
    <!--! header section end  -->

    <!--! contact section start  -->
    <section class="contact" id="contact">
        <h1 style="text-align: center; font-size:32px;">Müşteriler</h1><br>
        <table id="customers">

            <tr>
                <th>müşteriID</th>
                <th>Adı Soyadı</th>
                <th>Mail</th>
                <th>Telefon No</th>
                <th>Doğum Tarihi</th>

            </tr>

            <?php 
            include("baglanti.php");
            $sec="Select *From customers";
            $sonuc=$baglan->query($sec);
            if($sonuc->num_rows>0){
                
                while($cek=$sonuc->fetch_assoc()){
                    
                    echo"
                    
                    <tr>
                        <td>".$cek['customerID']."</td>
                        <td>".$cek['name']."</td>
                        <td>".$cek['eMail']."</td>
                        <td>".$cek['phoneNumber']."</td>
                        <td>".$cek['birthDate']."</td>
                    </tr>
                    ";
                }
            }

?>

        </table>
    </section>

    <section class="contact" id="contact">

        <br><br>
        <h1 style="text-align: center; font-size:32px;">Turlarımız</h1><br>

        <table id="customers">
            <th>Tur ID</th>
            <th>Tur Adı</th>
            <th>Başlangıç Tarihi</th>
            <th>Bitiş Tarihi</th>
            <th>Kota</th>
            <th>Fiyat</th>

            <?php 
            include("baglanti.php");
            $sec="Select *From tours";
            $sonuc=$baglan->query($sec);
            if($sonuc->num_rows>0){
                
                while($cek=$sonuc->fetch_assoc()){
                    
                    echo"
                    
                    <tr>
                        <td>".$cek['tourID']." </td>
                        <td>".$cek['name']." </td>
                        <td>".$cek['startDate']." </td>
                        <td>".$cek['finishDate']." </td>
                        <td>".$cek['quota']."</td>
                        <td>".$cek['price']." dolar</td>
                    </tr>
                    ";
                }
            }

?>

        </table>
    </section>

    <section class="contact" id="contact">
        <h1 style="text-align: center; font-size:32px;">Yorumlar</h1><br>
        <table id="customers">

            <th>commentID</th>
            <th>Yorum Metni</th>
            <th>Tur Adı</th>

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
        <tr>
         <td>".$cek['commentID']."</td>
         <td>".$cek['comment']."</td>
         <td>".$tourName."</td>
        </tr>
        ";
    }
}

?>




        </table>
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


        <div class="credit">
            created by <span>turzim agent</span> | all rigths reserved
        </div>
    </section>
    <!--! footer section end  -->

    <script src="js/script.js"></script>
</body>

</html>
