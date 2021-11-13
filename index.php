
<?php 

include 'config.php'; 
session_start();
if(isset($_SESSION["name"]))
{
    header("Location:employee_welcome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
</head>
<body >



<center><h1>Welcome To MyFeatherland <strong style="color:green">Portal</strong>!!!</h1><br></center>
  
            
<center><a  role="btn" class="btn btn-primary" href="login.php" >Portal login</a></center>




<script src="assets/js/script.js" ></script> 
</body>
</html>