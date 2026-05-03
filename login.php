<!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">
<div class="login-container"> <!-- daha düzgün olması için -->
<div class="login-box">
    <h2>Hesabınıza Giriş Yapın</h2>

    <?php if (isset($_GET['hata'])): ?>
    <div class="error-msg">
    <?php
    if($_GET['hata'] == "gecersiz") echo "Hatalı kullanıcı adı veya şifre!";
            if($_GET['hata'] == "bos") echo "Lütfen alanları doldurun!";
        ?>
    </div>
    <?php endif; ?>

    <form action="kontrol.php" method="POST">
    <div class ="input-group">
        <label>Öğrenci Maili:</label><br>
        <input type="email" name="email" required placeholder="b251210054@sakarya.edu.tr"><br><br>
        </div>

        <div class="input-group">
        <label>Şifre (Öğrenci No):</label><br>
        <input type="password" name="sifre" required placeholder="b251210054"><br><br>
        </div>

        <button type="submit">Giriş Yap</button>
        </form>

        <!-- Giriş mesajı -->
        <?php if (isset($_GET['durum']) && $_GET['durum'] == 'basari'): ?>
    <div class="success-msg">
        Hoşgeldiniz <?php echo "b251210054"; ?> <br>
        <span>Hakkımda sayfasına yönlendiriliyorsunuz...</span>
    </div>
    
    <!-- Yönlendirme için -->
    <script>
        setTimeout(function() {
            window.location.href = "index.html"; // Gitmek istediğim sayfa
        }, 2000);
    </script>
        <style> /* Giriş başarılı olduğunda formu veya butonu gizlemek için */
            form { display: none; } 
            h2 { display: none; }
        </style>
    <?php endif; ?>
    </div>
    </div>
</body>
</html>