<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:../");
    exit;
}
include "koneksi.php";
require "backend.php";
if (isset($_POST["submit"])) {
    $paket = $_POST['paket'];
    if ($paket == "bkn") {
        echo "<script>
        alert('pesanan gagal anda belum memilih paket')
        document.location.href='../reservation/';
        </script>
        ";
        exit;
    }
    $nama = $_POST['nama'];
    $email = $_SESSION['email'];
    $tlp = $_POST['tlp'];
    $date = $_POST['date'];
    $jam = $_POST['jam'];
    $waktu = $_POST['waktu'];
    $simpan = mysqli_query($koneksi, "INSERT INTO booking VALUES('','$paket ','$nama','$email','$tlp','$date','$jam','$waktu')");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../assets/ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/ico/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="../assets/ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../assets/ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../assets/ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../assets/ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../assets/ico/favicon-128.png" sizes="128x128" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Payment</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form action="" method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- chech radio -->
                                                    <div class="form-check">
                                                        <h5 style="text-align: center;">Method :</h5>
                                                        <input class="form-check-input" type="radio" name="metode" id="exampleRadios1" value="BCA">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Transfer BCA
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="metode" id="exampleRadios2" value="BNI">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Transfer BNI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="metode" id="exampleRadios3" value="BRI">
                                                        <label class="form-check-label" for="exampleRadios3">
                                                            Transfer BRI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="metode" id="exampleRadios4" value="Mandiri">
                                                        <label class="form-check-label" for="exampleRadios4">
                                                            Transfer Mandiri
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="metode" id="exampleRadios5" value="COD">
                                                        <label class="form-check-label" for="exampleRadios5">
                                                            COD
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="metode" id="exampleRadios6" value="OVO">
                                                        <label class="form-check-label" for="exampleRadios6">
                                                            OVO
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="metode" id="exampleRadios7" value="GOPAY">
                                                        <label class="form-check-label" for="exampleRadios7">
                                                            GOPAY
                                                        </label>
                                                    </div>
                                                    <!-- chech radio -->
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" name="gambar" id="subject" placeholder="Subject">
                                                </div>
                                                <input hidden type="text" name="email" value="<?= $email ?>">
                                            </div>
                                            <div class="col-md-12">

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" name="kirim" value="Submit" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                    <h3 class="mb-4 mt-md-4">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> jalan maskumambang, no 33 Denpasar,Bali</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel://1234567920">+6281-877-980-779</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a href="mailto:support@warm-net.com">support@warm-net.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website</span> <a href="http://warm-net.site/">warmnet.site</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST["kirim"])) {
        if (tambah($_POST) > 0) {
            echo "<script>
        alert('pesanan berhasil')
        document.location.href='../user/';
        </script>
        ";
        } else {
            echo mysqli_error($konek);
        }
    }

    die;

    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>