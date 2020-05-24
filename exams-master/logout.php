<?php
session_start();
     unset($_SESSION['sid']);
     unset($_SESSION['obid']); 
     unset($_SESSION['mid']);
     unset($_SESSION['aid']);  
      session_destroy();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged out</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body style="background-color:rgb(247, 220, 111 );">
	<header class="header">
	<nav class="navbar   ">
		<div class="container">
			<div class="navbar-header">
				<a href=""><img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f8/Amrita-vishwa-vidyapeetham-color-logo.png/330px-Amrita-vishwa-vidyapeetham-color-logo.png"></a> 
			</div>
		</div>
	</nav>
</header>

<div align="center">
	<form method="post"><br><br><br><br>
		<label><h1 style="text-align: center;font-size: 50px"><b>YOU HAVE BEEN SUCCESSFULLY LOGGED OUT</b></h1></label>
	</form>
</div>
</body>
</html>