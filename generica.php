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

        /*
        MESSAGGI DI ERRORE POSSIBILI
            - emailNonEsistente
            - registrazioneCompletata
            - passwordErrata
            - nonLoggato
            - nonLoggato2
            - modificaEffettuata
            - adottato
            - emailPresente
            - caricamentoRiuscito
            - nessunaAdozione
            - nessunCaricamento
        */
          
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
                    <a href="./login/registrazioneUtente.php"> <input type="button" class="button" id="centrato" name="Register" value="Registrati!" /></a>
        
        
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
                        <a href="./home.php"><input type="button" class="button" id="button" name="Register" value="Home" /></a>


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
                        <a href="./login/login.php"><input type="button" class="button" id="button" name="Register" value="Login" /></a>


                    </div>';
            }
            else if($messaggio=='passwordErrata2'){
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
                        <a href="./login/modificaPassword.php"><input type="button" class="button" id="button" name="Register" value="Riprovaw" /></a>


                    </div>';
            }
            else if($messaggio == 'nonLoggato'){
                echo' <div id="login"><div id="titolologin"><label>Effettuare login</label></div>
             
                     <div id="testo">
                     <br>
                     <br>
                     <br>
                 Puoi adottare un animale solo dopo aver fatto il login.<br>
                 Clicca sul pulsante Home per essere rendirizzato alla pagina Home ed effettuare il login.    
                 </label><br>
                 </div>
         
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                 <a href="./home.php"><input type="button" class="button" id="button" name="Register" value="Home" /></a>
                     </div>';
             }
             else if($messaggio == 'nonLoggato2'){
                echo' <div id="login"><div id="titolologin"><label>Effettuare login</label></div>
             
                     <div id="testo">
                     <br>
                     <br>
                     <br>
                 Puoi caricare un animale solo dopo aver fatto il login.<br>
                 Clicca sul pulsante Home per essere rendirizzato alla pagina Home ed effettuare il login.    
                 </label><br>
                 </div>
         
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                 <a href="./home.php"><input type="button" class="button" id="button" name="Register" value="Home" /></a>
                     </div>';
             }
            else if($messaggio=='modificaEffettuata'){
                echo' <div id="login"><div id="titolologin"><label>Modifica completata</label></div>
            
                    <div id="testo">
                        <br>
                        <br>
                        <br>
                    Modifica effettuata con successo! <br>
                    Clicca sul pulsante in basso per essere reindirizzato alla pagina Home.
                    </label><br>
                    </div>

                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="./home.php"><input type="button" class="button" id="button" name="Register" value="Home" /></a>

                    </div>';
            }

            else if($messaggio == 'adottato'){
                echo' <div id="login"><div id="titolologin"><label>Adottato</label></div>
             
                     <div id="testo">
                     <br>
                     <br>
                     <br>
                 Siamo spiacenti, questo animale ha già trovato la sua nuova casa!<br>
                     Tanti altri amici però hanno ancora bisogno di te, torna alla pagina precedente per conoscerli.
                 </label><br>
                 </div>
         
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                     <a href="./pets/pets.php"><input type="button" class="button" id="button" name="Back" value="Pets" /></a>
         
                     </div>';
             }

             else if($messaggio == 'emailPresente'){
                echo' <div id="login"><div id="titolologin"><label>Email presente</label></div>
             
                     <div id="testo">
                     <br>
                     <br>
                     
                 Questa email risulta già registrata nel nostro database!<br>
                 Clicca sul pulsante in basso per essere reindirizzato alla pagina di registrazione e provare con una nuova email.
                 </label><br>
                 </div>
         
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                     <a href="./login/registrazioneUtente.php"><input type="button" class="button" id="button" name="Back" value="Registrati!" /></a>
         
                     </div>';
             }
             else if($messaggio == 'caricamentoRiuscito'){
                echo' <div id="login"><div id="titolologin"><label>Caricamento Completato</label></div>
             
                     <div id="testo">
                     <br>
                     <br>
                     
                 Inserimento completato con successo!<br>
                 Speriamo questo animale trovi una casa accogliente al più presto.<br>
                 Clicca sul tasto Home per essere rendirizzato alla pagina principale. </label>
                 </div>
         
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                 <a href="./home.php"><input type="button" class="button" id="button" name="Register" value="Home" /></a>

                     </div>';
             }
            
             else if($messaggio == 'nessunaAdozione'){
                echo' <div id="login"><div id="titolologin"><label>Nessuna Adozione</label></div>
             
                     <div id="testo">
                     <br>
                     <br>
                     
                 Sembra tu non abbia adottato ancora alcun animale!<br>
                 Clicca sul pulsante in basso per conoscere tutti gli animali che hanno bisogno di una casa e di tanto affetto.
                  </label>
                 </div>
         
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                 <a href="./pets/pets.php"><input type="button" class="button" id="button" name="Register" value="Pets" /></a>

                     </div>';
             }
             else if($messaggio == 'nessunCaricamento'){
                echo' <div id="login"><div id="titolologin"><label>Nessun Caricamento</label></div>
             
                     <div id="testo">
                     <br>
                    
                     
                 Sembra tu non abbia inserito alcun animale!<br>
                 Se conosci qualche trovatello che ha bisogno di una nuova casa e di una nuova famiglia, non esitare a farcelo conoscere.
                 Clicca sul pulsante in basso per essere reindirizzato alla pagina pets.
                 </label>
                 </div>
         
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                 <a href="./pets/pets.php"><input type="button" class="button" id="button" name="Register" value="Pets" /></a>

                     </div>';
             }
             
             
             
        ?>
        
    </body>
</html>