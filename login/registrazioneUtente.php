<html>
    <head>
        <title>Form-Registrazione</title>
        <link rel="stylesheet" href="styleregistrazione.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="Controlli_form.js"></script>
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

    <div id="login"><div id="titolologin"><label>Registrazione</label></div>
            <form name = "reg" action="registrazioneUtenteDB.php" class="formlogin" method="post" onsubmit="return controlli_reg();">

            <label>Nome:</label>
            <input type="text" name="nome" id="nome" class="testo" placeholder="Nome..." /><br>
            <label>Cognome:</label>
            <input type="text" name="cognome" class="testo" placeholder="Cognome..." /><br>
            
            <label>Email:</label>
            <input type="text" name="email" class="testo" placeholder="Email..."/><br>
            <label>Password:</label>
            <input type="password" id="txt" name="pass1"  onkeyup="validator()" pattern="[\S\s]" class="testo" placeholder="Password..." /><br>
            <div id="ProgressBar">
                <div id="bar">
                </div>
            </div>
            <label>Conferma Password:</label>
            <input type="password" name="password2" class="testo" placeholder="Conferma password..." /><br>
        
            <div class="button-wrapper">
                    <a href="../nav.php"><input type="button" class="button" id="register" name="Register" value="Home" /></a>
                    <input type="submit" class="button" name="submit" value="Registrati!" />
                   </div>
            </form>
        </div>

        <script>
    function validator() {
      var x = 0;
      var password = document.getElementById('txt').value;
      var bar = document.getElementById("bar");
      var al = document.getElementById("alert");
    
      //controllo numeri
      var check=/[0-9]/;
      if(check.test(password)){
        x = x + 20;
      }
      //controllo minuscole
      var check2=/[a-z]/;
      if(check2.test(password)){
        x = x + 20;
      }
      //controllo maiuscole
      var check3=/[A-Z]/;
      if(check3.test(password)){
        x = x + 20;
      }
      //controllo simboli
      var check4=/[$-/:-?{-~!"^_`\[\]]/;
      if(check4.test(password)){
        x = x + 20;
      }
      // controllo lunghezza (minore o uguale a 10 caratteri)
      if(password.length >=10){
        x = x + 20;
      }
    
      // risultato
      bar.style.width = x + "%";
      //voto minimo 20
      if (x <=20) {
        bar.style.backgroundColor = "red";
        bar.innerHTML = "Weak";
      }

      //voto minimo 40
      else if (x <=40) {
        bar.style.backgroundColor = "orange";
        bar.innerHTML = "Good";
      }

      //voto minimo 80
      else if (x <= 60) {
        bar.style.backgroundColor = "#4CAF50";
        bar.innerHTML = "Strong";
      }
    
      // voto massimo 100
      if (x == 100) {
        bar.style.backgroundColor = "green";
        bar.innerHTML = "Very strong";
      }
      
    
      if(password.length == 0){
        x == 0;
        bar.innerHTML = "";
      }
    
      //controllo spazi bianchi
      var check5=/\s\S/;
      if(check5.test(password)){
        bar.innerHTML = "Password must not contain white spaces";
        bar.style.backgroundColor = "red";
      }
    }
    </script>
    </body>
</html>