<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Profile</div>
    <div class="right">
        <a href="#sidebarPanel" class="headerButton" data-bs-toggle="offcanvas">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-3">
        <div class="profile-head">
            <div class="avatar">
                <img src="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w100 rounded">
            </div>
            <div class="in">
                <h3 class="name"><?= $karyawan['nama_ktp'] ?></h3>
                <h5 class="subtext"><?= $karyawan['bagian'] ?></h5>
                <h5 class="subtext"><?= $karyawan['jabatan'] ?></h5>
                <div class="chip chip-media mt-1">
                    <a href="<?= base_url() ?>edit_biodata" class="text-decoration-none  text-light">
                        <i class="chip-icon bg-danger">
                            <i class="bi bi-pencil"></i>
                        </i>
                        <span class="chip-label">Edit Biodata</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="divider bg-secondary mt-4 mb-3">
        <div class="icon-box bg-secondary">
            <ion-icon name="information"></ion-icon>
        </div>
    </div>

    <div class="section full mt-0">
        <div class="profile-stats ps-5 pe-5">
            <a href="#" class="item">
                <strong><?= $pelatihan['jml'] ?></strong>
                <h5>Pelatihan</h5>
            </a>
            <a href="#" class="item">
                <strong>0</strong>
                <h5>Cuti</h5>
            </a>
            <a href="#" class="item">
                <strong><?= $izin['jml'] ?></strong>
                <h5>Izin Sakit</h5>
            </a>
        </div>
    </div>

    <div class="section full mt-1">
        <div class="wide-block transparent p-0">
            <ul class="nav nav-tabs lined iconed" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#feed" role="tab">
                        <ion-icon name="grid-outline"></ion-icon>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#friends" role="tab">
                        <ion-icon name="people-outline"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- tab content -->
    <div class="section full mb-1">
        <div class="tab-content">


            <!-- Menu -->
            <div class="tab-pane fade show active" id="feed" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>data_anak">
                                <img src=" <?= base_url() ?>assets/img/logo-menu/anak.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>absensi">
                                <img src=" <?= base_url() ?>assets/img/logo-menu/absensi.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>surat_izin">
                                <img src="<?= base_url() ?>assets/img/logo-menu/surat-izin.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>cuti">
                                <img src="<?= base_url() ?>assets/img/logo-menu/cuti.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>dokumen_pribadi">
                                <img src="<?= base_url() ?>assets/img/logo-menu/dokumen-pribadi.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>pelatihan">
                                <img src="<?= base_url() ?>assets/img/logo-menu/pelatihan.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>file_kepegawaian">
                                <img src="<?= base_url() ?>assets/img/logo-menu/file-kepegawaian.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <!-- </div> -->

                        <!-- <div class="divider bg-secondary mt-2 mb-3">
                        <div class="icon-box bg-secondary">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                    </div> -->

                        <!-- <div class="row"> -->
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>unit">
                                <img src=" <?= base_url() ?>assets/img/logo-menu/unit.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>karyawan">
                                <img src=" <?= base_url() ?>assets/img/logo-menu/karyawan.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>komite_panitia">
                                <img src=" <?= base_url() ?>assets/img/logo-menu/komite-panitia.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                        <div class="col-4 mb-2">
                            <a href="<?= base_url() ?>dokter">
                                <img src=" <?= base_url() ?>assets/img/logo-menu/dokter.jpg" alt="image" class="imaged w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Menu -->




            <!-- * friends -->
            <div class="tab-pane fade" id="friends" role="tabpanel">
                <ul class="listview image-listview flush transparent pt-1">
                    <?php foreach ($friends as $fr) :
                        if ($fr['nik'] != $karyawan['nik']) {
                    ?>
                            <li>
                                <a href="<?= base_url() ?>teman/<?= $fr['nik'] ?>" class="item">
                                    <img src="<?= base_url() ?>vendor/Mobilekit_v2-9/HTML/assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>
                                            <?= $fr['nama_ktp'] ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                    <?php }
                    endforeach ?>
                </ul>
            </div>
            <!-- * friends -->


        </div>
    </div>
    <!-- * tab content -->

</div>
<!-- * App Capsule -->