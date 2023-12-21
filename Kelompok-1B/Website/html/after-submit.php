<?php
$lastInsertedId = isset($_GET['lastInsertedId']) ? $_GET['lastInsertedId'] : "";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Survey Pembelajaran Via Daring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/after-submit.css" />
    <script src="../../index.js"></script>
  </head>

  <body>

    <header>
      <div class="navbar">
          <div class="logo"><a href="#"> Survey Pembelajaran Via Daring</a></div>
          <ul class="links">
              <li><a href="index.html">Home</a></li>
              <li><a href="about">About</a></li>
              <li><a href="https://wa.me/6281230928021?">Contact</a></li>
          </ul>
          <div class="toggle_btn">
              <i class="fa-solid fa-bars"></i>
          </div>
      </div>

      <div class="dropdown_menu">
          <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="https://wa.me/6281230928021?">Contact</a></li>
          </ul>
      </div>

    <div class="container">
      <header>
        <h1 id="title">SURVEY PEMBELAJARAN VIA DARING</h1>
        <p id="description">Terimakasih telah berpartisipasi!</p>
      </header>
      <div id="wrapper">
        <p>
          Terima kasih telah menyempatkan waktu untuk mengisi survey kami.
          Kontribusi Anda sangat berarti bagi kami. <br /><br />
          Kami akan segera mengevaluasi tanggapan Anda dengan cermat. Hasil dari
          survey ini akan membantu kami meningkatkan layanan kami dan memberikan
          pengalaman yang lebih baik bagi pengguna kami.
        </p>
        <div style="display:flex; justify-content:space-between">
          <a href="lihat-hasil.php?lastInsertedId=<?= $lastInsertedId ?>&update">edit jawaban</a>
          <a href="lihat-hasil.php?lastInsertedId=<?= $lastInsertedId ?>">Lihat Hasil Jawaban</a>
        </div>
      </div>
    </div>

    <script>
      navbaranimate();
    </script>

  </body>
</html>
