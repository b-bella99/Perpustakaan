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
								<h4>Buku</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Buku</li>
									<li class="breadcrumb-item active" aria-current="page">Tambah Data Buku</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Form Tambah Data Buku</h4><br>
							<p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>admin/buku">Kembali</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<?php if (validation_errors()):?> 
			                    <div class="alert alert-danger" role="alert">
			                        <?= validation_errors(); ?>
			                    </div>
                			<?php endif ?>
							<form action = "" method = "post" enctype="multipart/form-data">
							<table class="table table-bordered" id="buku" width="80%" align="center">
								<tbody>
									<tr>
										<th>Kode</th>
										<td>:</td>
										<td><input type="text" name="kode" id="kode" class="form-control"></td>
									</tr>
									<tr>
										<th>Judul</th>
										<td>:</td>
										<td><input type="text" name="judul" id="judul" class="form-control"></td>
									</tr>
									<tr>
										<th>Jumlah Halaman</th>
										<td>:</td>
										<td><input type="number" name="jumlah_hal" id="jumlah_hal" class="form-control"></td>
									</tr>
									<tr>
										<th>Pengarang</th>
										<td>:</td>
										<td><input type="text" name="pengarang" id="pengarang" class="form-control"></td>
									</tr>
									<tr>
										<th>Penerbit</th>
										<td>:</td>
										<td><input type="text" name="penerbit" id="penerbit" class="form-control"></td>
									</tr>
									<tr>
										<th>Tahun Terbit</th>
										<td>:</td>
										<td><input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control"></td>
									</tr>
									<tr>
										<td colspan="3"><button type = "submit" name = "submit" class = "btn btn-primary float-right"> Tambah </button></td>
									</tr>
								</tbody>
							</table>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>