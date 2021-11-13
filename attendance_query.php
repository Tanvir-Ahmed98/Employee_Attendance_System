<?php 
session_start();
include 'config.php';
include 'header.php'; 
if(isset($_POST['submit']))
{
$sn = $_GET['employee_id'];
$p= $_GET['employee_passcode'];
$n=$_GET['employee_name'];
$at=$_POST['choice'];
$y=date("Y");
$m=date("m");
$d=$_GET['date'];
 

$sql = "INSERT INTO attendance(Id,name,phone,year,month,date,status) VALUES($sn,'$n','$p',$y,$m,$d,'$at')";
if (mysqli_query($conn, $sql)) {
    if($at=="Present" || $at=="Absent" ||   $annual_leave_counter==1)
    echo '<div class="alert alert-success" role="alert">New record created successfully</div>';
} 

else {
     echo '<div class="alert alert-danger" role="alert">
    You have already taken your action at this date!!!</div>' ;
   exit;
}

//header("Location:employee_welcome.php");
$at=$_POST['choice'];
if($at=="Annual_Leave" )
{
$sn = $_GET['employee_id'];
$p= $_GET['employee_passcode'];
$n=$_GET['employee_name'];
$y=date("Y");
$m=date("m");
$d=$_GET['date']; 

$sql1 = "INSERT INTO leave_balance_of_employess(Id,name,phone,year,month,date,annual_leave_balance,sick_leave_balance) VALUES($sn,'$n','$p',$y,$m,$d,'1','5')";
mysqli_query($conn, $sql1);
$sql = 'select *from leave_balance_of_employess  where Id='.$_SESSION['Id'].'';
$result =  mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0 ) 
                    {
                        // output data of each row
                        $row = mysqli_fetch_assoc($result); 
                        
                        
                        $v= $row['annual_leave_balance']-1;
                        if($v<0)
                        {
                            exit;
                        }else
                        $sql=" UPDATE leave_balance_of_employess SET annual_leave_balance= $v WHERE Id=$sn";
                        mysqli_query($conn, $sql);
                    } 
   




 echo '<div class="alert alert-success" role="alert">Annual Leave taken for the current month successfuly!!!</div>';

                    
}

if($at=="Sick_Leave" )
{
   
$sn= $_GET['employee_id'];
$p= $_GET['employee_passcode'];
$n=$_GET['employee_name'];
$y=date("Y");
$m=date("m");
$d=$_GET['date'];   

$sql1 = "INSERT INTO leave_balance_of_employess(Id,name,phone,year,month,date,annual_leave_balance,sick_leave_balance) VALUES($sn,'$n','$p',$y,$m,$d,'1','5')";
mysqli_query($conn, $sql1);
$sql = 'select *from leave_balance_of_employess  where Id='.$_SESSION['Id'].'';
                    $result =  mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0 ) 
                    {
                        // output data of each row
                       $row = mysqli_fetch_assoc($result); 
                        
                       
                       $value= $row['sick_leave_balance']-1;
                         if($value<0)
                        {
                            exit;
                        }else
 {$sql=" UPDATE leave_balance_of_employess SET sick_leave_balance=$value WHERE Id=$sn";
                        mysqli_query($conn, $sql);
     
                    if(mysqli_query($conn, $sql))
                    {
                        echo '<div class="alert alert-success" role="alert">Sick Leave taken  successfuly!!!</div>'; 
                    }
     
 }
                        
                    }
                    
                    

}
}
?>
<center>
<form action="" method="post">
<select name="choice" id="select" class="form-select" aria-label="Default select example"  >
 <option selected>Unselected</option>
  <option value="Present">Present</option>
   <option value="Absent">Absent</option>
    <option value="Compoff">Compoff</option>





 <?php 
 
 include 'config.php';
                    $sql = 'select *from attendance where Id='.$_SESSION['Id'].' and status="Annual_Leave"';
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) > 0) 
    {                    // output data of each row
echo "Annual_leave_disabled";}
else
 echo '<option value="Annual_Leave" style="color:red" >Annunal Leave</option>' ?>
 
 
 
 <?php 
 
 include 'config.php';
                    $sql = 'select *from attendance where Id='.$_SESSION['Id'].' and status="Sick_Leave"';
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result)==5) 
    {                    // output data of each row
  echo '';}
else
    echo '<option value="Sick_Leave" style="color:red">Sick leave</option>';?>
  </select>
     <button  type='submit' name='submit' class='btn btn-success' >Click To Confirm Your Action</button></td>
</form>
</center>
<center><a href="employee_welcome.php">Go Back</a></center>

