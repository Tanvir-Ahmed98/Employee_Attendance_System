<?php
include 'config.php';
ob_start();
session_start();

if($_SESSION["name"] && $_SESSION["role"]==3) {
?>
<strong>Logged in as</strong> <?php echo $_SESSION["name"]; ?> <a href="logout.php" role="btn" class="btn btn-danger" tite="Logout">Logout.</a>
<?php
}else 
header ("location:login.php");
ob_end_flush();
?>
<a href="password_reset.php?&id=<? echo $_SESSION["Id"];  ?>" class="btn btn-danger">Reset Password</a>
<!Doctype html>
<html>
<head>
<title>Portal-Myfeatherland</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="assets/style.css" />
</head>
<body style="background-color:Yellow">
  <div style="margin:50px;border-radius:15px;background-color:White">
  <? include 'annual_leave.php'; ?>
  <div style="margin-left:1200px"><Button class="btn btn-primary rounded" type="submit" name="previous"><span class="glyphicon glyphicon-chevron-left"></span></Button>  <Button class="btn btn-primary" type="submit" name="next"><span class="glyphicon glyphicon-chevron-right"></span></Button></div>
  <?php
/* Set the default timezone */
date_default_timezone_set("Asia/Kolkata");

/* Set the date */
$date = strtotime(date("Y-m-d"));

$day = date('d', $date);
$month = date('m', $date);
$year = date('Y', $date);
$firstDay = mktime(0,0,0,$month, 1, $year);
$title = strftime('%B', $firstDay);
$dayOfWeek = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
/* Get the name of the week days */
$timestamp = strtotime('next Sunday');
$weekDays = array();
for ($i = 0; $i < 7; $i++) {
    $weekDays[] = strftime('%a', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
}
$blank = date('w', strtotime("{$year}-{$month}-01"));
?>
<table class='table table-bordered' style="table-layout: fixed;">
    <tr>
        <th colspan="7" class="text-center"> <?php echo $title ?> <?php echo $year ?> </th>
    </tr>
    <tr>
        <?php foreach($weekDays as $key => $weekDay) : ?>
            <td class="text-center"><?php echo $weekDay ?></td>
        <?php endforeach ?>
    </tr>
    <tr>
        <?php for($i = 0; $i < $blank; $i++): ?>
            <td></td>
        <?php endfor; ?>
        <?php for($i = 1; $i <= $daysInMonth; $i++): ?>
            <?php if($day == $i): ?>
                <td><strong><?php echo $i ?></strong></td>
            <?php else: ?>
                <td><?php echo '<a href="attendance_query.php?employee_id='.$_SESSION['Id'].'&employee_name='.$_SESSION['name'].'&employee_passcode='.$_SESSION['passcode'].'&date='.$i.'">'.$i.'</a>'          ?></td></td>
            <?php endif; ?>
            <?php if(($i + $blank) % 7 == 0): ?>
                </tr><tr>
            <?php endif; ?>
        <?php endfor; ?>
        <?php for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++): ?>
            <td></td>
        <?php endfor; ?>
       
    </tr>
</table>
</div>
</body>
</html>

















