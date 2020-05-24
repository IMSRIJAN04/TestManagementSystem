<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Open Test</title>
  <link rel="stylesheet" href="teacherdashcss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  <style >
    form{
      
      width: 900px;
      margin-top: 50px; 
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
<h1 align="center">Select The Exam To Open</h1>
	<table border="3px" cellpadding="40px"  align="center" style="width: 800px;line-height: 40px;"border="1">
 <thead>
      <tr>
      <th>Test ID</th>
      <th>course id</th>
      <th>exam code</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
   
    <?php 
    
     
    
    include('database.php');

    
     $tid=$_SESSION['tid'];
    $sql = mysqli_query($con,"SELECT * FROM `course` WHERE tid='$tid'");
    $res = mysqli_fetch_array($sql);
    $cid=$res['cid'];
    $zero=0;
    $sql1 = mysqli_query($con,"SELECT * FROM `test` WHERE cid='$cid' AND start='$zero'");
    
    while ($res1 = mysqli_fetch_array($sql1)) 
    {
      echo'
      <tr>
      <td>'.$res1['testid'].'</td>
      
      <td>'.$res1['cid'].'</td>

      <td>'.$res1['code'].'</td>
      

      <td><a href="start.php?testid='.$res1['testid'].'">Open test</a></td>
        
      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
</body>
</html>
