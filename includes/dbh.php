<?php 

    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";

    $dbName = "Contact";

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);    

    if($conn){
        echo "Succesfully connected to MySQL database!";
    }

?>