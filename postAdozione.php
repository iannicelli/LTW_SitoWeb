<html>
    <head>
        <title>Azione</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./login/animazione.js"></script>
        <link rel="stylesheet" href="./login/stylelogin.css" type="text/css" />
        <link rel="icon" href="./Immagini logo/favicon.png" type="image/png">
    </head>
    <body background="./login/sfondo/giusta.jpg">
        <?php
            $id = $_GET['id'];

            include './login/loginDB.php';

            $query = "SELECT * 
                        FROM animali  
                         WHERE id='$id';";
            $res = pg_query($db, $query);
            if(!$res){
                echo "ERRORE QUERY: " . pg_last_error($db);
                exit;
            }
            $animale = pg_fetch_array($res);
            $nome_animale = $animale['nome'];
            $caricato_da = $animale['caricato_da'];
            $casa_provvisoria = $animale['casa_provvisoria'];

        ?>

        <div id="login"><div id="titolologin"><label>Adozione Completata</label></div>
                    
            <div id="testo">
                <br>
                <br>
              
                Grazie per aver adottato <?php echo $nome_animale;?> <br> 
                Le informazioni del suo attuale proprietario sono: <br>
                -EMAIL: <?php echo $caricato_da;?><br>
                -INDIRIZZO: <?php echo $casa_provvisoria;?><br>
                Verrete messi in contatto al più presto!
                </label>
            </div>
        
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <a href="./home.php"> <input type="button" class="button" id="centrato" name="Register" value="Home" /></a>
        
        
        </div>
                
        
    </body>
</html>