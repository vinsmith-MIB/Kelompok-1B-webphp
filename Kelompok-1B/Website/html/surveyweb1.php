<?php
include('koneksi.php');
$conn = pdo_connect_mysql();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = isset($_POST['nama']) ? $_POST['nama'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $umur = isset($_POST['umur']) ? $_POST['umur'] : null;
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : null;

    // Menangani efektivitas
    $efektivitas = isset($_POST['efektivitas']) ? $_POST['efektivitas'] : null;

    // Menangani opini
    $opini = isset($_POST['opini']) ? $_POST['opini'] : null;
    $alasan_opini = isset($_POST['alasan_opini']) ? $_POST['alasan_opini'] : null;

    // Menangani kenyamanan
    $kenyamanan = isset($_POST['kenyamanan']) ? $_POST['kenyamanan'] : [];
    $kenyamanan_imploded = implode(', ', $kenyamanan);
    $lainnya_kenyamanan = isset($_POST['lainnya_kenyamanan']) ? $_POST['lainnya_kenyamanan'] : null;
    
    // Menangani dukungan dosen
    $dukungan_dosen = isset($_POST['dukungan_dosen']) ? $_POST['dukungan_dosen'] : null;

    // Menangani kesulitan teknis
    $kesulitan_teknis = isset($_POST['kesulitan-teknis']) ? $_POST['kesulitan-teknis'] : null;
    $penjelasanKesulitan = isset($_POST['penjelasanKesulitan']) ? $_POST['penjelasanKesulitan'] : null;

    // Menangani saran peningkatan
    $saranPeningkatan = isset($_POST['saranPeningkatan']) ? $_POST['saranPeningkatan'] : null;

    // Menangani preferensi pembelajaran
    $preferensi_pembelajaran = isset($_POST['preferensi-pembelajaran']) ? $_POST['preferensi-pembelajaran'] : null;
    $alasanPreferensi = isset($_POST['alasanPreferensi']) ? $_POST['alasanPreferensi'] : null;

    // Query SQL untuk menyimpan data ke dalam tabel responden
    $sql = "INSERT INTO responden
            (nama, email, umur, jenis_kelamin, efektivitas, opini, alasan_opini, 
            kenyamanan, lainnya_kenyamanan, dukungan_dosen, kesulitan_teknis, penjelasan_kesulitan,
            saran_peningkatan, preferensi_pembelajaran, alasan_preferensi)
            VALUES 
            (:nama, :email, :umur, :jenis_kelamin, :efektivitas, :opini, :alasan_opini, 
            :kenyamanan, :lainnya_kenyamanan, :dukungan_dosen, :kesulitan_teknis, :penjelasanKesulitan,
            :saranPeningkatan, :preferensi_pembelajaran, :alasanPreferensi)";

    $stmt = $conn->prepare($sql);

    // Binding parameter
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':umur', $umur);
    $stmt->bindParam(':jenis_kelamin', $jenis_kelamin);
    $stmt->bindParam(':efektivitas', $efektivitas);
    $stmt->bindParam(':opini', $opini);
    $stmt->bindParam(':alasan_opini', $alasan_opini);
    $stmt->bindParam(':kenyamanan', $kenyamanan_imploded);
    $stmt->bindParam(':lainnya_kenyamanan', $lainnya_kenyamanan);
    $stmt->bindParam(':dukungan_dosen', $dukungan_dosen);
    $stmt->bindParam(':kesulitan_teknis', $kesulitan_teknis);
    $stmt->bindParam(':penjelasanKesulitan', $penjelasanKesulitan);
    $stmt->bindParam(':saranPeningkatan', $saranPeningkatan);
    $stmt->bindParam(':preferensi_pembelajaran', $preferensi_pembelajaran);
    $stmt->bindParam(':alasanPreferensi', $alasanPreferensi);

    try {
        $stmt->execute();
        $lastInsertedId = $conn->lastInsertId();
        header("Location: after-submit.php?lastInsertedId=$lastInsertedId");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Survey Pembelajaran Via Daring</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/surveyweb.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="../../index.js"></script>
</head>

<body>
  <header>
    <div class="navbar">
      <div class="logo"><a href="#"> Survey Pembelajaran Via Daring</a></div>
      <ul class="links">
        <li><a href="../../index.html">Home</a></li>
        <li><a href="../html/aboutme.html">About</a></li>

        <li><a href="https://wa.me/6281230928021?">Contact</a></li>
      </ul>
      <div class="toggle_btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>

    <div class="dropdown_menu">
      <li><a href="../../index.html">Home</a></li>
      <li><a href="../html/aboutme.html">About</a></li>
      <li><a href="https://wa.me/6281230928021?">Contact</a></li>
    </div>
  </header>

  <div class="container">
    <header>
      <h1 id="title">SURVEY PEMBELAJARAN VIA DARING</h1>
      <p id="description">
        Terimakasih telah meluangkan waktu untuk mengisi survey yang kami
        berikan
      </p>
    </header>

    <form id="survey-form" action="surveyweb1.php" method="post">
      <div class="form">
        <div class="form-group">
          <label id="name-label" for="name">Nama</label>
          <input id="name" name="nama" type="text" placeholder="Masukkan nama anda" required />
        </div>
        <div class="form-group">
          <label id="email-label" for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="Masukkan email anda" required />
        </div>
        <div class="form-group">
          <label id="number-label" for="number">Umur</label>
          <input id="number" name="umur" type="number" min="13" max="99" placeholder="Umur" required />
        </div>
        <div class="form-group">
          <label id="select-label">Jenis Kelamin<span class="clue">(opsional)</span></label>
          <select id="dropdown" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="1">Laki-laki</option>
            <option value="2">Perempuan</option>
          </select>
        </div>
        <div class="form-group radio">
          <p>Menurut Anda, seberapa efektif pembelajaran via online ?</p>
          <label for="radio1"><input id="radio1" type="radio" value="1" name="efektivitas" /> 1
            (Sangat Kurang)</label>
          <label for="radio2"><input id="radio2" type="radio" value="2" name="efektivitas" /> 2
            (Kurang)</label>
          <label for="radio3"><input id="radio3" type="radio" value="3" name="efektivitas" /> 3
            (Cukup)</label>
          <label for="radio4"><input id="radio4" type="radio" value="4" name="efektivitas" /> 4
            (Baik)</label>
          <label for="radio5"><input id="radio5" type="radio" value="5" name="efektivitas" /> 5
            (Sangat Baik)</label>
        </div>
        <div class="form-group radio">
          <p>
            Apa yang anda pikirkan tentang pembelajaran via daring ? Jelaskan
            mengapa anda memilih jawaban tersebut!
          </p>
          <label for="pro"><input id="pro" type="radio" value="pro" name="opini" /> Pro</label>
          <label for="kontra"><input id="kontra" type="radio" value="kon" name="opini" />
            Kontra</label>
          <label for="netral"><input id="netral" type="radio" value="netral" name="opini" />
            Netral</label>
          <label for="textarea"></label>
          <textarea id="alasan" name="alasan_opini" rows="5" placeholder="masukkan alasan kenapa anda memilih (pro/kontra/netral) ..."></textarea>
        </div>
        <div class="form-group">
          <p>
            Menurut anda, apa yang membuat pembelajaran via daring itu berbeda
            dari segi kenyamanannya ?
          </p>
          <label for="kualitas"><input id="kualitas" type="checkbox" value="kualitas-relevansi-sistem" name="kenyamanan[]" />
            Kualitas dan Relavansi Sistem Pembelajaran</label>
          <label for="keaktifan"><input id="keaktifan" type="checkbox" value="keaktifan-peserta-pembelajaran" name="kenyamanan[]" />
            Keaktifan Peserta Pembelajaran Via Online</label>
          <label for="keaktifan"><input id="keaktifan" type="checkbox" value="kualitas-penyampaian-materi" name="kenyamanan[]" />
            Kualitas Penyampaian Materi</label>
          <label class="lainnya" for="lainnya" onclick="disabledlainnya()">
            <span>
              <input id="lainnya" type="checkbox" value="lainnya" name="kenyamanan[]" />
              Lainnya :
            </span>
            <input id="lainnya" name="lainnya_kenyamanan" type="text" placeholder="Tuliskan lainnya disini" disabled />
          </label>
        </div>
        <div class="form-group radio">
          <p>
            Apakah anda merasa cukup didukung oleh dosen atau instruktur selama
            pembelajaran daring?
          </p>
          <label for="radio1"><input id="radio1" type="radio" value="Sangat Didukung" name="dukungan_dosen" />
            Sangat didukung</label>
          <label for="radio2"><input id="radio2" type="radio" value="Cukup Didukung" name="dukungan_dosen" />
            Cukup Didukung</label>
          <label for="radio3"><input id="radio3" type="radio" value="Kurang Didukung" name="dukungan_dosen" />
            Kurang Didukung</label>
          <label for="radio4"><input id="radio4" type="radio" value="Tidak merasa didukung" name="dukungan_dosen" />
            Tidak merasa didukung</label>
        </div>
        <div id="pindah-page">
          <a href="#" class="pindah-anchor pointer" style="opacity: 0; pointer-events: none">&laquo; Prev</a>
          <span>
            <a class="pointer" onclick="hideFormByIndex(1)">2</a>
          </span>
          <button type="button" class="pindah-anchor" onclick="hideFormByIndex(1)">Next &raquo;</button>
        </div>
      </div>

      <div class="form" style="display: none;">
        <div class="form-group radio">
          <p>Apakah anda mengalami kesulitan teknis selama pembelajaran daring? Jika ya, jelaskan!</p>
          <label for="radio1"><input id="radio1" type="radio" value="Ya" name="kesulitan-teknis" /> Ya</label>
          <textarea id="penjelasanKesulitan" name="penjelasanKesulitan" rows="3"></textarea>
          <label for="radio2"><input id="radio2" type="radio" value="Kadang-kadang" name="kesulitan-teknis" /> Kadang-kadang</label>
          <label for="radio3"><input id="radio3" type="radio" value="Jarang" name="kesulitan-teknis" /> Jarang</label>
          <label for="radio4"><input id="radio4" type="radio" value="Tidak pernah" name="kesulitan-teknis" /> Tidak pernah</label>
        </div>

        <div class="form-group radio">
          <p>Menurut anda, apa yang dapat ditingkatkan dalam pembelajaran daring untuk membuatnya lebih efektif? jelaskan!</p>
          <textarea id="saranPeningkatan" name="saranPeningkatan" rows="5"></textarea>
        </div>
        <div class="form-group radio">
          <p>Apakah anda lebih suka pembelajaran daring atau tatap muka? jelaskan!</p>
          <label for="daring"><input id="daring" type="radio" value="daring" name="preferensi-pembelajaran" /> Daring</label>
          <label for="tatapmuka"><input id="tatapmuka" type="radio" value="tatap" name="preferensi-pembelajaran" /> Tatap muka</label>
          <label for="textarea"></label>
          <textarea id="alasanPreferensi" name="alasanPreferensi" rows="5" placeholder="Masukkan alasan kenapa anda memilih jawaban tersebut ..."></textarea>
        </div>

        <div id="pindah-page">
          <a class="pindah-anchor pointer" onclick="hideFormByIndex(0)">&laquo; Prev</a>
          <span>
            <a class="pointer" onclick="hideFormByIndex(0)">1</a>
          </span>
          <button id="kirim" type="submit">Kirim</button>
        </div>
      </div>


      <script>
        disabledlainnya();
        navbaranimate();
      </script>
    </form>
  </div>
</body>

</html>