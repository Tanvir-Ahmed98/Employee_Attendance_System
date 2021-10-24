<?php
ob_start();
session_start();
?>
<html>
<head>
<title>Manager Welcome Page</title>
</head>
<body>

<?php
if($_SESSION["name"]&&$_SESSION["role"]==2) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else header ("location:login.php");
ob_end_flush();
?>
</body>
</html>