
<?php
    $dbconn = pg_connect("host=localhost password=biar user=postgres port=5432 dbname=EsameLTW") or die("Errore di connessione " . pg_last_error());
    echo "Connessione riuscita<br>";
    
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_name = $_FILES['image']['name'];

    $nome = $_POST['nome'];
    $casa = $_POST['casa_provvisoria'];
    $eta = $_POST['eta'];
    $tipologia = $_POST['tipologia'];
    $descrizione = $_POST['descrizione'];
    $razza = $_POST['razza'];
    
    $img = fopen($file_tmp, 'r') or die("cannot read image\n");
    $data = fread($img, filesize($file_tmp));

    $es_data = pg_escape_bytea($data);
    fclose($img);

    $query = "INSERT INTO animali (id, nome, image, casa_provvisoria, età, tipologia, descrizione, razza, adottato, adottato_da, caricato_da)
     VALUES (8,'$nome', '$es_data', '$casa', '$eta', '$tipologia', '$descrizione', '$razza', false, null, null)";
    
    pg_query($dbconn, $query); 
    pg_close($dbconn);
?>
