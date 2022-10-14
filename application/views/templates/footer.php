<!-- App Bottom Menu -->
<div class="appBottomMenu" style="border-top: 2px solid #34C759;">
    <a href="<?= base_url() ?>profil" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
        </div>
    </a>
    <a href="<?= base_url() ?>pengaturan" class="item">
        <div class="col">
            <ion-icon name="settings-outline"></ion-icon>
        </div>
    </a>
    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#modalDialogLogout">
        <div class="col">
            <ion-icon name="log-out-outline"></ion-icon>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarPanel">
    <div class="offcanvas-body">
        <!-- profile box -->
        <div class="profileBox">
            <div class="image-wrapper">
                <img src="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged rounded">
            </div>
            <div class="in">
                <strong><?= $karyawan['nama_ktp'] ?></strong>
                <div class="text-muted">
                    <?= $karyawan['bagian'] ?>
                </div>
            </div>
            <a href="#" class="close-sidebar-button" data-bs-dismiss="offcanvas">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <!-- * profile box -->

        <ul class="listview flush transparent no-line image-listview mt-4">
            <li>
                <a href="<?= base_url() ?>data_anak" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Data Anak
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>dokumen_pribadi" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="document-lock-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Dokumen Pribadi
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>file_kepegawaian" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="document-attach-outline"></ion-icon>
                    </div>
                    <div class="in">
                        File Kepegawaian
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>pelatihan" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="bookmarks-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Pelatihan
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>cuti" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Cuti
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>absensi" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Absensi
                    </div>
                </a>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="moon-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Dark Mode</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodesidebar">
                            <label class="form-check-label" for="darkmodesidebar"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


        <div class="listview-title mt-2 mb-1">
            <span>Menu Lain</span>
        </div>
        <ul class="listview image-listview flush transparent no-line">
            <li>
                <a href="<?= base_url() ?>karyawan" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Karyawan</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>unit" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Unit</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>komite_panitia" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Komite & Panitia</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>dokter" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Dokter</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- * App Sidebar -->



<!-- MODAL ------------------------------------------------------------------------------- -->

<!-- Dialog Iconed Inline -->
<div class="modal fade dialogbox" id="modalDialogLogout" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logout</h5>
            </div>
            <div class="modal-body">
                Anda yakin keluar aplikasi?
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                        BATAL
                    </a>
                    <a href="<?= base_url() ?>auth/logout" class="btn btn-text-success">
                        LOGOUT
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Iconed Inline -->




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