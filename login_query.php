<?php

session_start();
include "config.php";
if(isset($_SESSION["name"]))
{
    header("Location:employee_welcome.php");
}


if (count($_POST) > 0) {

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username='" . $_POST["user_name"] . "' and passcode = '" . $_POST["password"] . "'");
   
    $row  = mysqli_fetch_array($result);

 
    if (is_array($row)) {
         
        $_SESSION["name"] = $row['username'];
          $_SESSION["role"]=$row['role'];
         $_SESSION["Id"]= $row ["Id"];
         $_SESSION["passcode"]= $row["passcode"];
        
    } else {
        $error="<div class='alert alert-danger' role='alert'>Invalid credentials</div>";
        header("Location:login.php?m=$error");
        // $message = "Invalid Username or Password!";
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
 

?>
