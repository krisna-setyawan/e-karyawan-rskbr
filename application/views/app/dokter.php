<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Dokter</div>
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
            <div class="listview-title mt-2 mb-1">List Dokter</div>
        </div>
    </div>
    <ul class="listview image-listview  flush mb-4">
        <?php foreach ($dokter as $dok) : ?>
            <li>
                <a href="#" class="item">
                    <img src="<?= base_url() ?>assets/img/foto-karyawan/default.jpg" alt="image" class="image">
                    <div class="in">
                        <div>
                            <?= $dok->nama ?>
                            <footer class="mt-1">
                                <?= $dok->spesialis ?>
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