<?php
  session_start();

 function isLogged() {
    if(isset($_SESSION['isLogged']))
        return $_SESSION['isLogged'];
    else
        return false;
 }

 function isAdmin() {
    if(isset($_SESSION['ruolo']))
        return $_SESSION['ruolo'] == "ADMIN";
 }

?>