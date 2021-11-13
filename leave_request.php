<?php 
session_start();
include 'header.php'; 
include 'config.php';


?>
 <table class="table table-dark table-hover ">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Year</th>
                        <th scope="col">Month</th>
                        <th scope="col">Date</th>
                        
                        <th scope="col">Status</th>
                       
                            <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php include 'config.php';
                    $sql = "select *from attendance where status='Annual_Leave'";
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row

                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                            <tr>
                                <td>
                                    <?php echo   $row["Id"]; ?>
                                </td>
                                <td>
                                    <?php echo    $row["name"]; ?>
                                </td>
                                <td>
                                    <?php echo     $row["phone"]; ?>
                                </td>
                                <td>
                                    <?php echo    $row["year"]; ?>
                                </td>
                                <td>
                                    <?php echo    $row["month"]; ?>
                                </td>
                                <td>
                                    <?php echo    $row["date"]; ?>
                                </td>
                               
                                    <td>
                                    <?php echo    $row["status"]; ?>
                                </td>
                                  
                                   


                        <td>

                                    <a class="btn btn-success" role="button" href="leave_request_accept.php?&employee_id=<? echo $row["Id"]; ?>">Accept</a>


                                    <a class="btn btn-danger" role="button" href="#">Reject</a>
                                </td> 
                            </tr>


                </tbody>

        <?php
                        }
                    }

        ?>
            </table>