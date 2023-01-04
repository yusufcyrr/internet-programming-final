<form action="giris.php" method="post">
  Kullanıcı Adı: <input type="text" name="kullanici_adi"><br>
  Parola: <input type="password" name="parola"><br>
  <input type="submit" value="Giriş">
</form>



<?php

// Veritabanına bağlan
$conn = mysqli_connect('localhost', 'root', 'root', 'nakliye');

// Giriş bilgilerini al
$kullanici_adi = $_POST["kullanici_adi"];
$parola = $_POST["parola"];

// Kullanıcıyı veritabanında arayın
$result = mysqli_query($conn, "SELECT * FROM kullanicilar WHERE kullanici_adi='$kullanici_adi' AND parola='$parola'");

// Kullanıcıyı doğrula
if (mysqli_num_rows($result) > 0) {
  // Giriş başarılı
  session_start();
  $_SESSION["giris"] = true;
  header("Location: yönetim paneli.php");
} else {
  // Giriş başarısız
  echo "Kullanıcı adı veya parola yanlış";
}

// Bağlantıyı kapat
mysqli_close($conn);

?>

