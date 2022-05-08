<?php
include "koneksi.php";
header('Content-type: application/vnd-ms-excel');
header("Content-Disposition:attachment;filename=Data Pendapatan Warmnet.xlsx");
?>
<title>export</title>
<table border="1" class="table table-striped table-hover">
    <tr>
        <td>id Transaksi</td>
        <td>Pendapatan </td>
        <td>Nama File Bukti Pendapatan</td>
    </tr>
    <?php
    include "../../koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM pendapatan");
    while ($hasil = mysqli_fetch_array($data))
        echo "
<tr>
        <td>$hasil[0]</td>
        <td>$hasil[1]</td>
        <td>$hasil[2]</td>
</tr>";
    ?>
</table>