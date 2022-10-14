<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">File Kepegawaian</div>
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
        <div class="col-12">
            <div class="listview-title mt-2 mb-1">List File Kepegawaian</div>
        </div>
    </div>
    <ul class="listview image-listview">
        <?php foreach ($file_kepegawaian as $fl) : ?>
            <li>
                <a href="#" class="item">
                    <div class="in my-1">
                        <div>
                            <?= $fl->nama_file ?>
                            <footer class="mt-1">Jenis : <?= $fl->jenis ?></footer>
                        </div>
                        <span class="text-muted" onclick="lihat(<?= $fl->id ?>)">Lihat</span>
                    </div>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</div>
<!-- * App Capsule -->


<!-- Dialog Lihat File IMG -->
<div class="modal fade dialogbox" id="modalLihatFileImage" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="max-width: 90%; max-height: 90%;">
            <img id="img-lihat-file" alt="image" class="img-fluid">
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Lihat File IMG -->



<script>
    function lihat(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url() ?>file_kepegawaian/getFile_kepegawaianById/" + id,
            dataType: 'JSON',
            success: function(response) {
                $('#img-lihat-file').attr('src', '<?= base_url() ?>assets/uploads/file_kepegawaian/' + response.file);
                $('#modalLihatFileImage').modal('toggle');
            }
        })
    }
</script>