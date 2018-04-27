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
		<table class="info-input">
			<colgroup>
				<col width="120px" />
				<col width="30px" />
				<col width="600px" />
			</colgroup>
			<tr>
				<td>ID Member</td>
				<td>:</td>
				<td><input type="text" name="id" class="input"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td class="output"></td>
			</tr>
		<table>
		<br>
		<button class="tombolbiru" onclick="showformpinjam();"><i class="fa fa-plus"></i>Peminjaman</button>
		<br>
		<div >
			<table id="tambah-peminjaman" class="info-input" style="background-color: #eee; border-radius: 10px;">
				<colgroup>
					<col width="20px" />
					<col width="120px" />
					<col width="30px" />
					<col width="430px" />
				</colgroup>
				<tr>
					<td></td>
					<td>Kode DVD</td>
					<td>:</td>
					<td><input type="text" name="no" class="input"></td>
				</tr>
				<tr>
					<td></td>
					<td>Judul DVD</td>
					<td>:</td>
					<td class="output"></td>
				</tr>
				<tr>
					<td></td>
					<td>Tersedia</td>
					<td>:</td>
					<td class="output"></td>
				</tr>
				</tr>
					<td colspan="3" style="border: none;"></td>
					<td style="border: none;" align="right">
						<button class="tombolmerah" onclick="hideformpinjam();">Batal</button>
						<button class="tombolbiru" onclick="hideformpinjam();">Pinjam</button>
					</td>
				</tr>
			<table>
		</div>
		<br>
		<br>
		<table class="table">
			<tr>
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
			<tr>
				<td colspan="4" style="text-align: right;">Total</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4" style="border: none;"></td>
				<td style="border: none;" align="right">
					<button class="tombolmerah">Batal</button>
					<button class="tombolbiru">Lanjut</button>
				</td>
			</tr>
		</table>
	<script>
		peminjaman();
		hideformpinjam();
	</script>
</body>
</html>