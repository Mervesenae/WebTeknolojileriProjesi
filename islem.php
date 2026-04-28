<?php
$gelen_kullanici = $_POST['kullanici_adi'];
$gelen_sifre = $_POST['sifre'];

$dogru_kullanici = "admin";
$dogru_sifre = "123456";

if ($gelen_kullanici == $dogru_kullanici && $gelen_sifre == $dogru_sifre)
    {
    echo "<h1>Giriş Başarılı! Hoş geldin, " . $gelen_kullanici . "</h1>";
    }
    else {
    echo "<h1>Hata: Kullanıcı adı veya şifre yanlış!</h1>";
    echo "<a href='login.html'>Tekrar dene</a>";
}
?>