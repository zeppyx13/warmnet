<?php
include "../php/backend.php";
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:../");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>

<body>
    <section class="form">
        <div class="form valign">
            <h2>FORM BOOKING</h2>
            <form class="row g-3" action="proses-booking.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <label for="inputEmail" class="form-label">Unit PC</label>
                    <input type="text" class="form-control" id="inputEmail" name="Unit_PC">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-md-8">
                    <label for="namapelanggan" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="namapelanggan" name="NP_Pelanggan">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-4">
                    <label for="tglbln" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="jampenggunaan" placeholder="08xxxxxxx" name="No_Telp">
                </div>
                <div class="col-4">
                    <label for="tglbln" class="form-label">Tgl Bulan</label>
                    <input type="text" class="form-control" id="tglbln" placeholder="1 Januari" name="Tgl_Bln">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-4">
                    <label for="waktupenggunaan" class="form-label">Jam</label>
                    <input type="text" class="form-control" id="waktupenggunaan" placeholder="15.00" name="Jam">
                </div>
                <div class="col-4">
                    <label for="waktupenggunaan" class="form-label">Waktu Penggunaan</label>
                    <input type="text" class="form-control" id="waktupenggunaan" placeholder="1 Jam" name="Waktu_Penggunaan">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-md-4">
                    <img src="img/1.png" alt="Gambar" width="215px" height="215px" />
                </div>
                <div class="col-md-4">
                    <img src="img/2.png" alt="Gambar" width="215px" height="215px" />
                </div>
                <div class="col-md-8"></div>
                <div class="col-3">
                    <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </section>
</body>

</html>