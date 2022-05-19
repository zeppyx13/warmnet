<?php
include "koneksi.php";
$id_transaksi = $_GET['id_transaksi'];
$hapus = mysqli_query($koneksi, "DELETE FROM billing WHERE id_transaksi = '$id_transaksi'");
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
