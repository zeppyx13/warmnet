<?php
require '../backend.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM booking WHERE nama LIKE '%$keyword%' OR email LIKE '%$keyword%' OR tlp LIKE '%$keyword%' OR jam LIKE '%$keyword%' OR id LIKE '%$keyword%' OR jam LIKE '%$keyword%' OR paket LIKE '%$keyword%' OR date LIKE '%$keyword%'";
$cari = query($query);
?>
<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id booking</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jam</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Paket</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> waktu</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Action</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($cari as $row) : ?>
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">ID #<?= $row["id"]; ?> </h6>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="avatar-group mt-2">
                        <p><?= $row["date"]; ?></p>
                    </div>
                </td>
                <td>
                    <div class="avatar-group mt-2">
                        <p><?= $row["jam"]; ?></p>
                    </div>
                </td>
                <td>
                    <div class="avatar-group mt-2">
                        <p><?= $row["nama"]; ?></p>
                    </div>
                </td>
                <td>
                    <div class="avatar-group mt-2">
                        <p><?= $row["paket"]; ?></p>
                    </div>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold"><?= $row["email"]; ?> </span>
                </td>
                <td class="align-middle">
                    <div class="progress-wrapper w-75 mx-auto">
                        <p><?= $row["waktu"]; ?> jam</p>
                    </div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 50px;">
                        <a href="../php/hps.php?id=<?= $row['id']; ?>"><button class="btn btn-danger">Reject</button></a>
                    </div>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>