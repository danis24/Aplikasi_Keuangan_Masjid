<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Manajemen Keuangan Masjid</title>
	<link type="text/css" href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="assets/css/theme.css" rel="stylesheet">
	<link type="text/css" href="assets/images/icons/css/font-awesome.css" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		APLIKASI MANAJEMEN KEUANGAN MASJID (AMKM)
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Selamat Datang, Danis Yogaswara
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Profile</a></li>
								<li><a href="#">Pengaturan Akun</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<?php include "menu.php";?>

					</div>
				</div>


				<div class="span9">
					<?php include "isi.php";?>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2015 Danis Yogaswara </b> All rights reserved.
		</div>
	</div>

	<script src="assets/scripts/jquery-1.9.1.min.js"></script>
	<script src="assets/scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>