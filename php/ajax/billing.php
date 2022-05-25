<?php
require '../backend.php';
$keyword = $_GET['keyword'];
$like = "id_transaksi LIKE '%$keyword%' OR metode LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR tlp LIKE '%$keyword%'";
$query = "SELECT booking.nama,booking.tlp,billing.id_transaksi,billing.metode,booking.email,billing.gambar FROM booking RIGHT JOIN billing ON booking.email = billing.email WHERE $like ";
$cari = query($query);
?>
<ul class="list-group">
    <?php $i = 1; ?>
    <?php foreach ($cari as $row) : ?>
        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
            <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm"><?= $row["nama"]; ?></h6>
                <span class="text-xs">ID Transaction : <span class="text-dark ms-sm-2 font-weight-bold"><?= $row["id_transaksi"]; ?></span></span>
                <span class="text-xs">tlp: <span class="text-dark font-weight-bold ms-sm-2"><?= $row["tlp"]; ?></span></span>
                <span class="text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold"><?= $row["email"]; ?></span></span>
                <span class="text-xs">methode: <span class="text-dark ms-sm-2 font-weight-bold"><?= $row["metode"]; ?></span></span>
                <span class="text-xs">Bukti : <span class="text-dark ms-sm-2 font-weight-bold"><a href="../../assets/bukti/<?= $row["gambar"]; ?>">Click here</a></span></span>
            </div>
            <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="../../php/delete.php?id_transaksi=<?= $row["id_transaksi"]; ?>"><i class="material-icons text-sm me-2">delete</i>Delete</a>
            </div>
        </li>
        <?php $i++; ?>
    <?php endforeach; ?>
</ul>