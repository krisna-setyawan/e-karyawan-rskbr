<!-- App Header -->
<div class="appHeader bg-primary text-light">
	<div class="left">
		<a href="#" class="headerButton goBack">
			<ion-icon name="chevron-back-outline"></ion-icon>
		</a>
	</div>
	<div class="pageTitle">Data Anak</div>
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
		<div class="col-6">
			<div class="listview-title mt-2 mb-1">Data Anak</div>
		</div>
		<div class="col-6 text-end">
			<button type="button" class="btn btn-sm btn-outline-primary mt-2 mb-1 me-2 py-1" data-bs-toggle="modal" data-bs-target="#ModalForm">
				Tambah Data Anak
			</button>
		</div>
	</div>
	<div class="section mt-2 mb-4">
		<?php foreach ($anak as $ank) : ?>
			<div class="card text-center mb-2">
				<div class="card-body">
					<h5 class="card-title mb-1"><?= $ank->nama ?></h5>
					<p class="card-text mb-0">Tanggal Lahir : <?= $ank->tgl_lahir ?></p>
					<p class="card-text"><?= $ank->status ?></p>
				</div>
				<div class="card-footer text-muted">
					<button type="button" class="btn btn-info btn-sm me-2" onclick="edit(<?= $ank->id ?>)">
						<i class="bi bi-pencil"></i>
						Edit
					</button><button type="button" class="btn btn-danger btn-sm" onclick="hapus(<?= $ank->id ?>)">
						<i class="bi bi-trash3"></i>
						Hapus
					</button>
				</div>
			</div>
		<?php endforeach ?>
	</div>

</div>
<!-- * App Capsule -->



<!-- TAMBAH ANAK  ----------------------------------------------------------------------------- -->
<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalForm" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data Anak</h5>
				<a href="#" onclick="batal_tambah()" data-bs-dismiss="modal">Batal</a>
			</div>
			<div class="modal-body">
				<div class="section mt-3 mb-5">

					<form class="needs-validation" novalidate autocomplete="off" id="formku" method="POST" action="<?= base_url() ?>data_anak/add_anak_aksi">

						<input type="hidden" id="id_karyawan" name="id_karyawan" value="<?= $karyawan['id']; ?>">

						<div class="form-group basic animated mb-2">
							<div class="input-wrapper">
								<label class="label" for="nama">Nama Lengkap</label>
								<input required type="text" class="form-control" id="nama" name="nama" autocomplete="off">
								<i class="clear-input">
									<ion-icon name="close-circle"></ion-icon>
								</i>
								<div class="invalid-feedback">Masukan nama lengkap anak.</div>
							</div>
						</div>

						<div class="form-group basic animated mb-2">
							<div class="input-wrapper">
								<label class="label" for="tgl_lahir">Tanggal Lahir</label>
								<input required type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" autocomplete="off" onfocus="(this.type='date')">
								<i class="clear-input">
									<ion-icon name="close-circle"></ion-icon>
								</i>
								<div class="invalid-feedback">Masukan tanggal lahir anak.</div>
							</div>
						</div>

						<div class="form-group basic animated mb-2">
							<div class="input-wrapper">
								<label class="label" for="status">Status</label>
								<input required type="text" class="form-control" id="status" name="status" autocomplete="off">
								<i class="clear-input">
									<ion-icon name="close-circle"></ion-icon>
								</i>
								<div class="invalid-feedback">Masukan status anak.</div>
							</div>
						</div>

						<div class="mt-4">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Modal Form -->


<!-- EDIT ANAK  ----------------------------------------------------------------------------- -->
<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalFormEdit" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data Anak</h5>
				<a href="#" onclick="batal_edit()" data-bs-dismiss="modal">Batal</a>
			</div>
			<div class="modal-body">
				<div class="section mt-3 mb-5">

					<form class="needs-validation" novalidate autocomplete="off" id="formku-edit" method="POST" action="<?= base_url() ?>data_anak/edit_anak_aksi">

						<input type="hidden" id="edit_id" name="edit_id">

						<div class="form-group basic animated mb-2">
							<div class="input-wrapper">
								<label class="label" for="nama">Nama Lengkap</label>
								<input required type="text" class="form-control" id="edit_nama" name="edit_nama" autocomplete="off">
								<i class="clear-input">
									<ion-icon name="close-circle"></ion-icon>
								</i>
								<div class="invalid-feedback">Masukan nama lengkap anak.</div>
							</div>
						</div>

						<div class="form-group basic animated mb-2">
							<div class="input-wrapper">
								<label class="label" for="tgl_lahir">Tanggal Lahir</label>
								<input required type="text" class="form-control" id="edit_tgl_lahir" name="edit_tgl_lahir" autocomplete="off" onfocus="(this.type='date')">
								<i class="clear-input">
									<ion-icon name="close-circle"></ion-icon>
								</i>
								<div class="invalid-feedback">Masukan tanggal lahir anak.</div>
							</div>
						</div>

						<div class="form-group basic animated mb-2">
							<div class="input-wrapper">
								<label class="label" for="status">Status</label>
								<input required type="text" class="form-control" id="edit_status" name="edit_status" autocomplete="off">
								<i class="clear-input">
									<ion-icon name="close-circle"></ion-icon>
								</i>
								<div class="invalid-feedback">Masukan status anak.</div>
							</div>
						</div>

						<div class="mt-4">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Modal Form -->


<!-- Dialog Hapus Data Anak -->
<div class="modal fade dialogbox" id="modalDialogHapus" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Hapus</h5>
			</div>
			<div class="modal-body" id="textConfirmHapus">
				Anda yakin menghapus data anak?
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">
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
<!-- * Dialog Hapus Data Anak -->


<script>
	function batal_tambah() {
		$('#formku').removeClass('was-validated')
		$('#formku').trigger("reset");
		$('#tgl_lahir').attr("type", "text");
	}

	function batal_edit() {
		$('#formku-edit').trigger("reset");
		$('#formku-edit').removeClass('was-validated')
	}


	function edit(id) {
		$.ajax({
			type: "GET",
			url: "<?= base_url() ?>data_anak/edit_anak/" + id,
			dataType: 'JSON',
			success: function(response) {
				$('#edit_id').val(response.id);
				$('#edit_nama').val(response.nama);
				$('#edit_tgl_lahir').val(response.tgl_lahir);
				$('#edit_status').val(response.status);

				$('#ModalFormEdit').modal('toggle');
			}
		})
	}


	function hapus(id) {
		$('#btn-do-hapus').attr('href', '<?= base_url(); ?>data_anak/delete_anak/' + id);
		$('#modalDialogHapus').modal('toggle');
	}





	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>
