<?php
require '../backend.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM planggan WHERE nama LIKE '%$keyword%";
?>
<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telphone</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../../assets/img/<?= $row['gambar']; ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $row['nama']; ?></h6>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0"><?= $row['email']; ?></p>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class=""><?= $row['tlp']; ?></span>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class=""><?= $row['lvl']; ?></span>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>