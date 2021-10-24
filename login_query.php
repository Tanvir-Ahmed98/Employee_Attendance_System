<?php

session_start();
include "config.php";
ob_start();

$message = "";

if (count($_POST) > 0) {

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username='" . $_POST["user_name"] . "' and passcode = '" . $_POST["password"] . "'");
   
    $row  = mysqli_fetch_array($result);

 
    if (is_array($row)) {
         
        $_SESSION["name"] = $row['username'];
          $_SESSION["role"]=$row['role'];
         $_SESSION["Id"]= $row ["Id"];
         $_SESSION["passcode"]= $row["passcode"];
        
    } else {
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["name"])&& $_SESSION["role"]==1) {
 
    header("Location:admin_welcome.php");
}
if (isset($_SESSION["name"])&& $_SESSION["role"]==2) {
 
    header("Location:manager_welcome.php");
}

if (isset($_SESSION["name"])&& $_SESSION["role"]==3) {
 
    header("Location:employee_welcome.php");
}
 


ob_end_flush();
?>
<center><h1><a href="login.php">Incorrect password Press to Go back and try again</a></h1></center>