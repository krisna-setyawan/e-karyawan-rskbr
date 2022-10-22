<!doctype html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="theme-color" content="#000000">

	<title>E-Karyawan RSK Budi Rahayu</title>

	<meta name="description" content="E-karyawan RSK Budi Rahayu">
	<meta name="keywords" content="E-karyawan, karyawan, rsk budirahayu, rumah sakit" />

	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/logo.png" sizes="32x32">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/img/icon/192x192.png">

	<link rel="stylesheet" href="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/css/style.css">
	<link rel="manifest" href="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/__manifest.json">

	<script src="<?= base_url() ?>assets/jquery/jquery-3.4.1.min.js"></script>
</head>

<body class="bg-white">

	<!-- loader -->
	<div id="loader">
		<div class="spinner-border text-primary" role="status"></div>
	</div>
	<!-- * loader -->

	<!-- App Header -->
	<div class="appHeader no-border transparent position-absolute">
		<div class="left">
			<a href="<?= base_url() ?>auth" class="headerButton goBack">
				<ion-icon name="chevron-back-outline"></ion-icon>
			</a>
		</div>
		<div class="pageTitle"></div>
		<div class="right">
		</div>
	</div>
	<!-- * App Header -->

	<!-- App Capsule -->
	<div id="appCapsule">

		<div class="error-page">
			<img src="<?= base_url() ?>assets/img/404.png" alt="alt" class="imaged square w200">
			<h1 class="title">Opss.. <br> looks like you got lost.</h1>
			<div class="text mb-5">
				The page you are looking for could not be found.
			</div>

			<div class="fixed-footer">
				<div class="row">
					<div class="col-12">
						<a href="<?= base_url() ?>auth" class="btn btn-primary btn-lg btn-block">Go Back</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- * App Capsule -->




	<!-- ============== Js Files ==============  -->
	<!-- Bootstrap -->
	<script src="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/js/lib/bootstrap.min.js"></script>
	<!-- Ionicons -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<!-- Splide -->
	<script src="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/js/plugins/splide/splide.min.js"></script>
	<!-- ProgressBar js -->
	<script src="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/js/plugins/progressbar-js/progressbar.min.js"></script>
	<!-- Base Js File -->
	<script src="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/js/base.js"></script>

</body>

</html>
