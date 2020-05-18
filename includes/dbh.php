<?php 

    $dbServer = "localhost"; //mysql80.websupport.sk    //"localhost"
    $dbUsername = "root";  //j0zd9w7t   //"root"
    $dbPassword = "";  //Dr0qkoK7AQ     //""

    $dbName = "contact";  //j0zd9w7t    //"contact"

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);    //port , 3314

    if($conn){
        echo "<p style='color:green;'>Succesfully connected to MySQL database!</p>";
    } else {
        echo "<p style='color:red;'>There was a problem connecting to MySQL database!</p>";
    }

?>