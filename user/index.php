<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: ../");
	exit;
}
require '../php/koneksi.php';
$email = $_SESSION['email'];

$query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE email='$email'");
$jam = mysqli_query($koneksi, "SELECT * FROM booking WHERE email='$email' ");
$dta = mysqli_fetch_assoc($jam);
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>user dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
	<meta name="application-name" content="&nbsp;" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
</head>

<body>
	<section class="main-content">
		<div class="container">
			<h1 class="text-center">Hai Welcome Back!</h1>
			<br>
			<br>

			<div class="row">
				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					<div class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center position-relative overflow-hidden">
						<div class="banner"></div>
						<img src="../assets/img/<?= $data['gambar']; ?>" alt="" class="img-circle mx-auto mb-3">
						<h3 class="mb-4"><?= $data['nama']; ?></h3>
						<div class="text-left mb-4">
							<p class="mb-2"><i class="fa fa-envelope mr-2"></i> <?= $data['email']; ?></p>
							<p class="mb-2"><i class="fa fa-phone mr-2"></i><?= $data['tlp']; ?></p>
							<p class="mb-2"><i class="bi bi-clock-history"></i> <?= $dta['waktu']; ?>
							<p>
							<div style="margin-bottom:-30px; margin-top:50px;">
								<small class="mb-2"><a style="color: black;" href="../php/logout.php"><i class="bi bi-box-arrow-in-right"></i> Logout</a> <a style="margin-left: 50px; color: black;" href="../"><i class="bi bi-house-door"></i></a><a style="color: black; margin-left:50px;" href="update.php?id=<?= $data["id"]; ?>"><i class="bi bi-pencil-square"></i> Edit</a></small>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>