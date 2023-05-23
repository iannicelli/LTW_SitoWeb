<?php
    include './loginDB.php';
    
    session_start();
    $mail= $_SESSION['email'];

    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];


    $query = "SELECT *
        FROM utenti
        WHERE email = '$mail'
    ";

    $result=pg_query($db,$query);

    if(pg_num_rows($result) == 1) {                                              
        $row=pg_fetch_assoc($result);
        $query1= "UPDATE utenti
            SET nome='$nome', cognome='$cognome'
            WHERE email = '$mail';";

        $res1=pg_query($db, $query1);
        if(!$res1){
            echo "ERRORE QUERY: " . pg_last_error($db);
            exit;
        } 

        header("location: ../generica.php?messaggio=modificaEffettuata");
    }
    

   
    pg_close($db);

?>   