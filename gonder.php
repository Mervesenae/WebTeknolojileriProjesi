<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email   = $_POST['email'];
    $phone  = $_POST['phone'];
    $subject  = $_POST['subject'];
    
    $gender = isset($_POST['gender']) ? $_POST['gender'] : 'Seçilmedi';
    $kvkk    = isset($_POST['kvkk']) ? 'Onaylandı' : 'Onaylanmadı';

    echo "<h2>Form Başarıyla Gönderildi!</h2>";
    echo "<b>Ad Soyad:</b> " . $fullname . "<br>";
    echo "<b>E-mail:</b> " . $email . "<br>";
    echo "<b>Telefon:</b> " . $phone . "<br>";
    echo "<b>Konu:</b> " . $subject . "<br>";
    echo "<b>Cinsiyet:</b> " . $gender . "<br>";
    echo "<b>Veri Onayı:</b> " . $kvkk . "<br>";

} else {
    echo "Lütfen formu doldurarak gelin.";
}
?>