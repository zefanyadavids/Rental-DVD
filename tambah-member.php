<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style-head-side.css">
	<link rel="stylesheet" type="text/css" href="css/style-content.css">
	<link rel="stylesheet" type="text/css" href="css/style-data.css">
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<script src="js/utill.js"></script>
	<script src="js/effect.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<?php 
		include "navigasi.php"; 
		include "side.php";
	?>
	<div id="content">
		<?php
			include "navigasi-data.php";
			
		?>
		<div class="pencarian">
			<input type="text" name="search" id="search">
			<button class="button-1"><i class="fa fa-search"></i></button>
		<!--  -->
		</div>
		<br>
		<div class="data">
			<table>
		<tr>
			<td>ID Member</td>
			<td>:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>:</td>
			<td><input type="text" name="call"></td>
		</tr>
		<tr>
			<td>Batal</td>
			<td>Tambah Member</td>
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