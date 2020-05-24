<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:rgb(247, 220, 111 );">

   <header class="header">
  <nav class="navbar   ">
    <div class="container">
      <div class="navbar-header">
        <a href=""><img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f8/Amrita-vishwa-vidyapeetham-color-logo.png/330px-Amrita-vishwa-vidyapeetham-color-logo.png"></a> 






        <div class="container">
    <div class="row">
        <div class="col-xs-4">
            <h1 align="center"><b>ADMIN LOGIN</b></h1>
                   <form method="post">
                    <div class="form-group">
                    <label>Username</label>
                    <input type="name" class="form-control" name="Username" required><br>
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password"  class="form-control" name="Password" required><br>
                    </div>
            
                    <input type="submit" value="Login" class="btn btn-success" name="login">
                    <a href="home.php">Back to Select Login Page</a>
                    </form></div>

        
      </div>
    </div>
    </div>
    <div>


	

<?php 
	 include('database.php');
	 if(isset($_POST['login']))
	 { session_start();
		$username=$_POST['Username'];
		$password=$_POST['Password'];
        $sql="SELECT * FROM `admin` WHERE aname='$username' AND apwd='$password'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        if (isset($check)) 
        {$_SESSION['aid']=$username;
          echo "
          <script>
          alert('Login Successful');
          window.location='admindash.php';
          </script>
          ";
        }
        else
        {
           echo "
          <script>
          alert('Login Unsuccessful');
          window.location='admin.php';
          </script>
          ";
        }
	
		
	 }
    ?>
</body>
</html>