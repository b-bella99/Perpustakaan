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
								<h4>Member</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Member</li>
									<li class="breadcrumb-item active" aria-current="page">Edit Data Member</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Form Edit Data Member</h4><br>
							<p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>admin/member">Kembali</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<?php if (validation_errors()):?> 
			                    <div class="alert alert-danger" role="alert">
			                        <?= validation_errors(); ?>
			                    </div>
                			<?php endif ?>

                			<?php echo form_open_multipart('admin/updatemember'); ?>
                			<?php foreach($anggota as $m):?>
                			<?php echo form_hidden('nomor', $m['nomor']); ?>
							<form action = "" method = "post">
							<table class="table table-bordered" id="anggota" width="80%" align="center">
								<tbody>

									<tr>
										<th>Nomor</th>
										<td>:</td>
										<td><input type="text" name="nomor" id="nomor" class="form-control" value="<?= $m['nomor']; ?>" disabled></td>
									</tr>
									<tr>
										<th>Nama</th>
										<td>:</td>
										<td><input type="text" name="nama" id="nama" class="form-control" value="<?= $m['nama']; ?>"></td>
									</tr>
									<tr>
										<th>Alamat</th>
										<td>:</td>
										<td><input type="text" name="alamat" id="alamat" class="form-control" value="<?= $m['alamat']; ?>"></td>
									</tr>
									<tr>
										<th>Tanggal Lahir</th>
										<td>:</td>
										<td><input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"value="<?= $m['tgl_lahir']; ?>"></td>
									</tr>
									<tr>
										<th>Tempat Lahir</th>
										<td>:</td>
										<td><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?= $m['tempat_lahir']; ?>"></td>
									</tr>
									<tr>
										<th>No Telepon</th>
										<td>:</td>
										<td><input type="number" name="nomor_telp" id="nomor_telp" class="form-control" value="<?= $m['nomor_telp']; ?>"></td>
									</tr>
									<tr>
										<td colspan="3"><button type = "submit" id="submit" name = "submit" class = "btn btn-primary float-right"> Edit </button></td>
									</tr>
										  <?php endforeach; ?>
								</tbody>
							</table>
						</form>
						<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>