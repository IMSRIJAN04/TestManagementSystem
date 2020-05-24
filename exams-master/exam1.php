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
	$_SESSION['qno']=$qno;
	include('database.php');
	$testid=$_SESSION['testid'];
	$qid=$_SESSION['qid'];
	  
	$sql="SELECT * FROM `questions` WHERE testid='$testid' AND qid='$qid' ";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        if(count($check)==0)
        { $count=$_SESSION['check'];
          $count--;
           $_SESSION['check']=$count;
              if($count<0){
            
        $cid=  $_SESSION['cid'];
         $sql1="SELECT * FROM `course` WHERE cid='$cid'";
        $result1= mysqli_query($con,$sql1);
        $check1= mysqli_fetch_array($result1);
         $_SESSION['cname']=$check1['cname'];
        $tid=$check1['tid'];
         $sql2="SELECT * FROM `teacher` WHERE tid='$tid'";
        $result2= mysqli_query($con,$sql2);
        $check2= mysqli_fetch_array($result2);
        $_SESSION['tname']=$check2['tname'];
            echo "
         
          <script>
          alert('you have atempted all the questions ');
          window.location='submit.php';
          </script>
          ";

        }
         }
      

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

<input type="submit" name="submit" value="submit">
</form>
<?php
include('database.php');
if(isset($_POST['submit']))
{
  $sid=$_SESSION['sid'];
  if(isset($_POST['radio']))
  {   
     $ans=$_POST['radio'];
         $sql="INSERT INTO answer(sid,testid,ans) VALUES ('$sid','$testid','$ans')";
        $result= mysqli_query($con,$sql);
      $qid++;
  $_SESSION['qid']=$qid;
  $qno--;
  $_SESSION['qno']=$qno;
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