<?php
$lastInsertedId = isset($_GET['lastInsertedId']) ? $_GET['lastInsertedId'] : "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lastInsertedId = isset($_GET['lastInsertedId']) ? $_GET['lastInsertedId'] : "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = isset($_POST['nama']) ? $_POST['nama'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $umur = isset($_POST['umur']) ? $_POST['umur'] : null;
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : null;
        $efektivitas = isset($_POST['efektivitas']) ? $_POST['efektivitas'] : null;
        $opini = isset($_POST['opini']) ? $_POST['opini'] : null;
        $alasan_opini = isset($_POST['alasan_opini']) ? $_POST['alasan_opini'] : null;
        $kenyamanan = isset($_POST['kenyamanan']) ? $_POST['kenyamanan'] : [];
        $kenyamanan_imploded = implode(', ', $kenyamanan);
        $lainnya_kenyamanan = isset($_POST['lainnya_kenyamanan']) ? $_POST['lainnya_kenyamanan'] : null;
        $dukungan_dosen = isset($_POST['dukungan_dosen']) ? $_POST['dukungan_dosen'] : null;
        $kesulitan_teknis = isset($_POST['kesulitan-teknis']) ? $_POST['kesulitan-teknis'] : null;
        $penjelasanKesulitan = isset($_POST['penjelasanKesulitan']) ? $_POST['penjelasanKesulitan'] : null;
        $saranPeningkatan = isset($_POST['saranPeningkatan']) ? $_POST['saranPeningkatan'] : null;
        $preferensi_pembelajaran = isset($_POST['preferensi-pembelajaran']) ? $_POST['preferensi-pembelajaran'] : null;
        $alasanPreferensi = isset($_POST['alasanPreferensi']) ? $_POST['alasanPreferensi'] : null;

        $sql = "UPDATE responden SET
        nama = :nama,
        email = :email,
        umur = :umur,
        jenis_kelamin = :jenis_kelamin,
        efektivitas = :efektivitas,
        opini = :opini,
        alasan_opini = :alasan_opini,
        kenyamanan = :kenyamanan,
        lainnya_kenyamanan = :lainnya_kenyamanan,
        dukungan_dosen = :dukungan_dosen,
        kesulitan_teknis = :kesulitan_teknis,
        penjelasan_kesulitan = :penjelasan_kesulitan,
        saran_peningkatan = :saran_peningkatan,
        preferensi_pembelajaran = :preferensi_pembelajaran,
        alasan_preferensi = :alasan_preferensi
        WHERE id = :lastInsertedId"; // <-- Tambahkan ikatan untuk lastInsertedId

        $stmt = $conn->prepare($sql);

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
        $stmt->bindParam(':penjelasan_kesulitan', $penjelasanKesulitan);
        $stmt->bindParam(':saran_peningkatan', $saranPeningkatan);
        $stmt->bindParam(':preferensi_pembelajaran', $preferensi_pembelajaran);
        $stmt->bindParam(':alasan_preferensi', $alasanPreferensi);
        $stmt->bindParam(':lastInsertedId', $lastInsertedId); // <-- Tambahkan ikatan untuk lastInsertedId

        try {
            $stmt->execute();
            // Redirect atau tindakan lainnya setelah pembaruan berhasil
            header("Location: after-submit.php?lastInsertedId=$lastInsertedId");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
