<? include 'config.php' ?>

<html>

<body>

   &nbsp; &nbsp; &nbsp;Annual Leave Balance:<?    $sql = 'select *from leave_balance_of_employess  where Id='.$_SESSION['Id'].'';
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) > 0 ) 
                    {
                        // output data of each row
                       $row = mysqli_fetch_assoc($result); 
                        
                        if($row['annual_leave_balance']<0)
                        {
                            echo"annual bucket full!!";
                        }else
                        echo $row['annual_leave_balance'];
                        
                    
                    }else echo 1;
                     ?>  
                     
                     
      &nbsp; &nbsp; &nbsp;Sick Leave Balance:<?    $sql = 'select *from leave_balance_of_employess  where Id='.$_SESSION['Id'].'';
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) > 0 ) 
                    {
                        // output data of each row
                       $row = mysqli_fetch_assoc($result); 
                        
                        
                        echo $row['sick_leave_balance'];
                        
                    
                    }else echo 5;
                     ?> 
                     </body>
                     </html>