<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Pengaturan</div>
    <div class="right">
        <a href="#sidebarPanel" class="headerButton" data-bs-toggle="offcanvas">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
</div>
<!-- * App Header -->


<!-- App Capsule -->
<div id="appCapsule">

    <div class="section full mt-2">
        <div class="section-title">Pengaturan Password / Kata Sandi</div>
        <div class="wide-block pt-2 pb-2">
            <form>

                <input type="hidden" id="id_karyawan" name="id_karyawan" value="<?= $karyawan['id']; ?>">

                <div class="form-group boxed mb-2">
                    <div class="input-wrapper">
                        <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Password Lama">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group boxed mb-2">
                    <div class="input-wrapper">
                        <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Password Baru">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group boxed mb-2">
                    <div class="input-wrapper">
                        <input type="password" class="form-control" id="ulangi_password_baru" name="ulangi_password_baru" placeholder="Ulangi Password Baru">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="mt-4 mb-2">
                    <button type="button" onclick="cek_password_lama()" class="btn btn-primary btn-lg btn-block">
                        Ubah Password
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- AlertFrom -->
<div id="alert-form" class="notification-box">
    <div class="notification-dialog ios-style bg-danger">
        <div class="notification-header">
            <div class="in">
                <strong>Oppss . . . . .</strong>
            </div>
            <div class="right">
                <a href="#" class="close-button">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </div>
        <div class="notification-content">
            <div class="in mt-2">
                <h3 class="subtitle" id="text-alert-form"> - - - - </h3>
            </div>
            <div class="icon-box text-light">
                <ion-icon name="alert-circle-outline"></ion-icon>
            </div>
        </div>
    </div>
</div>
<!-- AlertFrom -->

<!-- DialogIconedSuccess -->
<div class="modal fade dialogbox" id="dialog-success-form" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-success">
                <ion-icon name="checkmark-circle"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
            </div>
            <div class="modal-body">
                Ubah password berhasil.
                <br>
                Silahkan login kembali menggunakan password yang baru.
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="<?= base_url(); ?>auth/logout" class="btn">OK</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedSuccess -->


<script>
    function cek_password_lama() {
        let password_lama = $('#password_lama').val();
        let password_baru = $('#password_baru').val();
        let ulangi_password_baru = $('#ulangi_password_baru').val();
        let id_karyawan = $('#id_karyawan').val();

        if (password_lama == '') {
            $('#text-alert-form').html('Password Lama belum diisi.')
            notification('alert-form');
        } else if (password_baru == '') {
            $('#text-alert-form').html('Password Baru belum diisi.')
            notification('alert-form');
        } else if (ulangi_password_baru == '') {
            $('#text-alert-form').html('Ulangi Password Baru belum diisi.')
            notification('alert-form');
        } else {
            $.ajax({
                type: 'get',
                url: '<?= base_url('pengaturan/cek_pass_lama/') ?>' + password_lama + '/' + id_karyawan,
                dataType: 'json',
                success: function(response) {
                    if (response.pass == 'salah') {
                        $('#text-alert-form').html('Password lama anda salah.')
                        notification('alert-form');
                    } else {
                        cek_password_baru();
                    }
                }
            })
        }
    }

    function cek_password_baru() {
        if ($('#ulangi_password_baru').val() != $('#password_baru').val()) {
            $('#text-alert-form').html('Ulangi password baru dengan benar.')
            notification('alert-form');
        } else {
            let password_baru = $('#password_baru').val();
            let id_karyawan = $('#id_karyawan').val();
            $.ajax({
                type: 'post',
                url: '<?= base_url('pengaturan/ubah_password/') ?>',
                data: '&password_baru=' + password_baru + '&id_karyawan=' + id_karyawan,
                success: function() {
                    $('#dialog-success-form').modal('toggle');
                }
            })
        }
    }
</script>