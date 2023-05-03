<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <?php
        include 'connesione.php';
/*
        $nome = $_GET['nome'];
        $cognome = $_GET['cognome'];
        $email = $_GET['email'];
        $n_caricati = $_GET['n_caricati'];
        $n_adottati = $_GET['n_adottati'];
*/
        $query = "SELECT *
                FROM prova
            ";

        $result = pg_query($db, $query);
        if (pg_num_rows($result) > 0) {
            while ($row = pg_fetch_assoc($result)) {
              echo "Nome: " . $row['nome'] . "<br>";
              echo "Cognome: " . $row['cognome'] . "<br>";
              echo "Email: " . $row['email'] . "<br>";
              echo "Numero adottati: " . $row['n_adottati'] . "<br>";
              echo "Numero caricati: " . $row['n_caricati'] . "<br>";
              echo "<br>";
            }
          } else {
            echo "Nessun elemento trovato nella tabella 'prova'.";
          }
        ?>

    
</body>
</html>