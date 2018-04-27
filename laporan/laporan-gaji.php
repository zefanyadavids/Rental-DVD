<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="../css/style-head-side.css">
	<link rel="stylesheet" type="text/css" href="../css/style-laporan.css">
	<link rel="stylesheet" type="text/css" href="../css/style-content.css">
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
		include "navigasi-laporan.php";
	?>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>ID Karyawan</th>
			<th>Nama Karyawan</th>
			<th>Gaji</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	</div>
	<script>
		laporan();
		laporangaji();
	</script>
</body>
</html>