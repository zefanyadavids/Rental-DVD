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
		include "user-navigasi.php"; 
		include "user-side.php";
	?>
	<div id="content">
		<div style="text-align: center; font-weight: bold; " >
		<table style="background-color: #276c95; width: 100%; ">
			<tr>
				<td>DVD</td>
			</tr>
			<tr>
				<td><i>350 items</i></td>
			</tr>
		</table>
		</div>
		<div class="pencarian">
			<input type="text" name="search" id="search">
			<button class="button-1"><i class="fa fa-search"></i></button>
		<!--  -->
		</div>
		<br>
		<div class="data">
			<table style="width: 100%;">
				<tr>
					<th class="col-2" width="3%;">No.</th>
					<th class="col-2" width="5%">Kode DVD</th>
					<th class="col-2">Nama DVD</th>
					
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					
				</tr>
			</table>
		</div>
	</div>
	<script>
		datadvd();
	</script>
</body>
</html>