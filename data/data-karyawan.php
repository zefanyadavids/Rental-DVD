<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style-head-side.css">
	<link rel="stylesheet" type="text/css" href="../css/style-content.css">
	<link rel="stylesheet" type="text/css" href="../css/style-data.css">
	<link rel="stylesheet" href="../css/fontawesome-all.css">
	<script src="../js/utill.js"></script>
	<script src="../js/effect.js"></script>
	<script src="../js/jquery.min.js"></script>
</head>
<body>
	<?php 
		include "../navigasi.php"; 
		include "../side.php";
	?>
	<div id="content">
		<?php
			include "navigasi-data.php";
			
		?>
		<div class="pencarian">
			<input type="text" name="search" id="search" placeholder=" search Karyawan">
			<button class="button-1"><i class="fa fa-search"></i></button>
		<!--  -->
		</div>
		<br>
		<div class="data">
			<table>
				<tr>
					<th class="col-2">No.</th>
					<th class="col-2">ID Karyawan</th>
					<th class="col-2">Nama Karyawan</th>
					<th colspan="3" style="border: none;">
						<a href="data-karyawan-tambah.php"><button class="tombolbiru"><i class="fa fa-plus"></i>Tambah Karyawan</button></a>
					</th>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td style="border: none;">
						<a href="data-karyawan-detail.php"><button class="tombolbiru">Detail</button></a>
					</td>
					<td style="border: none;">
						<a href="data-karyawan-edit.php"><button class="tombolbiru">Edit</button></a>
					</td>
					<td style="border: none;"><button class="tombolmerah">Delete</button></td>
				</tr>
			</table>
		</div>
	</div>
	<script>
		data();
		datakaryawan();
	</script>
</body>
</html>