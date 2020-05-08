<?php

    //skontroluje či je stlačené tlačidlo "odoslať"
    if (isset($_POST["submit"])) {

        //spojenie s databázov "DATABASE HANDLER"
        include_once "dbh.php";

        //priradí dáta z formulára premenným
        $cName = $_POST["cName"];
        $cEmail = $_POST["cEmail"];
        $cMessage = $_POST["cMessage"];
        $cClass = $_POST["cClass"];

        $sql = "INSERT INTO cForm(name, email, message, class) VALUES (? ,? ,?, ?);";
        $stmt = mysqli_stmt_init($conn);

        //kontrola či sú všetky okná vyplnené
        if (empty($cName) or empty($cEmail) or empty($cMessage)) {
            header("Location: ../page-contact.php?error=empty");
            exit();

        } else {

            //kontrola či je email platný
            if (!filter_var($cEmail, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../page-contact.php?error=invalidmail");
                exit();

            } else {

                //skontroluje a vykoná DB insert statement (ochrana pred SQL injection)
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There has been an error while executing SQL statement";
                    exit();

                } else {
                    mysqli_stmt_bind_param($stmt, "ssss", $cName, $cEmail, $cMessage ,$cClass);
                    mysqli_stmt_execute($stmt);
                    echo "Succesfully submitted to DB";
        
                    header("Location: ../page-contact.php?contactForm=sent");
                }
            }
        }

    } else {

        //ak uživateľ nestlačil tlačidlo presmeruje ho PHP na hlavnú stránku
        header("Location: ../page-contact.php");
        exit();

    }
?>