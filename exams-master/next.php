<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Questions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>form{
			
			width: 400px;
			margin-left: 550px;
			margin-top: 100px;
			color: green;
			font-size: 20px;
			;

		}</style>
		<style>
			form {
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
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

	<h1 align="center" style="color:red;" style="font-family: sans-serif;">Creating Exam Code</h1>
	<form align="center" method="post">
		<label >Code For Test</label>
		<div><input type="text" name="code" required ><br></div>

<label>Date</label>
<div><input type="date" name="date" required><br></div>
<br>


<input type="submit" name="s2" value="create">
	</form>
<?php
include('database.php');
$one=1;
$_SESSION['qno']=0;
	 if(isset($_POST['s2']))
	 {
	 	$cid=$_SESSION['cid'];
	 	$date=$_POST['date'];
	 	$code=$_POST['code'];
	 	$now=1;
	 	$start=0;
	 	$sql="INSERT INTO test(`cid`,`date`,`start`,`code`,`now`) VALUES ('$cid','$date','$start','$code','$now')";
        $result= mysqli_query($con,$sql);
       
          echo "
          <script>
          alert('Addition Successful');
          window.location='ques.php';
          </script>
          ";
	 }
	 
  ?>
</body>
</html>