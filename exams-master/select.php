   <?php
   session_start();
   $tid=$_GET['tid'];
   include('database.php');
   $name=$_SESSION['name'];
   $dno=$_SESSION['dno'];
    $sql="INSERT INTO course(cname,dno,tid) VALUES ('$name','$dno','$tid')";
        $result= mysqli_query($con,$sql);
       
          echo "
          <script>
          alert('Addition Successful');
          window.location='addcourse.php';
          </script>
          ";  
          ?>
  
    
   
