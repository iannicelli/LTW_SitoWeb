<?php
    function isAdopted($x){
        include '../../login/loginDB.php';
        $query = "SELECT * FROM animali where id=$x";
        $result = pg_query($db, $query);
    
        if ($result) {
          $animale = pg_fetch_assoc($result);
        } else {
            // Nessun animale trovato con l'id specificato
            echo "Animale non trovato.";
        }

        if($animale['adottato']=='t'){
           return true;
       }
        else {
          return false;
        }

    }

?>