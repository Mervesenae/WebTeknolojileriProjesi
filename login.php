<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-login">
    <div class="login-container">
        <div class="login-box">

            <?php if (!isset($_GET['durum']) || $_GET['durum'] != 'basari'): ?>
            <h2>Hesabınıza Giriş Yapın</h2>

            <!-- Hata Mesajı Paneli -->
            <div id="error-panel" class="error-msg" style="display: <?php echo (isset($_GET['hata'])) ? 'block' : 'none'; ?>;">
                <span id="js-error-msg">
                    <?php
                    if(isset($_GET['hata'])){
                    if($_GET['hata'] == "gecersiz") echo "Hatalı kullanıcı adı veya şifre!";
                    if($_GET['hata'] == "bos") echo "Lütfen alanları doldurun!";
                    }
                    ?>
                </span>
            </div>

            <form action="kontrol.php" method="POST" onsubmit="return validateForm()">
                <div class="input-group">
                    <label>Öğrenci Maili:</label><br>
                    <input type="email" id="email" name="email" required placeholder="b251210054@sakarya.edu.tr"><br><br>
                </div>

                <div class="input-group">
                    <label>Şifre:</label><br>
                    <input type="password" id="sifre" name="sifre" required placeholder="b251210054"><br><br>
                </div>

                <button type="submit">Giriş Yap</button>
            </form>
            <?php endif; ?>

            <!-- Giriş Başarılı Mesajı -->
            <?php if (isset($_GET['durum']) && $_GET['durum'] == 'basari'): ?>
            <div class="success-msg">
                <h2>Hoşgeldiniz b251210054</h2><br>
                <span>Hakkımda sayfasına yönlendiriliyorsunuz...</span>
            </div>

            <script>
                setTimeout(function () {
                    window.location.href = "index.html"; // Yönlendirme
                }, 2000);
            </script>
            <?php endif; ?>
        </div>
    </div>

    <!-- JavaScript Kontrolleri -->
    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var sifre = document.getElementById("sifre").value;
            var errorPanel = document.getElementById("error-panel");
            var jsErrorMsg = document.getElementById("js-error-msg");

            // 1. Kontrol: Boş alan kontrolü
            if (email.trim() == "" || sifre.trim() == "") {
                errorPanel.style.display = "block";
                jsErrorMsg.innerText = "Lütfen tüm alanları doldurunuz.";
                return false;
            }

            // 2. Kontrol: Mail formatı kontrolü
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                errorPanel.style.display = "block";
                jsErrorMsg.innerText = "Lütfen geçerli bir e-posta formatı giriniz.";
                return false;
            }

            return true;
        }
    </script>
</body>
</html>