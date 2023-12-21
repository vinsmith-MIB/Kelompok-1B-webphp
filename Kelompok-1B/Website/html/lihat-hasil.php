<?php
include('koneksi.php');
$conn = pdo_connect_mysql();
if (isset($_GET['update'])) {
  include('update.php');
}
try {
  if (isset($_GET['lastInsertedId'])) {
    $lastInsertedId = $_GET['lastInsertedId'];
    $sql = "SELECT * FROM responden WHERE id = $lastInsertedId";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <title>Survey Pembelajaran Via Daring</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="../css/surveyweb.css" />
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
            <li><a href="../../index.html">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="https://wa.me/6281230928021?">Contact</a></li>
          </ul>
        </div>

        <div class="container">
          <header>
            <h1 id="title">SURVEY PEMBELAJARAN VIA DARING</h1>
            <p id="description">
              Terimakasih telah meluangkan waktu untuk mengisi survey yang kami
              berikan
            </p>
          </header>

          <form id="survey-form" action="lihat-hasil.php?lastInsertedId=<?= $lastInsertedId ?>&update" method="post">
            <div class="form">
              <div class="form-group">
                <label id="name-label" for="name">Nama</label>
                <input id="name" name="nama" type="text" placeholder="Masukkan nama anda" value="<?= $data['nama'] ?>" required />
              </div>
              <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Masukkan email anda" value="<?= $data['email'] ?>" required />
              </div>
              <div class="form-group">
                <label id="number-label" for="number">Umur</label>
                <input id="number" name="umur" type="number" min="13" max="99" placeholder="Umur" value="<?= $data['umur'] ?>" required />
              </div>
              <div class="form-group">
                <label id="select-label">Jenis Kelamin<span class="clue">(opsional)</span></label>
                <select id="dropdown" name="jenis_kelamin">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="1" <?= ($data['jenis_kelamin'] == 1) ? 'selected' : '' ?>>Laki-laki</option>
                  <option value="2" <?= ($data['jenis_kelamin'] == 2) ? 'selected' : '' ?>>Perempuan</option>
                </select>
              </div>
              <div class="form-group radio">
                <p>Menurut Anda, seberapa efektif pembelajaran via online ?</p>
                <label for="radio1"><input id="radio1" type="radio" value="1" name="efektivitas" <?= ($data['efektivitas'] == 1) ? 'checked' : '' ?> /> 1 (Sangat Kurang)</label>
                <label for="radio2"><input id="radio2" type="radio" value="2" name="efektivitas" <?= ($data['efektivitas'] == 2) ? 'checked' : '' ?> /> 2 (Kurang)</label>
                <label for="radio3"><input id="radio3" type="radio" value="3" name="efektivitas" <?= ($data['efektivitas'] == 3) ? 'checked' : '' ?> /> 3 (Cukup)</label>
                <label for="radio4"><input id="radio4" type="radio" value="4" name="efektivitas" <?= ($data['efektivitas'] == 4) ? 'checked' : '' ?> /> 4 (Baik)</label>
                <label for="radio5"><input id="radio5" type="radio" value="5" name="efektivitas" <?= ($data['efektivitas'] == 5) ? 'checked' : '' ?> /> 5 (Sangat Baik)</label>
              </div>
              <div class="form-group radio">
                <p>Apa yang anda pikirkan tentang pembelajaran via daring ? Jelaskan mengapa anda memilih jawaban tersebut!</p>
                <label for="pro"><input id="pro" type="radio" value="pro" name="opini" <?= ($data['opini'] == 'pro') ? 'checked' : '' ?> /> Pro</label>
                <label for="kontra"><input id="kontra" type="radio" value="kon" name="opini" <?= ($data['opini'] == 'kon') ? 'checked' : '' ?> /> Kontra</label>
                <label for="netral"><input id="netral" type="radio" value="netral" name="opini" <?= ($data['opini'] == 'netral') ? 'checked' : '' ?> /> Netral</label>
                <textarea id="alasan" name="alasan_opini" rows="5" placeholder="masukkan alasan kenapa anda memilih (pro/kontra/netral) ..."> <?= $data['alasan_opini'] ?></textarea>
              </div>
              <div class="form-group">
                <p>Menurut anda, apa yang membuat pembelajaran via daring itu berbeda dari segi kenyamanannya ?</p>
                <label for="kualitas"><input id="kualitas" type="checkbox" value="kualitas-relevansi-sistem" name="kenyamanan[]" <?= (in_array('kualitas-relevansi-sistem', explode(', ', $data['kenyamanan']))) ? 'checked' : '' ?> />
                  Kualitas dan Relavansi Sistem Pembelajaran</label>
                <label for="keaktifan"><input id="keaktifan" type="checkbox" value="keaktifan-peserta-pembelajaran" name="kenyamanan[]" <?= (in_array('keaktifan-peserta-pembelajaran', explode(', ', $data['kenyamanan']))) ? 'checked' : '' ?> />
                  Keaktifan Peserta Pembelajaran Via Online</label>
                <label for="keaktifan"><input id="keaktifan" type="checkbox" value="kualitas-penyampaian-materi" name="kenyamanan[]" <?= (in_array('kualitas-penyampaian-materi', explode(', ', $data['kenyamanan']))) ? 'checked' : '' ?> />
                  Kualitas Penyampaian Materi</label>
                <label class="lainnya" for="lainnya" onclick="disabledlainnya()">
                  <span>
                    <input id="lainnya" type="checkbox" value="lainnya" name="kenyamanan[]" <?= (in_array('lainnya', explode(', ', $data['kenyamanan']))) ? 'checked' : '' ?> />
                    Lainnya :
                  </span>
                  <input id="lainnya" name="lainnya_kenyamanan" type="text" placeholder="Tuliskan lainnya disini" value="<?= $data['lainnya_kenyamanan'] ?>" />
                </label>
              </div>
              <div class="form-group radio">
                <p>Apakah anda merasa cukup didukung oleh dosen atau instruktur selama pembelajaran daring?</p>
                <label for="radio1"><input id="radio1" type="radio" value="Sangat Didukung" name="dukungan_dosen" <?= ($data['dukungan_dosen'] == 'Sangat Didukung') ? 'checked' : '' ?> />
                  Sangat didukung</label>
                <label for="radio2"><input id="radio2" type="radio" value="Cukup Didukung" name="dukungan_dosen" <?= ($data['dukungan_dosen'] == 'Cukup Didukung') ? 'checked' : '' ?> />
                  Cukup Didukung</label>
                <label for="radio3"><input id="radio3" type="radio" value="Kurang Didukung" name="dukungan_dosen" <?= ($data['dukungan_dosen'] == 'Kurang Didukung') ? 'checked' : '' ?> />
                  Kurang Didukung</label>
                <label for="radio4"><input id="radio4" type="radio" value="Tidak merasa didukung" name="dukungan_dosen" <?= ($data['dukungan_dosen'] == 'Tidak merasa didukung') ? 'checked' : '' ?> />
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
                <label for="radio1"><input id="radio1" type="radio" value="Ya" name="kesulitan-teknis" <?= ($data['kesulitan_teknis'] == 'Ya') ? 'checked' : '' ?> /> Ya</label>
                <textarea id="penjelasanKesulitan" name="penjelasanKesulitan" rows="3"><?= $data['penjelasan_kesulitan'] ?></textarea>
                <label for="radio2"><input id="radio2" type="radio" value="Kadang-kadang" name="kesulitan-teknis" <?= ($data['kesulitan_teknis'] == 'Kadang-kadang') ? 'checked' : '' ?> /> Kadang-kadang</label>
                <label for="radio3"><input id="radio3" type="radio" value="Jarang" name="kesulitan-teknis" <?= ($data['kesulitan_teknis'] == 'Jarang') ? 'checked' : '' ?> /> Jarang</label>
                <label for="radio4"><input id="radio4" type="radio" value="Tidak pernah" name="kesulitan-teknis" <?= ($data['kesulitan_teknis'] == 'Tidak pernah') ? 'checked' : '' ?> /> Tidak pernah</label>
              </div>

              <div class="form-group radio">
                <p>Menurut anda, apa yang dapat ditingkatkan dalam pembelajaran daring untuk membuatnya lebih efektif? Jelaskan!</p>
                <textarea id="saranPeningkatan" name="saranPeningkatan" rows="5"><?= $data['saran_peningkatan'] ?></textarea>
              </div>

              <div class="form-group radio">
                <p>Apakah anda lebih suka pembelajaran daring atau tatap muka? Jelaskan!</p>
                <label for="daring"><input id="daring" type="radio" value="daring" name="preferensi-pembelajaran" <?= ($data['preferensi_pembelajaran'] == 'daring') ? 'checked' : '' ?> /> Daring</label>
                <label for="tatapmuka"><input id="tatapmuka" type="radio" value="tatap" name="preferensi-pembelajaran" <?= ($data['preferensi_pembelajaran'] == 'tatap') ? 'checked' : '' ?> /> Tatap muka</label>
                <label for="textarea"></label>
                <textarea id="alasanPreferensi" name="alasanPreferensi" rows="5" placeholder="Masukkan alasan kenapa anda memilih jawaban tersebut ..."><?= $data['alasan_preferensi'] ?></textarea>
              </div>

              <div id="pindah-page">
                <a class="pindah-anchor pointer" onclick="hideFormByIndex(0)">&laquo; Prev</a>
                <span>
                  <a class="pointer" onclick="hideFormByIndex(0)">1</a>
                </span>
                <?php
                $buttonType = (isset($_GET['update'])) ? 'submit' : 'button';
                $buttonName = (isset($_GET['update'])) ? 'Update' : 'Edit';
                $buttonHandler = (isset($_GET['update'])) ? '' : "redirectToPage('lihat-hasil.php?lastInsertedId=$lastInsertedId&update')";
                ?>
                <button id="kirim" type="<?php echo $buttonType; ?>" onclick="<?= $buttonHandler ?>"><?= $buttonName ?></button>
              </div>
            </div>
          </form>
      <?php
    } else {
      echo "<p>ID not found</p>";
    }
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
      ?>

      <script>
        <?php
        if (!isset($_GET['update'])) {
          echo 'disabledall();';
        }
        ?>
        navbaranimate();
      </script>
        </div>
    </body>

    </html>