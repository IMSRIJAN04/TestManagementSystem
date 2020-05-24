<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
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
<h1 style="text-align: center;font-size: 60px"><b>Choose The Correct Answer</b></h1>

	<?php  
	$qno=$_SESSION['qno'];
	$qno++;
	$_SESSION['check']=0;
	$_SESSION['qno']=$qno;
	include('database.php');
	$testid=$_SESSION['testid'];
	$sql="SELECT * FROM `questions` WHERE testid='$testid'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        
        $qid=$check['qid'];
        $qid++;
        $_SESSION['qid']=$qid;
        $quu=$check['question'];
        $q1=$check['q1'];
        $q2=$check['q2'];
        $q3=$check['q3'];
        $q4=$check['q4'];
        $ans=$check['answer'];

	 ?>
<form  method="post">
<label>Qno.</label>
<input type="text" name="qno" value="<?php echo  $qno ?>"><br>
<input type="text" name="qno" value="<?php echo  $quu ?>"><br>
<input type="radio" name="radio" value="1"><?php echo  $q1 ?><br>
<input type="radio" name="radio" value="2"><?php echo  $q2 ?><br>
<input type="radio" name="radio" value="3"><?php echo  $q3 ?><br>
<input type="radio" name="radio" value="4"><?php echo  $q4 ?><br>
<input type="submit" name="submit" value="Next">
</form>
<?php
include('database.php');
if(isset($_POST['submit']))
{
	$qno--;
	$_SESSION['qno']=$qno;
	$sid=$_SESSION['sid'];
	if(isset($_POST['radio']))
	{   
     $ans=$_POST['radio'];
         $sql="INSERT INTO answer(sid,testid,ans) VALUES ('$sid','$testid','$ans')";
        $result= mysqli_query($con,$sql);
				
			echo "
          <script>
          
          window.location='exam1.php';
          </script>
          ";
		}
		
	}

  ?>

</body>
</html>
