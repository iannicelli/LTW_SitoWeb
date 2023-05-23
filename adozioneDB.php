<?php
    include './login/loginDB.php';
    include './login/checkIsLogged.php';

    //per l'id_animale utilizzare get

    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $indirizzo = $_POST['indirizzo'];
    $provincia = $_POST['provincia'];
    $telefono = $_POST['telefono'];
    $cognome = $_POST['cognome'];
    $citta = $_POST['citta'];
    $cap = $_POST['cap'];
    $email = $_POST['email'];
    
    $desiderio = $_POST['desiderio'];
    $famiglia = $_POST['famiglia'];
    $varie = $_POST['varie'];
    $occuparsi = $_POST['occuparsi'];
    $altri = $_POST['altri'];

    //$documento da curare dopo

    $file_tmp = $_FILES['image']['tmp_name'];
    $file_name = $_FILES['image']['name'];

    $img = fopen($file_tmp, 'r') or die("cannot read image\n");
    $data = fread($img, filesize($file_tmp));

    $es_data = pg_escape_bytea($data);
    fclose($img);

    $query = "INSERT INTO adozioni (id_animale, nome, indirizzo, provincia, telefono, cognome, citta, cap, email, documento, desiderio, famiglia, varie, occuparsi, altri)
     VALUES ('$id','$nome', '$indirizzo', '$provincia', '$telefono', '$cognome', '$citta', '$cap', '$email', '$es_data', '$desiderio', '$famiglia', '$varie', '$occuparsi', '$altri');";
    
    $res=pg_query($db, $query);
    if(!$res){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    } 

    //modificare nel database animali che quell'animale adottato = "true"
    $query2 = "UPDATE animali
                SET adottato = true
                WHERE id = $id;
    ";
    $res2=pg_query($db, $query2);
    if(!$res2){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    }

    //aggiungere +1 al numero animali adottati a la persona con quella particolare email    
    if(isLogged()){
        $mail= $_SESSION['email'];
     }
     else{
        header("location: ./generica.php?messaggio=nonLoggato");
     }
    $query3 = "UPDATE utenti
                SET n_adottati = n_adottati + 1
                WHERE email = '$mail';
    ";
    $res3=pg_query($db, $query3);
    if(!$res3){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    }

    //aggiungere la mail dell'utente che ha adottato l'animale
    $query4 = "UPDATE animali
                SET adottato_da = '$mail'
                WHERE id = $id; 
    ";  
    $res4=pg_query($db, $query4);   
    if(!$res4){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    }
    pg_close($db);


    //decidere dove deve finire l'adozione
    header("location: ./generica.php?messaggio=adozioneRiuscita")
    
    
?>