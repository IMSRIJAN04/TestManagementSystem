<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Test</title>
  <link rel="stylesheet" href="teacherdashcss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
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
<h1 align="center">Available Courses To Make An Exam</h1>
	<form method="post">
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
    $tid=$_SESSION['tid'];
$sql1 = mysqli_query($con,"SELECT * FROM `teacher` WHERE tid='$tid'");
    $res1 = mysqli_fetch_array($sql1);
    $dno=$res1['dno'];
     
    $sql = mysqli_query($con,"SELECT * FROM `course` WHERE dno='$dno' AND tid='$tid'");
    while ($res = mysqli_fetch_array($sql)) 
    {
	    	$_SESSION['cid']=$res['cid'];
	    	
      echo'
      <tr>
      <td>'.$res['cid'].'</td>
      
      <td>'.$res['cname'].'</td>
      
      

      <td><a href="next.php?cid='.$res['cid'].'">SELECT</a></td>
        
      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
	</form>

</body>
</html>