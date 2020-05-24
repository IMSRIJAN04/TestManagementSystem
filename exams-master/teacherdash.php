<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher Dashboard</title>
	<link rel="stylesheet" href="teacherdashcss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	<style >
		form{
			
			width: 900px;
			margin-top: 100px; 
			margin-left: 350px;
			color: green;
			padding: 50px;
			font-size: 25px;
			border-left-color: blue;

		}
	</style>
</head>
<body style="background-color:rgb(246, 220, 115 );">

	<header class="header">
	<nav class="navbar   ">
		<div class="container">
			<div class="navbar-header">
				<a href=""><img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f8/Amrita-vishwa-vidyapeetham-color-logo.png/330px-Amrita-vishwa-vidyapeetham-color-logo.png"></a> 
			</div>
		</div>
	</nav>
</header>
<h1 style="text-align: center;font-size: 60px"><b>Welcome Teacher</b></h1>
<div>
	<form method="post">
		
		<a style="border-style: outset;color: black; padding: 15px;  background-color: lightgrey;
"  style="float:right" href="quiz.php">Create new Test</a>
		<a style="border-style: outset;color: black; padding: 15px;  background-color: lightgrey;
"  style="float:right" href="open.php">Open test</a>
		<a style="border-style: outset;color: black; padding: 15px;  background-color: lightgrey;
"  style="float:right" href="close.php">close test</a>
		<a style="border-style: outset;color: black; padding: 15px;  background-color: lightgrey;
"  style="float:right" href="result.php">view result</a><br><br><br>
		<p style="border-style: outset;color: black; padding: 15px;width: 200px;text-align: center;"  style="float:right">

		<a href="logout.php">LOGOUT</a>
		</p>
		
		
		
	</form>
</div>
</body>
</html>