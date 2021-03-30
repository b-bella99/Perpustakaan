	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?php echo base_url();?>admin/dashboard">
				<img src="<?php echo base_url();?>assets/admin/src/images/logo_Admin.png" alt="" class="mobile-logo" width = 150 height = 100>
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="<?php echo base_url();?>admin/dashboard" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-group"></span><span class="mtext">Member</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/member">Data Member</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-address-book-o"></span><span class="mtext">Peminjaman</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/peminjaman">Data Peminjaman</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-book"></span><span class="mtext">Buku</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/buku">Data Buku</a></li>
						</ul>
					</li>
					<!--<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-line-chart"></span><span class="mtext">Detail Peminjaman</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/tbl_detailpeminjaman">Data Detail Peminjaman</a></li>
						</ul>
					</li>-->
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-book"></span><span class="mtext">Petugas</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/petugas">Data Petugas</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>