<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exam Login</title>
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
<h1 style="text-align: center;font-size: 60px"><b>Enter The Exam Code</b></h1>
  <?php 
  $cid=$_GET['cid'];
  $_SESSION['cid']=$cid;
   include('database.php');
  
  $sql1="SELECT * FROM `course` WHERE cid='$cid'";
        $result1= mysqli_query($con,$sql1);
        $check1= mysqli_fetch_array($result1);
        $cname=$check1['cname'];
   ?>
	<div>
  
<form method="post">
<label>cname</label>
<input type="name" name="cname" required value="<?php echo  $cname ?>" readonly><br>
<label>code</label>
<input type="password" name="code" required><br>
<input type="submit" value="Login" name="login">
<a href="studentdash.php">Back to Select Login Page</a>
</form></div>

<?php 
	 include('database.php');
 
	 if(isset($_POST['login']))
	 {
		$username=$cid;
		$password=$_POST['code'];
    $one=1;
    $zero=0;
    $three=3;
        $sql="SELECT * FROM `test` WHERE cid='$username' AND code='$password' AND start='$one'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        $sql0="SELECT * FROM `test` WHERE cid='$username' AND code='$password' AND start='$zero'";
        $result0= mysqli_query($con,$sql0);
        $check0= mysqli_fetch_array($result0);
        $sql3="SELECT * FROM `test` WHERE cid='$username' AND code='$password' AND start='$three'";
        $result3= mysqli_query($con,$sql3);
        $check3= mysqli_fetch_array($result3);
        $_SESSION['testid']=$check['testid'];
        $testid=$check['testid'];
      
        if (isset($check)) 
        { $sid=$_SESSION['sid']; 
          $sql2="SELECT * FROM `result` WHERE sid='$sid' AND testid='$testid'";
        $result2= mysqli_query($con,$sql2);
        $check2= mysqli_fetch_array($result2);
        if(isset($check2))
        {
          echo "
          <script>
          alert('you have already attempted the exam');
          window.location='studentdash.php';
          </script>
          ";
        }
        else
        {
           $_SESSION['cid']= $username;
           $_SESSION['qno']=0;
          echo "
          <script>
          alert('Login Successful');
          window.location='exam.php';
          </script>
          ";
        }
        }
        elseif(isset($check0))
        {
           echo "
          <script>
          alert('Test is not open');
          window.location='studentdash.php';
          </script>
          ";
        }
        elseif(isset($check3))
        {
          echo "
          <script>
          alert('Test is already completed');
          window.location='studentdash.php';
          </script>
          ";
        }
	
		
	 }
    ?>
</body>
</html>