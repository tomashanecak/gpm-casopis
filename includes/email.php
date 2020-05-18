<?php

    if (isset($_POST["subscribe"])) {

        include_once "dbh.php";

        $email = $_POST["EMAIL"];

        $sql = "INSERT INTO email (mail) VALUES (?);";
        $stmt = mysqli_stmt_init($conn);
        
        if (empty($email)) {
            header("Location: ../index.php?=emptySubMail");
            exit();
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?=invalidSubEmail");
            exit();
        } else {
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Došlo ku chybe pri spojení s databázou ".mysqli_error($conn);
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s" , $email);
                mysqli_stmt_execute($stmt);

                echo "Úspešne zapísané v databázy!";
                header("Location: ../index.php?=mailSucc");
                exit();
            }
        }
    } else {

        header("Location: ../index.php");
        exit();
    }

?>