<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>GPM-Casopis Admin</title>
</head>
<body>

    <form id="loginForm" action="includes/login.php" method="POST">
        <h3> Uživateľské meno:</h3>
        <input type="text" name="username" placeholder="Login">
        <h3>Heslo:</h3>
        <input type="password" name="password" placeholder="Heslo">
        <br>
        <br>
        <button type="submit" name="login-submit">Prihlásiť sa</button>
    </form>

    <a href="index.php" style=" left: 0;
    line-height: 20px;
    margin-top: -100px;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 100%;">Domovská stránka</a>

    <?php

        if (isset($_GET["error"])) {

            if ($_GET["error"] == "emptyfields") {
                echo "<p id='error'> Prosím vyplňte všetky polia!</p>";
            }

            else if ($_GET["error"] == "sqlerror") {
                echo "<p id='error'> Došlo ku chybe pri komunikácií s databázou! </p>";
            }

            else if ($_GET["error"] == "wrongpwd") {
                echo "<p id='error'> Nesprávne heslo! </p>";
            }

            else if ($_GET["error"] == "nouser") {
                echo "<p id='error'> Uživateľ neexistuje v databáze! </p>";
            }

        }   else {
            if (isset($_SESSION["username"])) {
                header("Location: display.php");
            }
        }
    ?>
</body>
</html>