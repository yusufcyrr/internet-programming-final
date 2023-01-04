<?php

// Veritabanına bağlan
$conn = mysqli_connect('localhost', 'root', 'root', 'nakliye');

// Öğeleri ekle
$sql = "INSERT INTO nakliye_urunlerr (ad, aciklama, fiyat) VALUES ('Ürün 1', 'Açıklama 1', 100.00)";
mysqli_query($conn, $sql);

$sql = "INSERT INTO nakliye_urunlerr (ad, aciklama, fiyat) VALUES ('Ürün 2', 'Açıklama 2', 200.00)";
mysqli_query($conn, $sql);

// Bağlantıyı kapat
mysqli_close($conn);

?>
<?php

// Veritabanına bağlan
$conn = mysqli_connect('localhost', 'root', 'root', 'nakliye');

// Öğeleri görüntüle
$result = mysqli_query($conn, "SELECT * FROM nakliye_urunlerr");

if (mysqli_num_rows($result) > 0) {
  // Öğeleri görüntüle
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Ad: " . $row["ad"]. " - Açıklama: " . $row["aciklama"]. " - Fiyat: " . $row["fiyat"]. "<br>";
  }
} else {
  echo "Veri yok";
}

// Bağlantıyı kapat
mysqli_close($conn);

?>
<?php

// Veritabanına bağlan
$conn = mysqli_connect('localhost', 'root', 'root', 'nakliye');

// Öğeyi güncelle
$sql = "UPDATE nakliye_urunlerr SET ad='Ürün 1 (Güncellendi)', aciklama='Açıklama 1 (Güncellendi)', fiyat=150.00 WHERE id=1";
mysqli_query($conn, $sql);

// Öğeyi sil
$sql = "DELETE FROM nakliye_urunlerr WHERE id=2";
mysqli_query($conn, $sql);

// Bağlantıyı kapat
mysqli_close($conn);

?>


