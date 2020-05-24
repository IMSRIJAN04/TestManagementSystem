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

	<table border="3px" cellpadding="40px"  align="center" style="width: 800px;line-height: 40px;" >
 <thead>
      <tr>
      <th>Question/Choice</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
   
    <?php 
    
     
    
    include('database.php');
$qno=$_SESSION['qno'];
	$qno++;
	$_SESSION['qno']=$qno;
	include('database.php');
	$testid=$_SESSION['testid'];
	$qid=$_SESSION['qid'];
	  

    $sql1 = mysqli_query($con,"SELECT * FROM `questions` WHERE testid='$testid' AND qid='$qid'");
    
    $res1 = mysqli_fetch_array($sql1);
    if(count($res1)==0)
        { $count=$_SESSION['check'];
          $count--;
           $_SESSION['check']=$count;
              if($count<0){
            echo "
         
          <script>
          alert('you have atempted all the questions ');
          window.location='submit.php';
          </script>
          ";

        }
    }
    if(isset($_POST['submit']))
{
  $sid=$_SESSION['sid'];
  if(isset($_POST['s1']))
  {   
     $ans=1;
         $sql="INSERT INTO answer(sid,testid,ans) VALUES ('$sid','$testid','$ans')";
        $result= mysqli_query($con,$sql);
      $qid++;
  $_SESSION['qid']=$qid;
  $qno--;
  $_SESSION['qno']=$qno;
      echo "
          <script>
          
          window.location='exam2.php';
          </script>
          ";
    }
      if(isset($_POST['s2']))
  {   
     $ans=2;
         $sql="INSERT INTO answer(sid,testid,ans) VALUES ('$sid','$testid','$ans')";
        $result= mysqli_query($con,$sql);
      $qid++;
  $_SESSION['qid']=$qid;
  $qno--;
  $_SESSION['qno']=$qno;
      echo "
          <script>
          
          window.location='exam2.php';
          </script>
          ";
    }
    
      if(isset($_POST['s3']))
  {   
     $ans=3;
         $sql="INSERT INTO answer(sid,testid,ans) VALUES ('$sid','$testid','$ans')";
        $result= mysqli_query($con,$sql);
      $qid++;
  $_SESSION['qid']=$qid;
  $qno--;
  $_SESSION['qno']=$qno;
      echo "
          <script>
          
          window.location='exam2.php';
          </script>
          ";
    }
    
      if(isset($_POST['s4']))
  {   
     $ans=4;
         $sql="INSERT INTO answer(sid,testid,ans) VALUES ('$sid','$testid','$ans')";
        $result= mysqli_query($con,$sql);
      $qid++;
  $_SESSION['qid']=$qid;
  $qno--;
  $_SESSION['qno']=$qno;
      echo "
          <script>
          
          window.location='exam2.php';
          </script>
          ";
    }
    
    
  }

    
      echo'
      <tr>
      <td>'.$res1['question'].'</td>

      </tr>
      
       <tr>
      <td>'.$res1['q1'].'</td>
      <td><input type="submit" name="s1" value="submit"></td>
      </tr>

       <tr>
      <td>'.$res1['q2'].'</td>
      <td><input type="submit" name="s2" value="submit"></td>
      </tr>

       <tr>
      <td>'.$res1['q3'].'</td>
      <td><input type="submit" name="s3" value="submit"></td>
      </tr>

       <tr>
      <td>'.$res1['q4'].'</td>
      <td><input type="submit" name="s4" value="submit"></td>
      </tr>
      
      

     
        
      </tr>
      ';
      
     
      ?>
  </tbody>
<?php
include('database.php');

  ?>

</body>

</html>