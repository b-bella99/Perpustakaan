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
									<li class="breadcrumb-item active" aria-current="page">Detail Data Buku</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<?php foreach ($buku as $b) {?>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Buku <?= $b['kode']; ?></h4><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered" id="buku" width="80%" align="center">
								<tbody>
									<tr>
										<th>Kode</th>
										<td>:</td>
										<td><?= $b['kode']; ?></td>
									</tr>
									<tr>
										<th>Judul</th>
										<td>:</td>
										<td><?= $b['judul']; ?></td>
									</tr>
									<tr>
										<th>Jumlah Halaman</th>
										<td>:</td>
										<td><?= $b['jumlah_hal']; ?></td>
									</tr>
									<tr>
										<th>Pengarang</th>
										<td>:</td>
										<td><?= $b['pengarang']; ?></td>
									</tr>
									<tr>
										<th>Penerbit</th>
										<td>:</td>
										<td><?= $b['penerbit']; ?></td>
									</tr>
									<tr>
										<th>Tahun Terbit</th>
										<td>:</td>
										<td><?= $b['tahun_terbit']; ?></td>
									</tr>
									<tr>
										<td colspan ="3" align="center"><p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>admin/buku">Kembali</a></p></td>
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