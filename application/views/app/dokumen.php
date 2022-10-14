<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Dokumen Pribadi</div>
    <div class="right">
        <a href="#sidebarPanel" class="headerButton" data-bs-toggle="offcanvas">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="row mt-1 d-flex align-items-center">
        <div class="col-5">
            <div class="listview-title mt-2 mb-1">List Dokumen</div>
        </div>
        <div class="col-7 text-end">
            <button type="button" class="btn btn-sm btn-outline-primary mt-2 mb-1 me-2 py-2" data-bs-toggle="modal" data-bs-target="#ModalForm">
                Tambah Dokumen Pribadi
            </button>
        </div>
    </div>
    <ul class="listview link-listview">
        <?php foreach ($dokumen as $doc) : ?>
            <li>
                <a href="#" class="item py-3">
                    <div>
                        <?= $doc->nama_dokumen ?>
                        <footer class="mt-1">Upload : <?= $doc->upload_at ?></footer>
                    </div>
                    <span class="text-muted" onclick="menu(<?= $doc->id ?>)">Menu</span>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</div>
<!-- * App Capsule -->



<!-- TAMBAH DOKUMEN  ----------------------------------------------------------------------------- -->
<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalForm" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Dokumen Pribadi</h5>
                <a href="#" onclick="batal_tambah()" data-bs-dismiss="modal">Batal</a>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div class="section mt-4 mb-5">

                        <form autocomplete="off" id="form_tambah" method="POST" enctype="multipart/form-data" action="<?= base_url() ?>dokumen_pribadi/add_aksi">

                            <input type="hidden" id="id_karyawan" name="id_karyawan" value="<?= $karyawan['id']; ?>">

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="form-label" for="nama_dokumen">Nama Dokumen</label>
                                    <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" autocomplete="off">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic mt-3">
                                <div class="input-wrapper">
                                    <label class="form-label mb-2" for="file_dokumen">File Dokumen</label>
                                    <div class="custom-file-upload" id="fileUpload">
                                        <input type="file" id="file_input" name="file_input" accept=".png, .jpg, .jpeg, .pdf">
                                        <label for="file_input">
                                            <span>
                                                <strong>
                                                    <ion-icon name="cloud-upload-outline"></ion-icon>
                                                    <i>Pilih File</i>
                                                </strong>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="button" onclick="simpan_tambah()" class="btn btn-primary btn-block btn-lg">Simpan</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Modal Form -->

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

<!-- Dialog Berhasil Tambah -->
<div class="modal fade dialogbox" id="modalDialogBerhasilTambah" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-success">
                <ion-icon name="checkmark-circle"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
            </div>
            <div class="modal-body">
                Berhasil menambah dokumen baru.
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a onclick="$('#form_tambah').submit();" href="#" class="btn" data-bs-dismiss="modal">OK</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Berhasil Tambah -->
<!-- TAMBAH DOKUMEN  ----------------------------------------------------------------------------- -->





<!-- MENU DOKUMEN  ----------------------------------------------------------------------------- -->
<!-- Action Sheet Dokumen -->
<div class="offcanvas offcanvas-bottom action-sheet inset" tabindex="-1" id="actionSheetDokumen">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="titleAction">Menu</h5>
    </div>
    <div class="offcanvas-body">
        <ul class="action-button-list">
            <li>
                <a onclick="lihat()" href="#" class="btn btn-list">
                    <span>Lihat File</span>
                </a>
            </li>
            <li>
                <a onclick="hapus()" href="#" class="btn btn-list">
                    <span>Hapus</span>
                </a>
            </li>
            <li class="action-divider"></li>
            <li>
                <a href="#" class="btn btn-list text-danger" data-bs-dismiss="offcanvas">
                    <span>Tutup</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- * Action Sheet Dokumen -->


<!-- Dialog Hapus Dokumen -->
<div class="modal fade dialogbox" id="modalDialogHapus" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus</h5>
            </div>
            <div class="modal-body" id="textConfirmHapus">
                Anda yakin menghapus dokumen?
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-light" data-bs-dismiss="modal">
                        BATAL
                    </a>
                    <a id="btn-do-hapus" class="btn btn-text-danger">
                        HAPUS
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Hapus Dokumen -->


<!-- Dialog Lihat Dokumen IMG -->
<div class="modal fade dialogbox" id="modalLihatDokumetImage" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="max-width: 90%; max-height: 90%;">
            <img id="img-lihat-dokumen" alt="image" class="img-fluid">
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Lihat Dokumen IMG -->
<!-- MENU DOKUMEN  ----------------------------------------------------------------------------- -->



<script>
    function batal_tambah() {
        $('#file_input').val('');
        $('#form_tambah').trigger("reset");
    }

    function simpan_tambah() {
        let nama_dokumen = $('#nama_dokumen').val();
        let file_input = $('#file_input').val();
        if (nama_dokumen == "") {
            $('#text-alert-form').html('Nama Dokumen belum diisi.')
            notification('alert-form');
        } else if (file_input == '') {
            $('#text-alert-form').html('File Dokumen belum diupload.')
            notification('alert-form');
        } else {
            $('#modalDialogBerhasilTambah').modal('toggle');
        }
    }

    function menu(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url() ?>dokumen_pribadi/getDokumenById/" + id,
            dataType: 'JSON',
            success: function(response) {
                $('#titleAction').html('Dokumen ' + response.nama_dokumen)
                $('#textConfirmHapus').html('Anda yakin menghapus dokumen ' + response.nama_dokumen + '?')
                $('#img-lihat-dokumen').attr('src', '<?= base_url() ?>assets/uploads/dokumen_pribadi/' + response.file);
            }
        })
        $('#btn-do-hapus').attr('href', '<?= base_url(); ?>dokumen_pribadi/delete/' + id);
        $('#actionSheetDokumen').offcanvas('toggle');
    }

    function hapus() {
        $('#actionSheetDokumen').offcanvas('hide');
        $('#modalDialogHapus').modal('toggle');
    }

    function lihat() {
        $('#actionSheetDokumen').offcanvas('hide');
        $('#modalLihatDokumetImage').modal('toggle');
    }
</script>