<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		header("location:admin.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="img/Logo.jpg">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link href="fonts/css/all.css" rel="stylesheet">
	<title>index</title>
</head>
<body class="text-center">
	<b>
		<form action="proses_login.php" method="POST">
			<h2 align="center" class="tulisan_login">Login Admin</h2>
			<img src="img/Logo.jpg"><br>
			<div class="php">
				<?php 
				if (isset($_COOKIE["message"])) {
					echo $_COOKIE["message"];
				}
				?>		
			</div>
			
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			
			<div class="form-group"> 
				<input type="password" name="password" class="form-control" placeholder="Password">	</div>
				<br>
				<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign In</button>

				<a class="float-right" href="home.php">Back&emsp;<i class="fas fa-arrow-right"></i></a>
			</form>
			<script src="../assets/js/jquery.js" ></script>
			<script src="../assets/js/popper.js"></script>
			<script src="../assets/js/bootstrap.js"></script>

		</body>
		</html>
		<style type="text/css">
			form a{
				margin-top: 30px;
				font-size: 20px;
			}
			form a:hover{
				text-decoration: none;
				
			}
			*{
				padding: 0px;
				margin: 0px;
				font-family: sans-serif;

			}
			.tulisan_login{
				margin-top: -50px;
			}
			.php{
				color: red;
				font-size: 15px;
			}
			body{
				background-color: orange;
			}
			img{
				height: 100px;
				width: 150px;
				margin-top: 10px;
				margin-bottom: 20px;
			}
			form{
				box-sizing: border-box;
				width: 450px;
				height: 450px;
				padding: 70px;
				font-size: 12pt;
				margin: 80px auto;
				background-color: white;
			}

			input{
				height: 30px;
				width: 260px;
				text-align: center;
				border-radius: 5px;
				border: 2px solid black;
				background-color: rgba(255, 255, 255, 0.4);
				font-size: 17px;
			}
			.kirim{
				width: 260px;
				height: 30px;
				text-align: center;
				background-color: black;
				color: white;
				font-size: 17px;
				border: 2px solid black;
				border-radius: 5px;
				margin-top: 20px;	
			}
		</style>