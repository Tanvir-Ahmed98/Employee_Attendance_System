<?php
if (!isset($_SESSION)) {

    session_start();
}

unset($_SESSION["name"]);
unset($_SESSION["role"]);
header("Location:login.php");?>