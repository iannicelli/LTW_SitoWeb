<html>
    <head>
        <title>Form-Login</title>
        <link rel="stylesheet" href="stylelogin.css" type="text/css" />
    </head>
    <body background="./sfondo/giusta.jpg">
        <?php 
            include 'loginBD.php';
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
        <div id="login"><div id="titolologin"><label>Login</label></div>
            <form action="loginUtente.php" class="formlogin" method="post">
                <label>Email:</label>
                <input type="text" name="email" class="testo" placeholder="Email..." /><br>
                <label>Password:</label>
                <input type="password" name="password" class="testo" placeholder="Password..." /><br>
                <a href="registrazioneUtente.php"><input type="button" class="button" id="register" name="Register" value="Register" /></a>
                <input type="submit" class="button" name="submit" value="Login" />
            </form>
        </div>
    </body>
</html>