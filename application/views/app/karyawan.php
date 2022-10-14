<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Karyawan</div>
    <div class="right">
        <a href="#sidebarPanel" class="headerButton" data-bs-toggle="offcanvas">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="row mt-1">
        <div class="col-6">
            <div class="listview-title mt-2 mb-1">List Karyawan</div>
        </div>
    </div>
    <ul class="listview image-listview  flush mb-4">
        <?php foreach ($list_karyawan as $kry) : ?>
            <li>
                <a href="#" class="item">
                    <img src="<?= base_url() ?>assets/img/foto-karyawan/default.jpg" alt="image" class="image">
                    <div class="in">
                        <div>
                            <?= $kry->nama_ktp ?>
                            <footer class="mt-1">
                                Unit : <?= $kry->bagian ?>
                            </footer>
                        </div>
                        <span class="text-muted">Profil</span>
                    </div>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</div>
<!-- * App Capsule -->