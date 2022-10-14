<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Surat Izin Sakit</div>
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
            <div class="listview-title mt-2 mb-1">List Surat Izin Sakit</div>
        </div>
    </div>
    <ul class="listview link-listview">
        <?php foreach ($surat_izin as $srt) : ?>
            <li>
                <a href="#" class="item py-3">
                    <div>
                        <?= $srt->tanggal ?>
                        <footer class="mt-1">
                            Diagnosa : <?= $srt->diagnosa ?>
                            <br>
                            Tempat Periksa : <?= $srt->tempat_periksa ?>
                        </footer>
                    </div>
                    <span class="text-muted" onclick="detail(<?= $srt->id ?>)">Detail</span>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</div>
<!-- * App Capsule -->


<!-- Dialog detail -->
<div class="modal fade dialogbox" id="modaldetail" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="max-width: 90%; max-height: 90%;">
            <div class="pt-3 px-3">
                <p id="tanggal"><b>Tanggal : </b> </p>
                <p id="diagnosa"><b>Diagnosa : </b> </p>
                <p id="tempat_periksa"><b>Tempat periksa : </b> </p>
                <p id="tgl_mulai_ri"><b>Tanggal mulai rawat inap : </b> </p>
                <p id="tgl_selesai_ri"><b>Tanggal selesai rawat inap : </b> </p>
                <p id="lama_ri"><b>Lama rawat inap : </b> </p>
                <p id="tgl_mulai_si"><b>Tanggal mulai istirahat : </b> </p>
                <p id="tgl_selesai_si"><b>Tanggal selesai istirahat : </b> </p>
                <p id="lama_si"><b>Lama istirahat : </b> </p>
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-success" data-bs-dismiss="modal">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog detail -->



<script>
    function detail(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url() ?>surat_izin/getSurat_izinById/" + id,
            dataType: 'JSON',
            success: function(response) {
                $("#tanggal").html('Tanggal : ' + response.tanggal)
                $("#diagnosa").html('Diagnosa : ' + response.diagnosa)
                $("#tempat_periksa").html('Tempat periksa : ' + response.tempat_periksa)
                $("#tgl_mulai_ri").html('Tanggal mulai rawat inap : ' + response.tgl_mulai_ri)
                $("#tgl_selesai_ri").html('Tanggal selesai rawat inap : ' + response.tgl_selesai_ri)
                $("#lama_ri").html('Lama rawat inap : ' + response.lama_ri + ' Hari')
                $("#tgl_mulai_si").html('Tanggal mulai istirahat : ' + response.tgl_mulai_si)
                $("#tgl_selesai_si").html('Tanggal selesai istirahat : ' + response.tgl_selesai_si)
                $("#lama_si").html('Lama istirahat : ' + response.lama_si + ' Hari')
                $('#modaldetail').modal('toggle');
            }
        })
    }
</script>