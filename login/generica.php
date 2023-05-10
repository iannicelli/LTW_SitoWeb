<html>
    <head>
        <title>Azione</title>
        <link rel="stylesheet" href="stylelogin.css" type="text/css" />
    </head>
    <body background="./sfondo/giusta.jpg">
        <?php
            
            $messaggio = $_GET['messaggio'];
            if($messaggio == 'emailNonEsistente'){
                echo '<div id="login"><div id="titolologin"><label>Email non esistente</label></div>
                    
                <div id="testo">
                    <br>
                    <br>
                    <br>
                    Email non esistente.<br> Se non sei ancora registrato, registrati ora!</label><br>
                </div>
        
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <a href="./registrazioneUtente.php"> <input type="button" class="button" id="centrato" name="Register" value="Registrati!" /></a>
        
        
                </div>';
                
            }
            else if($messaggio == 'registrazioneCompletata'){
               echo' <div id="login"><div id="titolologin"><label>Registrazione completata</label></div>
            
                    <div id="testo">
                        <br>
                        <br>
                        <br>
                    Registrazione effettuata con successo! <br>
                        Clicca sul pulsante in basso per essere reindirizzato alla pagina Home ed effettuare il login.
                    </label><br>
                    </div>

                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="../nav.php"><input type="button" class="button" id="button" name="Register" value="Home" /></a>


                    </div>';
            }
            else if($messaggio=='passwordErrata'){
                echo' <div id="login"><div id="titolologin"><label>Errore Password</label></div>
            
                    <div id="testo">
                        <br>
                        <br>
                        <br>
                    La password risulta errata <br>
                        Riprovare.
                    </label><br>
                    </div>

                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="./login.php"><input type="button" class="button" id="button" name="Register" value="Login" /></a>


                    </div>';
            }
            else if($messaggio='modificaEffettuata'){
                echo' <div id="login"><div id="titolologin"><label>Errore Password</label></div>
            
                    <div id="testo">
                        <br>
                        <br>
                        <br>
                    Modifica effettuata con successo! <br>
                    Clicca sul pulsante in basso per essere reindirizzato alla pagina Home.
                    </label><br>
                    </div>

                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="../nav.php"><input type="button" class="button" id="button" name="Register" value="Home" /></a>

</div>';
            }
        ?>
        
    </body>
</html>