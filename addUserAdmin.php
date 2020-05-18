<?php

    require "includes/dbh.php";
    $username = "HanecakAdmin";
    $password = "1a2b3cX0t";

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admins (username, password) VALUES ('$username', '$hashedPwd')";

    if (mysqli_query($conn, $sql)) {
        echo "Succesfully submitted";
    } else {
        echo "Fuck!".mysqli_error($conn);
    }

?>