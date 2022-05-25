<?php
include "koneksi.php";
$id = $_POST["id"];
$status = $_POST["status"];
$ubah = mysqli_query($koneksi, "UPDATE komputer SET Status='$status' WHERE Unit_PC='$id'");
if ($ubah) {

    echo "<script>
    document.location.href='../oprator/';
    </script>
    ";
} else {
    echo "<script>
    alert('Status gagal di ubah')
    document.location.href='../oprator/';
    </script>
    ";
}
