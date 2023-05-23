<html>
    <head>
        <title>Modifica-Dati</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./animazione.js"></script>
        
        <link rel="stylesheet" href="stylelogin.css" type="text/css" />
    </head>
    <body background="./sfondo/giusta.jpg">
        
        <div id="login"><div id="titolologin"><label>Modifica Dati</label></div>
          <?php 
                include 'loginDB.php';
                
            ?>  
            <form action="modificaDatiDB.php" class="formlogin" method="post">
                <label>Inserire nuovo nome:</label>
                <input type="text" required name="nome" class="testo" placeholder="Nome.." /><br>
                <label>Inserire nuovo cognome:</label>
                <input type="text" required name="cognome" class="testo" placeholder="Cognome..." /><br>
                
                <div class="button-wrapper">
                    <input type="submit" class="button" name="submit" value="Modifica" />
                   </div>
            </form>
        </div>
    </body>
</html>