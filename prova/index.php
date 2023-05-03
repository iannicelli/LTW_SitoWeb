<?php
include 'connesione.php';

// Funzione per aumentare il numero di n_adottati
function aumentaAdottati($db, $email) {
    $query = "UPDATE prova SET n_adottati = n_adottati + 1 WHERE email = '$email'";
    $result = pg_query($db, $query);
    if (!$result) {
        echo "Errore nell'esecuzione della query: " . pg_last_error($conn);
    }
}

// Funzione per aumentare il numero di n_caricati
function aumentaCaricati($db, $email) {
    $query = "UPDATE prova SET n_caricati = n_caricati + 1 WHERE email = '$email'";
    $result = pg_query($db, $query);
    if (!$result) {
        echo "Errore nell'esecuzione della query: " . pg_last_error($conn);
    }
}

if (isset($_POST['submit_adottati'])) {
    $email = $_POST['email'];
    aumentaAdottati($db, $email);
}

if (isset($_POST['submit_caricati'])) {
    $email = $_POST['email'];
    aumentaCaricati($db, $email);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Aumenta n_adottati e n_caricati</title>
</head>
<body>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>
        
        <input type="submit" name="submit_adottati" value="Aumenta n_adottati">
        <input type="submit" name="submit_caricati" value="Aumenta n_caricati">
    </form>
</body>
</html>
