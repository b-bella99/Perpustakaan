<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Data Buku</h5><br>
							
							<font color="orange">
								<?php echo $this->session->flashdata('hasil');?>
							</font>

							<p class="font-14"> <br><a class="btn btn-primary" href="<?php echo base_url();?>admin/tambahbuku">Tambah Data Baru</a></p>
						</div>
					</div>
					<div class="row">
						<table class="table table-striped table-bordered" id="buku"> <!-- -->
							<thead>
								<tr>
									<th>Kode</th>
									<th>Judul</th>
									<th>Jumlah Halaman</th>
									<th>Pengarang</th>
									<th>Penerbit</th>
									<th>Tahun Terbit</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
					                foreach($buku as $p){?>
					                    <tr>
					                    	<td class="table-plus"><?= $p['kode']; ?></td>
					                        <td><?= $p['judul']; ?></td>
					                        <td><?= $p['jumlah_hal']; ?></td>
					                        <td><?= $p['pengarang']; ?></td>
					                        <td><?= $p['penerbit']; ?></td>
					                        <td><?= $p['tahun_terbit']; ?></td>
					                        <td>
												<div class="dropdown">
													<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
														<i class="fa fa-ellipsis-h"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" disabled href="<?= base_url();?>admin/detailbuku/<?= $p['kode'];?>"><i class="fa fa-eye"></i> Detail</a>
														<a class="dropdown-item" disabled href="<?= base_url();?>admin/editbuku/<?= $p['kode'];?>"><i class="fa fa-pencil"></i> Edit</a>
														<a class="dropdown-item" href="<?= base_url();?>admin/hapusbuku/<?= $p['kode'];?>"><i class="fa fa-trash"></i> Delete</a>
													</div>
												</div>
											</td>
					                    </tr>
					            <?php } ?>
							</tbody>
						</table>
					</div>
				</div>

				<!-- Simple Datatable End -->

			</div>

		</div>
	</div><br><br><br><br>
	<script type="text/javascript">
		$(document).ready(function() {
		  	$('#buku').DataTable();
		});
	</script>
</body>
</html>