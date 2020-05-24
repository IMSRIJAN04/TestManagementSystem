<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>confirm</title>
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
<h1 style="text-align: center;font-size: 60px"><b>submit</b></h1>
	<?php 
	$cname=$_SESSION['cname'];
	$tname=$_SESSION['tname'];
	 ?>
	
<form  method="post">
	<label>course name</label>
	<input type="name" name="cname" required value="<?php echo  $cname ?>" readonly><br>
	<label>Instructor name</label>
	<input type="name" name="tname" required value="<?php echo  $tname ?>" readonly><br>
<input type="submit" name="s2" value="submit">
</form>
<?php
include('database.php');
 
if(isset($_POST['s2']))
{ $testid=$_SESSION['testid'];
	$sid=$_SESSION['sid'];
    $score=0;
$inn=1;
      $sql1 = mysqli_query($con,"SELECT * FROM `answer` WHERE testid='$testid' AND sid='$sid'");
   
    while ($res1 = mysqli_fetch_array($sql1)) {
    	$count=1;
    	  $sql2 = mysqli_query($con,"SELECT * FROM `questions` WHERE testid='$testid'");
    	while($res2 = mysqli_fetch_array($sql2)){
    		if($count==$inn){
    	if($res1['ans']==$res2['answer'])
    	{
      
      $score++;
      
     }
     
 }
     $count++;
  }
  $inn++;
    }
     $_SESSION['score']=$score;
     $sql3="SELECT * FROM `test` WHERE testid='$testid' ";
        $result1= mysqli_query($con,$sql3);
        $check1= mysqli_fetch_array($result1);
        
        $cid=$check1['cid'];
       
        	 $sql2="INSERT INTO result(sid,cid,testid,score) VALUES ('$sid','$cid','$testid','$score')";
        $result2= mysqli_query($con,$sql2);
      
          echo "
          <script>
          alert('submission Successful you scored $score');
          window.location='studentdash.php';
          </script>
          ";
       
}
  ?>  
</body>
</html>