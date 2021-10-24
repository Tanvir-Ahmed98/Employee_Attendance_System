<?php include 'config.php';
ob_start();
$sn = $_POST['name'];
$sa = $_POST['phone'];
$sc = $_POST['email'];
$rn = $_POST['password'];

$sql = "INSERT INTO admin(username,passcode,role) VALUES('$sc', '$rn ', 3)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO employee_list(name,phone,email) VALUES('$sn', '$sa ','$sc')";
mysqli_query($conn, $sql);
//mail_script



    $fromEmail ="hr@myfeatherland.com";
    $toEmail = $sc;
    $subjectName = "Your Password Credentials";
    $message = "Hello from myfeatherland.com";

    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$message.'<br/>
                    Regards<br/>
                  '.$fromEmail.'
                  <br>ID:
                  '.$sc.'
                  <br>Password:
                  '.$rn.'
				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index.php";</script>';









//mail_script end




























header("Location:admin_welcome.php");
ob_end_flush();
?>