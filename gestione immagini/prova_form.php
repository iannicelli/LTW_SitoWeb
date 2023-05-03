<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova_form</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post" action="store.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="4194304">
        Carica un'immagine in formato jpg o png <br>
        
        Nome: <input type="text" name='nome'> <br>
        Immagine: <input type="file" name="image"> <br><br>
        Il tempo di caricamento dipende dalla tua velocità di connessione. <br>
        Attendi la scritta: "File inviato con successo." per essere sicuro di aver spedito il file. <br>

        casa_provvisoria: <input type="text" name="casa_provvisoria"> <br>
        età: <input type="number" name="eta"> <br>
        tipologia: <input type="text" name="tipologia"> <br>
        descrizione: <input type="text" name="descrizione"><br>
        razza: <input type="text" name="razza"> <br>
        <input type="submit" value="Invia"><br>
    </form>

    <?php
        //verifico caricament
        if(!isset($_FILES['image']) || !is_uploaded_file($_FILES['image']['tmp_name'])){
            echo 'File non inviato';
            exit;
        }

        //impostiamo il percorso della cartella dove mettere il file
        $uploaddir = 'mioupload/';
        //recupero il percorso temporaneo del file
        $immagine_tmp = $_FILES['image']['tmp_name'];
        //recupero il nome originale del file caricato
        $immagine_name = $_FILES['image']['name'];
        //verifico tramite function se il file è stato spostato nella cartella scelta
        if(move_uploaded_file($immagine_tmp, $uploaddir.$immagine_name)){
            echo 'File inviato';
        }
        else{
            echo 'Caricamento invalido';
        }
    ?>
</body>
</html>