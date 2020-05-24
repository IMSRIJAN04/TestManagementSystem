<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<?php 
$testid=$_GET['testid'];
include('database.php');
 $sql2="UPDATE test SET start=3 WHERE testid=$testid";
        $result2= mysqli_query($con,$sql2);
          echo "
          <script>
          alert('Test is now closed');
          window.location='teacherdash.php';
          </script>
          ";

 ?>