<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:rgb(246, 220, 115 );">

	<header class="header">
	<nav class="navbar   ">
		<div class="container">
			<div class="navbar-header">
				<a href=""><img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f8/Amrita-vishwa-vidyapeetham-color-logo.png/330px-Amrita-vishwa-vidyapeetham-color-logo.png"></a> 
				<form method="post">
		<h3><p style="float:right">
		<a href="logout.php">LOGOUT</a>
		</p>
		</h3>
		
		
	</form>



				<div class="container">
					<h1 align="center"  style="color:red;"><b>WELCOME ADMIN</b><hr></h1>
						<div class="row">
							<div class="col-sm-4">
								<a href="adddepartment.php"><img src="https://image.flaticon.com/icons/png/512/124/124642.png"  width="75" height="75"><br><h2 style="color:green;">Add New Department</h2></a>
							
							</div>
							<div class="col-sm-4">
								<a href="addstaff.php"><img src="https://www.svgrepo.com/show/82098/female-teacher.svg"  width="75" height="75"><br><h2  style="color:green;">Add New Staff</h2></a>
							
							</div>
							<div class="col-sm-4">
								<a href="addstudent.php" ><img src="https://image.flaticon.com/icons/svg/57/57073.svg"  width="75" height="75"><br><h2  style="color:green;">Add New Student</h2></a>
							
							</div>

							<div class="col-sm-4"><br><br><br>
								<a href="addcourse.php" ><img src="https://image.flaticon.com/icons/png/512/46/46881.png"  width="75" height="75"><br><h2  style="color:green;" >Add New Course</h2></a>
							
							</div>
				
				</div>  
</div>


	<div>



</body>
</html>