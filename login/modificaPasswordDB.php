<?php
    include './loginDB.php';
    
    session_start();
    $mail= $_SESSION['email'];

    $pass=$_POST['pass1'];
    $pass1=$_POST['pass2'];


    $query = "SELECT *
        FROM utenti
        WHERE email = '$mail'
    ";

    $result=pg_query($db,$query);

    if(pg_num_rows($result) == 1) {                                              
        $row=pg_fetch_assoc($result);
        if($pass == $row['password']){
            $query1= "UPDATE utenti
            SET password='$pass1'
            WHERE email = '$mail';";

            $res1=pg_query($db, $query1);
            if(!$res1){
                echo "ERRORE QUERY: " . pg_last_error($db);
                exit;
            } 

            header("location: ../generica.php?messaggio=modificaEffettuata");
        }else{
        header("location: ModificaPassword.php?errore=1");
        }
    }

   
    pg_close($db);

?>   