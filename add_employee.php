<? session_start();

if(!isset($_SESSION['name'])) {
     header("Location:login.php"); // redirects them to homepage
 
}


?> 
 
<html>
    <head>
 <?php include 'header.php'; ?>
 </head>
 
 <body>
     <div class="container">
 <form action="employee_input_query.php" method="post" >
    
        <div class="row">
            <div class="col">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="name" required />
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phone" required />
                <label>Email Address</label>
                <input type="text" class="form-control" name="email" required />
                  <label>Password</label>
                <input type="text" class="form-control" name="password"   required />
           
&nbsp;
           
&nbsp;
           
&nbsp;
&nbsp;
        <center>
            <button type="submit" name='submit'  class="btn btn-danger text-white mt-5">Save</button>
        </center>


    </form>
</div>


</body>
</html> 