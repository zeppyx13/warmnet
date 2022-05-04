<?php
include "koneksi.php";
$email = $_GET['email'];
$hapus = mysqli_query($koneksi, "DELETE billing,booking FROM billing JOIN booking ON billing.email = booking.email AND billing.email = '$email'");
if ($hapus > 0) {

    echo "<script>
    alert('data berhasil di Hapus')
    document.location.href='../oprator/pages/billing.php';
    </script>
    ";
} else {
    echo "<script>
    alert('data gagal di Hapus')
    document.location.href='../oprator/pages/billing.php';
    </script>
    ";
}
