<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style-head-side.css">
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
		<h2>Peminjaman</h2>
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
				<td><input type="text" name="id" class="input"></td>
			</tr>
			<tr>
				<td>Nama Member</td>
				<td>:</td>
				<td class="output"></td>
			</tr>
		<table>
		<br>
		<button class="tombolbiru"><i class="fa fa-plus"></i>Tambah</button>
		<br>
		<div id="tambahdvd">
			<div>
				<p>Kode DVD</p>
				<p>:</p>
				<p><input type="text" name="no" class="input"></p>	
			</div>
		</div>
		<table class="table">
			<tr>
				<br>
				<th>No.</th>
				<th>ID DVD</th>
				<th>Nama DVD</th>
				<th>Lama Sewa</th>
				<th>Biaya Sewa</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4" style="text-align: right;">Total</td>
				<td></td>
			</tr>
		</table>
		<div class="submit" align="right">
		<button class="tombolmerah">Batal</button>
		<button class="tombolbiru">Lanjut</button>
	</div>
	<script>
		peminjaman();
	</script>
</body>
</html>