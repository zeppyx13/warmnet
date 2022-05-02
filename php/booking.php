<?php
session_start();
include "koneksi.php";

if (isset($_POST["submit"])) {
    $paket = $_POST['paket'];
    if ($paket == "bkn") {
        echo "<script>
        alert('pesanan gagal anda belum memilih paket')
        document.location.href='../reservation/';
        </script>
        ";
        exit;
    }
    $nama = $_POST['nama'];
    $email = $_SESSION['email'];
    $tlp = $_POST['tlp'];
    $date = $_POST['date'];
    $jam = $_POST['jam'];
    $waktu = $_POST['waktu'];
    $simpan = mysqli_query($koneksi, "INSERT INTO booking VALUES('','$paket ','$nama','$email','$tlp','$date','$jam','$waktu')");
    if ($simpan) {

        echo "<script>
        alert('pesanan berhasil')
        document.location.href='../';
        </script>
        ";
    } else {
        echo "<script>
        alert('pesanan gagal')
        document.location.href='../';
        </script>
        ";
    }
}
