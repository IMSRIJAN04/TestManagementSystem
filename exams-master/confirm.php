<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Staff</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      form {
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  padding: 20px;
}
    </style>
    <style>form{
      
      width: 450px;
      margin-left: 550px;
      margin-top: 50px;
      color: black;
      font-size: 20px;
      ;

    }</style>
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
<h1 style="text-align: center;font-size: 60px"><b>Confirm</b></h1>
  <?php 
  $check=$_SESSION['dno'];
    if ($check == "1") {
      $dno = "CSE";
    }
    elseif ($check == "2") {
      $dno = "EEE";
    }
    elseif ($check == "3") {
      $dno = "ECE";
    }
    elseif ($check == "4") {
      $dno = "MEE";
    }
    elseif ($check == "5") {
      $dno = "CIV";
    }
    elseif ($check == "6") {
      $dno = "OTHER";
    } ?>
	<div>
		<form method="post">
			<label>Enter the name of Course</label>
			<input type="text" name="name" readonly value="<?php echo $_SESSION['name'] ?>"><br>
			<label>Enter the department name</label>
			<input name="department" readonly value="<?php echo  $dno ?>"><br>
			<hr>
			<table border="1">
  <thead>
      <tr>
      <th>Staff ID</th>
      <th>Staff Name</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
    <a href=""></a>
    <?php 
    
     
    
    include('database.php');

    
     $dn2= $_SESSION['dno'];
    $sql = mysqli_query($con,"SELECT * FROM `teacher` WHERE dno='$dn2'");
    while ($res = mysqli_fetch_array($sql)) 
    {
      echo'
      <tr>
      <td>'.$res['tid'].'</td>
      
      <td>'.$res['tname'].'</td>
      
      

      <td><a href="select.php?tid='.$res['tid'].'">SELECT</a></td>
        
      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
	
		</form>


			
</body>
</html>