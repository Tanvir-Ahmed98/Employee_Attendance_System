<? 
   
session_start();
?>
<html>
    <head>
      <?  include 'header.php'; ?>
        </head>
        <body>
            <div class="container" style="margin-top:200px">
 <form action="" method="post">
        <div class="row">
            <div class="col">
                
                <label>Enter New Password</label>
                <input type="text" class="form-control" name="reset" required />
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <center>
                   
            <button type="submit" name='submit'  class="btn btn-danger text-white mt-8">Reset</button>
        </center>

    </form>
    </div>
        <?php 
     
        include 'config.php';
        if (isset($_POST["submit"])) {
        $s = $_POST['reset'];
        $id=$_GET['id'];
       mysqli_query($conn, "UPDATE admin SET passcode='$s' WHERE Id = '$id'");
          if (mysqli_query($conn, "UPDATE admin SET passcode='$s' WHERE Id = '$id'")) {
    echo "password Updated Successfuly";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
       
       
    }
  
    ?>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <center>  <a href="employee_welcome.php">Go back</a> </center>
   
   </body>
   </html>
   
   
   