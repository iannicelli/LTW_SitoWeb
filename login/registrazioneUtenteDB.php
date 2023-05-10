<?php
    include 'loginDB.php';

    $email = $_POST['email'];
    $password = $_POST['pass1'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];

    $query = "SELECT *
        FROM utenti
        WHERE email = '$email'
    ";

    $result=pg_query($db,$query); 

    if(pg_num_rows($result) > 0) {
        
        header("location: RegistrazioneUtente.php?warning=1 && mail=$email");
    }

    $query= "INSERT INTO utenti (cognome, nome, email, password) 
            VALUES ('$cognome', '$nome', '$email', '$password');";

    $res=pg_query($db, $query);
    if(!$res){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    } 

    pg_close($db);

    header("location: ../generica.php?messaggio=registrazioneCompletata")

?>