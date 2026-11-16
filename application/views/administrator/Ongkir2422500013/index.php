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
	                    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"> Home</a></li>
	                    <li class="breadcrumb-item active">Ongkir</li>
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
							<h5 class="card-title" style="font-size: 1.5rem;"><b>Data Ongkir</b></h5>
							<div class="clearfix"></div>
							<br>
							
							<!-- Tombol Tambah -->
							<a href="<?= base_url('admin/Ongkir2422500013/tambah') ?>" class="btn btn-labeled btn-primary mb-3">
								<span class="btn-label"><i class="fas fa-plus-circle"></i></span> Tambah Ongkir
							</a>

							<!-- Flashdata Message -->
							<?php if ($this->session->flashdata('message')) : ?>
								<?= $this->session->flashdata('message') ?>
							<?php endif ?>

							<!-- Tabel Data -->
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="width: 45px;" class="text-center">No.</th>
										<th class="text-center">Nama Ekspedisi</th>
										<th class="text-center">Jenis Layanan</th>
										<th class="text-center">Tarif per Kg</th>
										<th class="text-center">Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($list_ongkir as $ongkir2422500013) : 
									?>
										<tr data-widget="expandable-table" aria-expanded="false">
											<td class="text-center"><?= $no ?></td>
											<td class="text-center"><?= $ongkir2422500013['nama_ekspedisi013'] ?></td>
											<td class="text-center"><?= $ongkir2422500013['jenis_layanan013'] ?></td>
											<td class="text-center"><?= $ongkir2422500013['tarif_per_kg013'] ?></td>
											<td class="text-center"><?= $ongkir2422500013['status013'] ?></td>
											<td class="text-center">
											   <a href="<?= base_url('admin/Ongkir2422500013/ubah/') ?><?= $ongkir2422500013['id_ongkir013'] ?>">
											        <span class="badge bg-success"><i class="fas fa-edit"></i> Ubah</span>
											   </a>
											   &nbsp;&nbsp;
											   <a href="<?= base_url('admin/Ongkir2422500013/hapus/') ?><?= $ongkir2422500013['id_ongkir013'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
											        <span class="badge bg-danger"><i class="fas fa-trash"></i> Hapus</span>
											   </a>
											</td>
										</tr>
									<?php 
										$no++; 
									endforeach 
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
</div>