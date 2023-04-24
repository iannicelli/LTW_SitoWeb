<?php
    include 'loginDB.php';

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT *
                FROM utenti
                WHERE email = '$email'
            ";
    $result = pg_query($db, $query);
    if(pg_num_rows($result) == 1) {
        $row = pg_fetch_assoc($result);
        if(password_verify($pass, $row['pass'])){

            session_start();

            $_SESSION['email'] = $row['email'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['cognome'] = $row['cognome'];
            $_SESSION['isLogged'] = true;
            
            header("location: Home.php");
        }
        else {
            header("location: login.php?warning=3");
        }
    }else{
        header("location: login.php?warning=1");
    }
?>