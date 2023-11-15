<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "work_data";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection Error");
    }



?>