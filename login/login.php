<html>
    <head>
        <title>Form-Login</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./animazione.js"></script>
        <link rel="stylesheet" href="stylelogin.css" type="text/css" />
    </head>
    <body background="./sfondo/giusta.jpg">
        
        <div id="login"><div id="titolologin"><label>Login</label></div>
          <?php 
                include 'loginDB.php';
                if(isset($_GET['warning'])){
                    $warning= $_GET['warning'];
                    switch($warning){
                        case 1 : echo '<p style="color: red;">Email non esistente. Se non sei ancora registrato, registrati ora!</a></p>' ;
                        break;
                        case 2 : echo '<p>Per adottare o inserire un animale occorre aver effettuato il login.</p>' ;
                        break;
                        case 3 : echo '<p>La password risulta sbagliata.</p>' ;
                        break;
                    }
                        
                }
            ?>  
            <form name="login" action="loginUtente.php" class="formlogin" method="post" onsubmit="return controlli_login();">
                <label>Email:</label>
                <input type="text" required="required" name="email" class="testo" placeholder="Email..." /><br>
                <label>Password:</label>
                <input type="password" name="password" class="testo" placeholder="Password..." /><br>
                
                <div class="button-wrapper">
                    <a href="./registrazioneUtente.php"><input type="button" class="button" id="register" name="Register" value="Register!" /></a>
                    <input type="submit" class="button" name="submit" value="Login" />
                   </div>
            </form>
        </div>
    </body>
</html>