<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM booking WHERE id=$id");
if ($hapus) {
    echo "<script>
    alert('Pesanan berasil di hapus')
    document.location.href='../oprator/';
    </script>
    ";
    exit;
} else {
    echo "<script>
    alert('Pesanan gagal di hapus')
    document.location.href='../oprator/';
    </script>
    ";
    exit;
}
