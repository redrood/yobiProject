<?php

  include ("content\include\dbconnexion.php");
  session_start(); // démarrage de la session AVANT toute chose


  $_SESSION["iduser"] = "";

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
              //  header("location:/start.php?page=dashboard");
              header("location:dashboard.html");
            }
            else
            {
                header("location:login.php");
            }
        ?>

        Go to <a href="login.php"> longin (pas de javascript)</a>
    </body>
</html>
