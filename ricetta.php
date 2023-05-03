<html>
   <?php
        include './login/loginDB.php';
        $titolo = $_GET['titolo'];

        $query = "SELECT *
            FROM ricette
            WHERE titolo = '$titolo';";
        $res=pg_query($db, $query);
        if(!$res){
            echo "ERRORE QUERY: " . pg_last_error($db);
            exit;
        }

        $row = pg_fetch_array($res);

        $query2="SELECT * FROM utenti WHERE email= '".$row["utente"]."';";  

        $res2=pg_query($db, $query2);
        if(!$res2){
            echo "ERRORE QUERY: " . pg_last_error($db);
            exit;
        }

        $row2 = pg_fetch_array($res2);

    ?>
    
    <head>
        <?php
            echo "<title>".$row["titolo"]."</title>";
        ?>
        <link rel="icon" href="SS.png" type="image/png"/>
        <link rel="stylesheet", type="text/css", href="Layout.css">
        <link rel="stylesheet", type="text/css", href="Ricetta.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <html lang="it">
        
    </head>

    <?php  include "off-canvas.php"; ?>
    <script src="Home.js"></script>

    <body>
        
        <div class="topnav">
            <a href="Home.php">
                <img src="SaporiDelSud.png" alt="Sapori del Sud" width="200" height="75"/>
            <a>
            
            <div class="topnav-right">
                    
                <?php 

                    if(isLogged())
                        echo '<a  onclick="openNav()">
                                <img src="Account.png" alt="Account" width="50" height="50">
                            </a>
                            ';
                    else
                        echo '<a class="btn-header" href="LogIn.php">Login</a>';          

                ?> 
            </div>
            
        </div>
        <div class="content">

            <?php
                echo "<h1>".$row["titolo"]."</h1>";
                echo "<p id='provenienza'>Località: ".$row['regione']."&nbsp &nbsp".$row['provincia']."</p>";
                echo "<img id='imgric' src=".$row["immagine"]." alt='File non disponibile'>";
                echo "<div id='ricetta'>";
                echo "<p>".$row["descrizione"]."<p>";
                echo "<p class='prep'>".$row["preparazione"]."<p>";
                echo '<p id="utente">Ricetta di: '.$row2["nome"].' '.$row2["cognome"].'</p>';
                echo "</div>";
                ?>
            
        </div>
        <br>
        <?php

            echo '<p style="text-align: center">';
            if(isLogged()){
                
                $utente= $_SESSION['email'];
                $query= "SELECT * FROM preferiti WHERE ricettapref='$titolo' AND utente='$utente'";

                $res=pg_query($db, $query);
                if(!$res){
                    echo "ERRORE QUERY: " . pg_last_error($db);
                    exit;
                }

                if(pg_num_rows($res)>0){
                    echo '<a href="RimuoviRicettaPref.php?nomeric='.$row["titolo"].'" class="btn">Rimuovi dai preferiti</a>';
                }
                else{
                    echo '<a href="AggiungiRicettaPref.php?nomeric='.$row["titolo"].'" class="btn">Aggiungi fra i preferiti</a>';
                }
            }

            echo '</p>';

            echo '<p style="text-align: right">';
            if(isLogged() && $utente==$row['utente']||isLogged() && isAdmin()){
                echo '<a href="ModificaRicetta.php?nomeric='.$row["titolo"].'" class="btn">Modifica ricetta</a>';
            }
            if(isLogged() && isAdmin()){
                echo '<a href="EliminaRicetta.php?nomeric='.$row["titolo"].'" class="btn">Elimina ricetta</a>';
            }
            echo '</p>';

            pg_close($db);
        ?>
        <div class="footer">
            <img src="SS.png" alt="Sapori del Sud" width="150" height="150"/>
            &nbsp;
            &copy; 2022 Sapori del Sud 
            &nbsp;
            <a href="https://protezionedatipersonali.it/informativa">Privacy</a> 
            <a href="Contatti.html">Chi siamo</a>
        </div>
    </body>
</html>