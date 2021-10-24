<?php
include 'config.php';
session_start();

$id = $_GET['employee_id']; // get ID through query string

$del = mysqli_query($conn, "delete from attendance where Id = $id"); // delete query

if ($del) {
    mysqli_close($conn); // Close connection
    header("location:leave_request.php"); // redirects to all records page

    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}