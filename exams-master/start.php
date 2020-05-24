<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<?php 
$testid=$_GET['testid'];
include('database.php');
 $sql2="UPDATE test SET start=1 WHERE testid=$testid";
        $result2= mysqli_query($con,$sql2);
          echo "
          <script>
          alert('Test is now open');
          window.location='teacherdash.php';
          </script>
          ";

 ?>