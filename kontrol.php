<?php
$gelenEmail = $_POST['email'] ?? '';
$gelenSifre = $_POST['sifre'] ?? '';

$dogruEmail = "b251210054@sakarya.edu.tr";
$dogruSifre = "b251210054";
$ogrenciNo  = "b251210054";

if (empty($gelenEmail) || empty($gelenSifre)) { // bilgileri burada kontrol ediyor
    header("Location: login.php?hata=bos");
    exit();
} 

if ($gelenEmail === $dogruEmail && $gelenSifre === $dogruSifre) {
    header("Location: login.php?durum=basari");
    exit();
} else {
    header("Location: login.php?hata=gecersiz");
    exit();
}
?>