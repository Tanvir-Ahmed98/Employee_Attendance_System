<? include 'config.php' ?>

<html>

<body>

   &nbsp; &nbsp; &nbsp;<strong style="font-size:25px">Annual Leave Balance:</strong><?    $sql = 'select *from leave_balance_of_employess  where Id='.$_SESSION['Id'].'';
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) > 0 ) 
                    {
                        // output data of each row
                       $row = mysqli_fetch_assoc($result); 
                        
                        if($row['annual_leave_balance']<0)
                        {
                            echo"annual bucket full!!";
                        }else
                        echo '<strong style="font-size:25px;color:red">'.$row['annual_leave_balance'].'</strong>';
                        
                    
                    }else echo'<strong style="font-size:25px;color:red"> 1</strong>';
                     ?>  
                     
                     
      &nbsp; &nbsp; &nbsp;<strong style="font-size:25px">Sick Leave Balance:</strong><?    $sql = 'select *from leave_balance_of_employess  where Id='.$_SESSION['Id'].'';
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) > 0 ) 
                    {
                        // output data of each row
                       $row = mysqli_fetch_assoc($result); 
                        
                        
                        echo '<strong style="font-size:25px;color:red">'.$row['sick_leave_balance'].'</strong>';
                        
                    
                    }else echo  '<strong style="font-size:25px;color:red">5</strong>';
                     ?> 
                     </body>
                     </html>