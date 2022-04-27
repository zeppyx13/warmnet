<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../");
    exit;
}
include "../php/koneksi.php";
require "../php/backend.php";
$id = $_GET["id"];
$dta = query("SELECT * FROM pelanggan WHERE id=$id")[0];
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Profile berhasil di ubah')
        document.location.href='../php/logout.php';
        </script>
        ";
    } else {
        echo mysqli_error($konek);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3 mt-10">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Edit Profile</h1>
                </div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $dta["id"]; ?>">
                            <label for="email">Pilih foto profile:</label>
                            <input type="file" required autocomplete="off" class="form-control" id="img" name="gambar" />
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" required placeholder="Nama" autocomplete="off" class="form-control" id="nama" value="<?= $dta['nama']; ?>" name="nama" />
                        </div class="form-group">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" required placeholder="email" autocomplete="off" class="form-control" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="tlp">No Telphone:</label>
                            <input type="text" placeholder="Telphone" autocomplete="off" class="form-control" id="tlp" required value="<?= $dta['tlp']; ?>" name="tlp" />
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" style="margin-right:10px;">Edit</button>
                    </form>
                </div>
                <div class="panel-footer text-right">
                    <a href="index.php"><small>
                            <<<< </small></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>