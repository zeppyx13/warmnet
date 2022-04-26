<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tlp = $_POST['tlp'];
    $pesan = $_POST['pesan'];
    $simpan = mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$email','$tlp','$pesan')");
    if ($simpan) {

        echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../';
        </script>
        ";
    } else {
        echo "<script>
        alert('pesan gagal di simpan')
        document.location.href='../';
        </script>
        ";
    }
}
