<html>
    <head>
        <title>Form-Registrazione</title>
        <link rel="stylesheet" href="styleregistrazione.css" type="text/css" />
    </head>
    <body background="./sfondo/giusta.jpg">
       <?php
            include 'loginDB.php';
            if(isset($_GET['warning'])){
                $warning= $_GET['warning'];
                if($warning==1){
                    echo '<p style="color: red;">L\'email "'.$_GET['mail'].'" è già registrata sul nostro sito!</a></p>' ;
                }
                
            }  
        ?>

    <div class="content" id="login"><div id="titolologin"><label>Registrazione</label></div>
            <form name = "reg" action="registrazioneUtenteDB.php" class="formlogin" method="post">

            <label>Nome:</label>
            <input type="text" name="nome" class="testo" placeholder="Nome..." /><br>
            <label>Cognome:</label>
            <input type="text" name="cognome" class="testo" placeholder="Cognome..." /><br>
            
            <label>Email:</label>
            <input type="text" name="email" class="testo" placeholder="Email..." /><br>
            <label>Password:</label>
            <input type="password" name="password" class="testo" placeholder="Password..." /><br>
            <label>Conferma Password:</label>
            <input type="password" name="password2" class="testo" placeholder="Conferma password..." /><br>
        
            <a href="registrazioneUtente.php"><input type="button" class="button" id="register" name="Register" value="Register" /></a>
            <input type="submit" class="button" name="submit" value="Login" />
            </form>
        </div>
    </body>
</html>