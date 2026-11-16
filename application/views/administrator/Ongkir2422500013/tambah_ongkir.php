<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 align-items-center">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark font-weight-bold">
						<i class="fas fa-tags mr-2 text-primary"></i> Ongkir
					</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
						<li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Ongkir2422500013') ?>">Ongkir</a></li>
						<li class="breadcrumb-item active">Tambah Ongkir</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div><!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title font-weight-bold" style="font-size: 1.5rem;">
								<i class="fas fa-plus-circle mr-2 text-primary"></i>Tambah Ongkir
							</h3>
							<br><br>
							<hr>

							<form method="post">
								<div class="mb-3">
									<label for="nama_ekspedisi013" class="form-label">Nama Ekspedisi</label>
									<select name="nama_ekspedisi013" id="nama_ekspedisi013" class="form-control" required>
										<option>-- Pilih Nama Ekspedisi --</option>
										<option value="JNE">JNE</option>
										<option value="JNT">JNT</option>
										<option value="Lainnya">Lainnya</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="jenis_layanan013" class="form-label">Jenis Layanan</label>
									<select name="jenis_layanan013" id="jenis_layanan013" class="form-control" required>
										<option>-- Pilih Jenis Layanan --</option>
										<option value="Reguler">Reguler</option>
										<option value="Express">Express</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="tarif_per_kg013" class="form-label">Tarif per Kg</label>
									<input type="text" class="form-control" name="tarif_per_kg013" id="tarif_per_kg013" placeholder="Tarif per Kg" required>
								</div>

								<div class="mb-3">
									<label for="status013" class="form-label">Status</label>
									<select name="status013" id="status013" class="form-control" required>
										<option>-- Status --</option>
										<option value="Aktif">Aktif</option>
										<option value="Tidak Aktif">Tidak Aktif</option>
									</select>
								</div>

								<button type="submit" class="btn btn-primary"> Tambah</button>
								<a href="<?= base_url('admin/Ongkir2422500013') ?>" class="btn btn-danger"> Kembali</a>
							</form>
						</div>
					</div>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->