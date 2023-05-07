<?php
    function inserisci($x){

        // Connessione al database
    include '../../login/loginDB.php';

    // Query per recuperare i primi 10 animali dal database
        $query = "SELECT * FROM animali LIMIT 8";
        $result = pg_query($db, $query);
    
        if ($result && pg_num_rows($result) > 0) {
          // Recuperare i dati dell'animale dal risultato della query in un array
          $animali = pg_fetch_all($result);
        } else {
            // Nessun animale trovato con l'id specificato
            echo "Animale non trovato.";
        }
        
        // Recupera l'immagine dal database
        $animale = $animali[$x];
        $data = pg_unescape_bytea($animale['image']);
        $file_name = $animale['nome'] . ".jpeg";
        $img = fopen($file_name, 'wb') or die("cannot open image\n");
        fwrite($img, $data) or die("cannot write image data\n");
        echo '<img src="' . $file_name . '">';
    }
?>