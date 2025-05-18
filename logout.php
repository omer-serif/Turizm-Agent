<?php
session_start();
session_unset();     // Tüm oturum değişkenlerini sil
session_destroy();   // Oturumu tamamen yok et

header("Location: index.php"); // Ana sayfaya yönlendir
exit;
?>
