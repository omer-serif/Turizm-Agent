<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="2989";
$vt_adi="turizmagent";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan){
    
    die("veritabanına bağlanılamadı!".mysqli_connect_error());
}else {
}

?>