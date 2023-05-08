<?php
    include './login/loginDB.php';

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

    //aggiungere +1 al numero animali adottati a la persona con quella particolare email
    //modificare nel database animali che quell'animale adottato = "true"

    pg_close($db);


    //decidere dove deve finire l'adozione
    header("location: ./login/regCompleta.html")
    
    
?>