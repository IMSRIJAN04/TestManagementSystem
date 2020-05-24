<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Department</title>
	

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		
</head>
<body style="background-color:rgb(246, 220, 115 );">

<header class="header">
	<nav class="navbar   ">
		<div class="container">
			<div class="navbar-header">
				<a href=""><img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f8/Amrita-vishwa-vidyapeetham-color-logo.png/330px-Amrita-vishwa-vidyapeetham-color-logo.png"></a> 



	<h1 align="center" style="color:red;" style="font-family: sans-serif;">CREATE NEW DEPARTMENT</h1>
	<div class="container"><br><br><br><br><br>
		<div class="row row style">
			<div >
					
		</div>	
		<form align="center" method="post">
			<label ><h2 align="center" style="color:green"  >Enter the Name of the New Department</h2></label>
			<div>
			<input align="center" type="text" name="dname" required>
			<input align="center" type="submit" value="create"  class="btn btn-success" name="create"><br>
			</div>
		</form>
	  </div>

				</div>
				
					<h3 align="center"><a href="admindash.php">Go Back to Main Menu</a></h3>
				</div>
			</div>
		</div>
   </div>
</div>






 <?php 
	 include('database.php');
	 if(isset($_POST['create']))
	 {
	    $dname=$_POST['dname'];

        $sql="INSERT INTO department(dname) VALUES ('$dname')";
        $result= mysqli_query($con,$sql);
          echo "
          <script>
          alert('Addition Successful');
          window.location='adddepartment.php';
          </script>
          ";
        
	
		
	 }
    ?>
</body>
</html>