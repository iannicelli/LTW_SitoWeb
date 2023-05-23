<html>
    <head>
        <title>Modifica-Password</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="icon" href="../Immagini logo/favicon.png" type="image/png">
        <script src="./animazione.js"></script>
        
        <link rel="stylesheet" href="stylelogin.css" type="text/css" />
    </head>
    <body background="./sfondo/giusta.jpg">
        
        <div id="login"><div id="titolologin"><label>Modifica Password</label></div>
          <?php 
                include 'loginDB.php';
                
            ?>  
            <form action="modificaPasswordDB.php" class="formlogin" method="post">
                <label>Password Vecchia:</label>
                <input type="password" required="required" name="pass1" class="testo" placeholder="Password vecchia..." /><br>
                <label>Password Nuova:</label>
                <input type="password" required name="pass2" class="testo" placeholder="Password nuova..." /><br>
                
                <div class="button-wrapper">
                    <input type="submit" class="button" name="submit" value="Modifica" />
                   </div>
            </form>
        </div>
    </body>
</html>