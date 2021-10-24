<?
ob_start();
session_start();

if(isset($_SESSION["name"]))
{header("Location:google.com");}
else header("Location:login.php");
;

ob_end_flush();














?>