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
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-5">
            <div class="section">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <br>
                <h2>E-Karyawan</h2>
                <h4>Isi username dan password untuk login</h4>
            </div>

            <div class="section mt-1 mb-5">

                <?= $this->session->flashdata('Pesan'); ?>

                <form method="POST" action="<?= base_url('auth') ?>" autocomplete="off">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Password" autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </div>

                </form>
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