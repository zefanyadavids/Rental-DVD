<!DOCTYPE html>
<html>
<head>
	<title>Perpanjangan</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style-head-side.css">
	<link rel="stylesheet" type="text/css" href="../css/style-content.css">
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
		<h2>Perpanjangan</h2>
		<hr>
		<table class="info-input">
			<colgroup>
				<col width="120px" />
				<col width="30px" />
				<col width="600px" />
			</colgroup>
			<tr>
				<td>No.</td>
				<td>:</td>
				<td><input type="text" name="no" class="input"></td>
			</tr>
			<tr>
				<td>ID Member</td>
				<td>:</td>
				<td class="output"></td>
			</tr>
			<tr>
				<td>Nama Member</td>
				<td>:</td>
				<td class="output"></td>
			</tr>
		</table>
		<br>
		<table class="table">
			<tr>
				<th>No.</th>
				<th>Id DVD</th>
				<th>Nama DVD</th>
				<th>Lama Sewa</th>
				<th>Biaya Sewa</th>
				<th style="border:none; background-color: #fff;"></th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td style="border:none;"><button class="tombolbiru">Perpanjang</button></td>
			</tr>
			<tr>
				<td colspan="4" style="text-align: right;">Total</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4" style="border: none;"></td>
				<td style="border: none;" align="right"><button class="tombolmerah">Batal</button><button class="tombolbiru">Selesai</button></td>
			</tr>
		</table>
	</div>
	<script>
		perpanjangan();
	</script>
</body>
</html>