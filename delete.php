<?php

           $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "jquery";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from worknote where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:display.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>