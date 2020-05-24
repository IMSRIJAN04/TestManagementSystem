<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Staff</title>
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\exams-master\styling.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style >
		form{
			
			width: 400px;
			margin-left: 550px;
			color: green;
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

<h1 align="center" style="color:red;" style="font-family: sans-serif;">ADD NEW COURSE</h1>


	<div>
		<form method="post">
			<label>Enter the name of Course</label>
			<input type="text" name="name"><br>
			<label>Enter the department name</label>
			<select name="department" required>
  <option value="CSE">CSE</option>
  <option value="EEE">EEE</option>
  <option value="ECE">ECE</option>
  <option value="MEE">MEE</option>
  <option value="CIV">CIV</option>
  <option value="OTHER">OTHER</option>
</select><br><BR>
<input type="submit" value="Add" name="add"><br><BR>

<a href="admindash.php">Go Back to Main Menu</a>
		</form>
	</div>
<?php 
	 include('database.php');
	 if(isset($_POST['add']))
	 {
		$_SESSION['name']=$_POST['name'];
		
		
		$check=$_POST['department'];
		if ($check == "CSE") {
			$dno = 1;
		}
		elseif ($check == "EEE") {
			$dno = 2;
		}
		elseif ($check == "ECE") {
			$dno = 3;
		}
		elseif ($check == "MEE") {
			$dno = 4;
		}
		elseif ($check == "CIV") {
			$dno = 5;
		}
		elseif ($check == "OTHER") {
			$dno = 6;
		}
		$_SESSION['dno'] = $dno;
       
        echo "
          <script>
         
          window.location='confirm.php';
          </script>
          ";
	
		
	 }
    ?>
</body>
</html>