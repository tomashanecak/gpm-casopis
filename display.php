<?php

    include_once "includes/dbh.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/admin.css" rel="stylesheet">
    <title>Admin - GPM Casopis</title>

     <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

</head>
<body>

    <header>
        <nav>
            <ul>
                <a href="./display.php"><li>Kontaktný formulár</li></a>
                <a href="./displayMails.php"><li>Email - odbery</li></a>
            </ul>
        </nav>
    </header>

    <div id="formWrap">
        <?php

        if (isset($_SESSION["username"])) {

            $sql = "SELECT * FROM cForm";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div id=Element>";
                    echo "<br>";
                    echo "<p id='prewrite'>Meno: </p>".$row["name"];
                    echo "<br>";
                    echo "<p id='prewrite'>E-mail: </p>".$row["email"];
                    echo "<br>";
                    echo "<p id='msg'>Správa: </p>".$row["message"];
                    echo "<br>";
                    echo "<br>";
                    echo "<p id='prewrite'>Trieda: </p>".$row["class"];
                    echo "<br>";
                    echo "<p id='prewrite'> Rok/Mesiac/Deň a čas: </p>".$row["date"];
                    echo "<hr>";
                    echo "</div>";
                }
            } else {
                echo "No results";
            }

            echo "<hr>";
            echo "<form action='includes/logout.php' method='POST'>
                    <button type='submit' name='submit-logout'>Odhlásiť sa</button>
                  </form>";
        } else {
            header("Location: cms-admin.php");
        }
        ?>
    </div>

</body>
</html>
