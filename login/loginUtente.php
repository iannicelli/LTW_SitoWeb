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
        echo "password inserita: $pass";
        $corretta =  $row['password'];
        echo "password richiesta: $corretta";
        if($pass == $corretta){
            
            
            session_start();

            $_SESSION['email'] = $row['email'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['cognome'] = $row['cognome'];
            $_SESSION['ruolo']= $row['ruolo'] == 'ADMIN' ? $row['ruolo'] : 'LOGGED';
            $_SESSION['isLogged'] = true;
            
            header("location: ../nav.php");
        }
        else {
            header("location: ../generica.php?messaggio=passwordErrata");
        }
    }else{
        header("location: ../generica.php?messaggio=emailNonEsistente");
    }
?>