<?php
     include './login/loginDB.php';
     include './login/checkIsLogged.php';
     if(isLogged()){
        $mail= $_SESSION['email'];
     }
     else{
        header("location: ./generica.php?messaggio=nonLoggato2");
     }

    $file_tmp = $_FILES['image']['tmp_name'];
    $file_name = $_FILES['image']['name'];

    $nome_animale = $_POST['nome_animale'];
    $indirizzo = $_POST['indirizzo'];
    $provincia = $_POST['provincia'];
    $tipologia = $_POST['tipologia'];
    $eta = $_POST['eta'];
    $citta = $_POST['citta'];
    $cap = $_POST['cap'];
    $descrizione = $_POST['descrizione'];

    $img = fopen($file_tmp, 'r') or die("cannot read image\n");
    $data = fread($img, filesize($file_tmp));

    $es_data = pg_escape_bytea($data);
    fclose($img);

    $sql = "SELECT MAX(id) AS max_id FROM animali";
    $result1 = pg_query($db, $sql);

    // Verifica se la query ha prodotto risultati
    if (pg_num_rows($result1) > 0) {
        // Estrai la riga risultante come array associativo
        $row = pg_fetch_assoc($result1);
        // Salva il valore massimo dell'ID nella variabile
        $maxId = $row['max_id'];
    } else {
        // Nessun risultato trovato, assegna un valore predefinito alla variabile
        $maxId = 1;
    }

    //inserisco il caricamento in database
    $query = "INSERT INTO caricamento (email, nome_animale, id_animale, foto_animale, indirizzo, città, provincia, cap, tipologia, descrizione)
     VALUES ('$mail','$nome_animale',$maxId+1, '$es_data', '$indirizzo', '$citta', '$provincia','$cap', '$tipologia', '$descrizione')";    

    $res=pg_query($db, $query);
    if(!$res){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    } 
    
    //inserisco l'animale in database
    $query2 = "INSERT INTO animali (id, nome, image, casa_provvisoria, età, tipologia, descrizione, adottato, adottato_da, caricato_da)
     VALUES ($maxId+1,'$nome_animale', '$es_data', '$indirizzo', '$eta', '$tipologia', '$descrizione', false, null, '$mail')";

    $res2=pg_query($db, $query2);
    if(!$res2){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    }

    //aumento il numero di animali caricati da quel particolare utente
    $query3 = "UPDATE utenti
                SET n_caricati = n_caricati + 1
                WHERE email = '$mail';
    ";
    $res3=pg_query($db, $query3);
    if(!$res3){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    }

    header("Location: ./generica.php?messaggio=caricamentoRiuscito");

    pg_close($db);
?>