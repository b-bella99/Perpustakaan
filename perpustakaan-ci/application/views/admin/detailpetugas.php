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
									<li class="breadcrumb-item active" aria-current="page">Detail Data Petugas</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<?php foreach ($petugas as $p) {?>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Petugas <?= $p['id']; ?></h4><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered" id="petugas" width="80%" align="center">
								<tbody>
									<tr>
										<th>ID</th>
										<td>:</td>
										<td><?= $p['id']; ?></td>
									</tr>
									<tr>
										<th>Nomor KTP</th>
										<td>:</td>
										<td><?= $p['nomor_ktp']; ?></td>
									</tr>
									<tr>
										<th>Nama</th>
										<td>:</td>
										<td><?= $p['nama']; ?></td>
									</tr>
									<tr>
										<th>Alamat</th>
										<td>:</td>
										<td><?= $p['alamat']; ?></td>
									</tr>
									<tr>
										<th>Nomor Telepon</th>
										<td>:</td>
										<td><?= $p['nomor_telp']; ?></td>
									</tr>
									
									<tr>
										<td colspan ="3" align="center"><p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>admin/petugas">Kembali</a></p></td>
									</tr>
								</tbody>
							</table>
						</form>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>