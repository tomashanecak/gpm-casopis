<?php

if (isset($_POST["login-submit"])) {

    require "dbh.php";

    $mailuid = $_POST["username"];
    $password = $_POST["password"];

    if (empty($mailuid) or empty($password)) {
        header("Location: ../cms-admin.php?error=emptyfields");
        exit();
    } 
    else {
        $sql = "SELECT * FROM admins WHERE username=?";
        $stmt = mysqli_stmt_init($conn);

        if (! mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../cms-admin.php?error=sqlerror");
            exit();
        } 
        else {
            mysqli_stmt_bind_param($stmt, "s" , $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row["password"]);
                if ($pwdCheck == false) {
                    header("Location: ../cms-admin.php?error=wrongpwd");
                    exit();
                } 
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["password"] = $row["password"];

                    header("Location: ../cms-admin.php?login=success");
                }
                else {
                    header("Location: ../cms-admin.php?error=wrongpwd");
                    exit();
                }
            } 
            else {
                header("Location: ../cms-admin.php?error=nouser");
                exit();
            }
        }
    }
} 
else {
    header("Location: ../cms-admin.php");
    exit();
}

?>