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
								<h4>Member</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Member</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Data Member</h5><br>

							<font color="orange">
								<?php echo $this->session->flashdata('hasil');?>
							</font>
							
							<br><p class="font-14"><br> <a class="btn btn-primary" href="<?php echo base_url();?>admin/tambahmembers">Tambah Data Baru</a></p>
						</div>
					</div>
					<div class="row">
						<table class="table table-striped table-bordered" id="member">
							<thead>
								<tr>

									<th>Nomor</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Tanggal Lahir</th>
									<th>Tempat Lahir</th>
									<th>No Telepon</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
					                foreach($anggota as $m){?>
					                    <tr>
					                        <td class="table-plus"><?= $m['nomor']; ?></td>
					                        <td><?= $m['nama']; ?></td>
					                        <td><?= $m['alamat']; ?></td>
					                         <td><?= $m['tgl_lahir']; ?></td>
					                         <td><?= $m['tempat_lahir']; ?></td>
					                        <td><?= $m['nomor_telp']; ?></td>
					                        <td>
												<div class="dropdown">
													<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
														<i class="fa fa-ellipsis-h"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" disabled href="<?= base_url();?>admin/editmember/<?= $m['nomor'];?>"><i class="fa fa-pencil"></i> Edit</a>
														<a class="dropdown-item" href="<?= base_url();?>admin/hapusmember/<?= $m['nomor'];?>"><i class="fa fa-trash"></i> Delete</a>
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
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		  	$('#member').DataTable();
		});
	</script>
</body>
</html>