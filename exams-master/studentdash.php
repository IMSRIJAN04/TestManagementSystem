<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Dashboard</title>
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

<div >
  <form method="post">
    <p style="float:right">
    <a href="logout.php">LOGOUT</a>
    </p>

    <div>


    
      <table  border="3px" cellpadding="40px"  align="center" style="width: 800px;line-height: 40px;" border="1">
  <thead>
      <tr>
      <th>Course ID</th>
      <th>Course Name</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
   
    <?php 
    
     
    
    include('database.php');

    
     $dno=$_SESSION['dno'];
    $sql = mysqli_query($con,"SELECT * FROM `course` WHERE dno='$dno'");
    while ($res = mysqli_fetch_array($sql)) 
    {
      echo'
      <tr>
      <td>'.$res['cid'].'</td>
      
      <td>'.$res['cname'].'</td>
      
      

      <td><a href="take.php?cid='.$res['cid'].'">Take test</a></td>
        
      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
  
  </form>
</div>

</body>
</html>