
<?php
    // per la connessione al database

    $host = 'localhost';
    $port = '5432';
    $db = 'EsameLTW';
    $username = 'postgres';
    $password = 'biar';
    $connection_string = "host=$host dbname=$db user=$username password=$password";

    $db = pg_connect($connection_string) or die('Impossibile connettersi al database: '.pg_last_error());
?>