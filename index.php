<!DOCTYPE html>
<html>
<head>
	<title>Menu Login</title>
	<style type="text/css">
		body{ 
			background-color: #276c95;
			font-size: 30px;
			font-family: arial; }
		.imglogo{
   			text-align: center;
    		margin: 40px 0;
    	}
    	img{ width: 250px; }
    	label {
			text-align: center;
			text-decoration: none;}
    	#login{ 
    		background-color: white;
    		padding: 90px 100px;
    		width: 25%;
    		border-radius: 20px;
   
    	}
    	input[type=text], input[type=password] {
		  	width: 100%;
		    padding: 10px 10px;
		    margin: 8px 0 30px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		    font-size: 25px;
		}
		div div input[type=submit]{
		    font-size: 25px;
		    background-color: #276c95;
		    color: white;
		    padding: 14px 20px;
		    margin: 0px 0;
		    border-radius: 10px;
		    cursor: pointer;
		    width: 150px;
		}
		#login #guest{	
			margin-top: 100px;
			width: 100%;
			color: white;
			font-weight: bold;
		}
		input[type=submit]:hover {
    		opacity: 0.8;
		}
		p{
			color: white;
			margin-top: 50px; 
			text-align: center;
			font-size: 30px;
		}

		p:hover{
			font-size: 50px;
		}
	</style>
</head>
<body>
<<<<<<< HEAD
	<form method="POST">
		<div class="imglogo">
			<img src="img/Logo.png" alt="Avatar">
		</div>
		<div align="center">
		<div id="login" align="left">
			<label for="user">Username</label>
			<input type="text" name="username"></input>
			<br/>
			<label for="pass">Password</label>
			<input type="password" name="password"></input>
			<br/><br/>		
			<div align="right">
				<a href="home/home.php"><input type="submit" value="Login"></input></a>
			</div>
				<input id="guest" type="submit" value="Guest Login"></input>
		</div>
		</div>
	</form>
	<p><strong>MAKE YOUR TIME USEFUL</strong><br/><strong>Copyright</strong> by DIY</p>
	<?php header("location:home/home.php") ?>
=======

<?php 
	include "navigasi.php"; 
	include "side.php";
	header("location:peminjaman/peminjaman.php")
?>
>>>>>>> zefanyadavids
</body>
</html>