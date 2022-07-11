<?php
require 'backend.php';
include 'koneksi.php';
echo "insert";
$hari = "0";
$bukti = "gantihari.png";
$sql = mysqli_query($koneksi, "INSERT INTO pendapatan VALUES('','$hari','$bukti')");

if ($sql) {
    echo "<script>
    alert('Daily income berhasil di reset')
    document.location.href='../oprator/pages/billing.php';
    </script>
    ";
}
