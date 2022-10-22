<!-- App Header -->
<div class="appHeader bg-primary text-light">
	<div class="left">
		<a href="#" class="headerButton goBack">
			<ion-icon name="chevron-back-outline"></ion-icon>
		</a>
	</div>
	<div class="pageTitle">Unit & Bagian</div>
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
			<div class="listview-title mt-2 mb-1">List Unit & Bagian</div>
		</div>
	</div>
	<ul class="listview link-listview mb-4">
		<?php foreach ($unit as $bg) : ?>
			<li>
				<a href="#" class="item py-3">
					<div class="in">
						<?= $bg->nama_unit ?>
						<footer>
							Telp : <?= $bg->telp ?>
						</footer>
					</div>
					<span class="text-muted" onclick="karyawan(<?= $bg->telp ?>)">Karyawan</span>
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
				<h5 class="modal-title">List Karyawan</h5>
				<a href="#" data-bs-dismiss="modal">Tutup</a>
			</div>
			<div class="modal-body p-0">

				<ul class="listview image-listview flush mb-2" id="list-karyawan">

				</ul>

			</div>
		</div>
	</div>
</div>
<!-- * Modal Listview -->


<script>
	function karyawan(kode) {
		$.ajax({
			url: '<?= base_url() ?>unit/getKaryawan',
			type: 'post',
			data: 'kode=' + kode,
			dataType: 'json',
			success: function(res) {
				let html = ''
				$.each(res,
					function(i, val) {
						html += '<li>'
						html += '<a href="<?= base_url() ?>karyawan/profil_karyawan/' + val.id + '" class="item">'
						html += '<img src="http://<?= $_SERVER['HTTP_HOST'] ?>/kepegawaian/assets/images/foto_karyawan/' + val.foto + '" alt="image" class="image">'
						html += '<div class="in">'
						html += '<div>' + val.nama_ktp + '</div>'
						html += '<span class="text-muted">Profil</span>'
						html += '</div>'
						html += '</a>'
						html += '</li>'

					}
				)
				$('#list-karyawan').html(html);
			}
		})
		$('#ModalListview').modal('toggle');
	}
</script>
