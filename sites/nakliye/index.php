<!DOCTYPE html>
<html>
<head>
  <title>Nakliye</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="navbar">
    <a href="#">Anasayfa</a>
    <a href="#">Hizmetler</a>
    <a href="#">İletişim</a>
    <a href="#" class="logo"><img src="/images/logo.png" alt="Logo"></a>
  </div>
  <div class="header">
    <h1>Nakliye</h1>
    <p>En hızlı ve güvenilir nakliye hizmetleri</p>
  </div>
  <div class="section services">
    <h2>Hizmetler</h2>
    <div class="card">
      <img src="/kamyon.jpg" class="card-img-top" alt="Kamyon">
      <div class="card-body">
        <h4 class="card-title">Kamyon</h4>
        <p class="card-text">Büyük ölçekli nakliyeler için idealdir.</p>
        <a href="#" class="btn btn-primary">Daha fazla bilgi</a>
      </div>
    </div>
    <div class="card">
      <img src="/kargo.jpg" class="card-img-top" alt="Kargo">
      <div class="card-body">
        <h4 class="card-title">Kargo</h4>
        <p class="card-text">Hızlı ve güvenilir kargo hizmetleri</p>
        <a href="#" class="btn btn-primary">Daha fazla bilgi</a>
      </div>
    </div>
    <div class="card">
      <img src="/hava.jpg" class="card-img-top" alt="Hava">
      <div class="card-body">
        <h4 class="card-title">Hava</h4>
        <p class="card-text">Hızlı hava nakliyeleri</p>
        <a href="#" class="btn btn-primary">Daha fazla bilgi</a>
      </div>
    </div>
  </div>
  <div class="section contact">
  <h2>İletişim</h2>
  <form action="#" method="post">
    <label for="name">Ad:</label><br>
    <input type="text" id="name" name="name" placeholder="Adınız"><br>
    <label for="email">E-posta:</label><br>
    <input type="email" id="email" name="email" placeholder="E-posta adresiniz"><br>
    <label for="message">Mesaj:</label><br>
    <textarea id="message" name="message" placeholder="Mesajınızı yazın"></textarea><br>
    <input type="submit" value="Gönder">
  </form> 
</div>