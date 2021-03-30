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
								<h4>Detail Data Peminjaman</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Peminjaman</li>
									<li class="breadcrumb-item active" aria-current="page">Detail Data Peminjaman</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<?php foreach($peminjaman as $p){?>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Peminjaman <?= $p['kode']; ?></h4><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered" id="member" width="80%" align="center">
								<tbody>
									<tr>
										<th>Kode Peminjaman</th>
										<td>:</td>
										<td><?= $p['kode']; ?></td>
									</tr>
									<tr>
										<th>Tanggal Pinjam</th>
										<td>:</td>
										<td><?= $p['tgl_pinjam']; ?></td>
									</tr>
									<tr>
										<th>Tanggal Harus Kembali</th>
										<td>:</td>
										<td><?= $p['tgl_harus_kembali']; ?></td>
									</tr>
									<tr>
										<th>Tanggal Pengembalian</th>
										<td>:</td>
										<td><?= $p['tgl_kembali']; ?></td>
									</tr>
									<tr>
										<th>Nomor Anggota</th>
										<td>:</td>
										<td><?= $p['no_anggota']; ?></td>
									</tr>
									<tr>
										<th>ID Petugas</th>
										<td>:</td>
										<td><?= $p['id_petugas']; ?></td>
									</tr>
									<tr>
										<td colspan ="3" align="center"><p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>admin/peminjaman">Kembali</a></p></td>
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