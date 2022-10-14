<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Komite & Panitia</div>
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
            <div class="listview-title mt-2 mb-1">List Komite & Panitia</div>
        </div>
    </div>
    <ul class="listview link-listview mb-4">
        <?php foreach ($komite as $kmt) : ?>
            <li>
                <a href="#" class="item py-3">
                    <div class="in">
                        <?= $kmt->nama_komite ?>
                        <footer>
                            No SK : <?= $kmt->no_sk ?>
                        </footer>
                    </div>
                    <span class="text-muted" onclick="anggota(<?= $kmt->id ?>)">Anggota</span>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</div>
<!-- * App Capsule -->



<!-- Modal Listview -->
<div class="modal fade modalbox" id="ModalListview" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">List Anggota</h5>
                <a href="#" data-bs-dismiss="modal">Tutup</a>
            </div>
            <div class="modal-body p-0">

                <ul class="listview image-listview flush mb-2" id="list-anggota">

                </ul>

            </div>
        </div>
    </div>
</div>
<!-- * Modal Listview -->


<script>
    function anggota(id_komite) {
        $.ajax({
            url: '<?= base_url() ?>komite_panitia/getAnggota',
            type: 'post',
            data: 'id_komite=' + id_komite,
            dataType: 'json',
            success: function(res) {
                let html = ''
                $.each(res,
                    function(i, val) {
                        html += '<li>'
                        html += '<a href="#" class="item">'
                        html += '<img src="<?= base_url() ?>assets/img/foto-karyawan/default.jpg" alt="image" class="image">'
                        html += '<div class="in">'
                        html += '<div>' + val.nama
                        html += '<footer class="mt-1">' + val.jabatan + '</footer>'
                        html += '</div>'
                        html += '<span class="text-muted">Profil</span>'
                        html += '</div>'
                        html += '</a>'
                        html += '</li>'

                    }
                )
                $('#list-anggota').html(html);
            }
        })
        $('#ModalListview').modal('toggle');
    }
</script>