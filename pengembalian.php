<!DOCTYPE html>
<html>
<head>
	<title>Pengembalian</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style-head-side.css">
	<link rel="stylesheet" type="text/css" href="css/style-content.css">
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<script src="js/utill.js"></script>
</head>
<body>

	<?php 
		include "navigasi.php"; 
		include "side.php";
	?>

	<div id="content">
		<h2>Pengembalian</h2>
		<hr>
		<table class="info">
			<tr>
				<td>No.</td>
				<td>:</td>
				<td><input type="text" name="no" class="input"></td>
			</tr>
			<tr>
				<td>ID Member</td>
				<td>:</td>
				<td class="output"> </td>
			</tr>
			<tr>
				<td>Nama Member</td>
				<td>:</td>
				<td class="output"> </td>
			</tr>
		</table>
		<br>
		<table class="table">
			<tr>
				<th>No.</th>
				<th>ID DVD</th>
				<th>Nama DVD</th>
				<th>Tanggal Kembali</th>
				<th>Keterlambatan</th>
				<th>Denda</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td style="border:none;"><i class="fa fa-check-circle" style="color: grey;"></i></td>
			</tr>
			
		</table>
		<table>
			<tr>
				<td><i class="fa fa-check-circle" style="color: green;"></i></td>
				<td>:</td>
				<td>Sudah Dikembalikan</td>
			</tr>
			<tr>
				<td><i class="fa fa-check-circle" style="color: grey;"></i></td>
				<td>:</td>
				<td>Belum Dikembalikan</td>
			</tr>
		</table>
		<div class="submit" align="right">
				<td><button class="tombolmerah">Batal</button></td>
				<td><button class="tombolbiru">Lanjut</button></td>
		</div>
	</div>
</body>
</html>