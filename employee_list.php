 
 <?php include 'header.php'; ?>
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
                </tr>
                </thead>
                <tbody>
                    <?php include 'config.php';
                    $sql = "select *from attendance";
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
                                    
                                   


                             <!--   <td>

                                    <a class="btn btn-info fw-bold" role="button" href="update_status.php?reference_number=<?php echo $row['reference_number']; ?>">Update</a>


                                    <a class="btn btn-danger" role="button" href="delete_parcel_list.php?reference_number=<?php echo $row['reference_number']; ?>">Delete</a>
                                </td> -->
                            </tr>


                </tbody>

        <?php
                        }
                    }

        ?>
            </table>