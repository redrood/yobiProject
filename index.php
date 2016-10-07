<?php
session_start(); // démarrage de la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>GPAV | Login </title>
    </head>

    <body>
        <?php
            if ((isset($_SESSION['iduser'])) && (!empty($_SESSION['iduser'])))
            {
                header("location:pages/start.php?page=dashboard");
            }
            else
            {
                header("location:pages/login.php");
            }
        ?>

        Go to <a href="pages/login.php"> longin (pas de javascript)</a>
    </body>
</html>