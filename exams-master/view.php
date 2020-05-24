<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
  <link rel="stylesheet" href="teacherdashcss.css">
  <link rel="stylesheet" href="tablecss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  <style >
    form{
      
      width: 900px;
      margin-top: 50px; 
      margin-left: 100px;
      color: green;
      padding: 50px;
      font-size: 25px;
      border-left-color: blue;

    }
  </style>

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
		<table border="3px" cellpadding="40px"  align="center" style="width: 800px;line-height: 40px;" >
 <thead>
      <tr>
      <th>Student ID</th>
      <th>student Name</th>
      <th>Score</th>
      
    </tr>
  </thead>
  <tbody>
   
    <?php 
    
     $testid=$_GET['testid'];
    
    include('database.php');

    
     
    $sql1 = mysqli_query($con,"SELECT * FROM `result` WHERE testid='$testid'");
    
    while ($res1 = mysqli_fetch_array($sql1)) 
    { $sid=$res1['sid'];
      $sql2 = mysqli_query($con,"SELECT * FROM `student` WHERE sid='$sid'");
      $res2 = mysqli_fetch_array($sql2);
      echo'
      <tr>
      <td>'.$res1['sid'].'</td>

      <td>'.$res2['sname'].'</td>
      
      <td>'.$res1['score'].'</td>

      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
<a href="teacherdash.php"><h3 align="center">Go to dashboard</h3></a>
</body>
</html>