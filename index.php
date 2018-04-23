<!DOCTYPE html>
<html>
<head>
	<title>Kita Kita | Point of Sales</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style-head-side.css">
	<script src="js/utill.js"></script>
</head>
<body>

<?php 
	include "navigasi.php"; 
	include "side.php";
?>

<div id="content" style="height: 1000px;">
	<?php
		if(isset($_GET["data"])) {
			include "data.php";
		} else if(isset($_GET["pengembalian"])) {
			include "pengembalian.php";
		} else if(isset($_GET["perpanjangan"])) {
			include "perpanjangan.php";
		}
	?>
</div>

</body>
</html>