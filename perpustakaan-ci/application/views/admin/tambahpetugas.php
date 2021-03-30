<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: #F0F5F7">
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Petugas</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Petugas</li>
									<li class="breadcrumb-item active" aria-current="page">Tambah Data Petugas</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Form Tambah Data Petugas</h4><br>
							<p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>admin/petugas">Kembali</a></p>
						</div>
					</div>
					<?php echo form_open_multipart('admin/tambahpetugas'); ?>
					<div class="row">
						<div class="col-md-6">
							<?php if (validation_errors()):?> 
			                    <div class="alert alert-danger" role="alert">
			                        <?= validation_errors(); ?>
			                    </div>
                			<?php endif ?>
							<form action = "" method = "post" enctype="multipart/form-data">
							<table class="table table-bordered" id="petugas" width="80%" align="center">
								<tbody>
									<tr>
										<th>ID</th>
										<td>:</td>
										<td><input type="text" name="id" id="id" class="form-control"></td>
									</tr>
									<tr>
										<th>Nomor KTP</th>
										<td>:</td>
										<td><input type="text" name="nomor_ktp" id="nomor_ktp" class="form-control"></td>
									</tr>
									<tr>
										<th>Nama</th>
										<td>:</td>
										<td><input type="text" name="nama" id="nama" class="form-control"></td>
									</tr>
									<tr>
										<th>Alamat</th>
										<td>:</td>
										<td><input type="text" name="alamat" id="alamat" class="form-control"></td>
									</tr>
									<tr>
										<th>Nomor Telepon</th>
										<td>:</td>
										<td><input type="text" name="nomor_telp" id="nomor_telp" class="form-control"></td>
									</tr>
									
									<tr>
										<td colspan="3"><button type = "submit" id="submit" name = "submit" class = "btn btn-primary float-right"> Tambah </button></td>
									</tr>
								</tbody>
							</table>
						</form>
						</div>
					</div>
					<?php form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>