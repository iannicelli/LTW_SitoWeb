<html>
    <head>
        <title>Form-Login</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./animazione.js"></script>
        <script src="Controlli_form.js"></script>
        <link rel="stylesheet" href="stylelogin.css" type="text/css" />
        <link rel="icon" href="../Immagini logo/favicon.png" type="image/png">

        <script>
          window.onload = function() {
            loadLoginData();

            document.getElementById("login-form").addEventListener("submit", function(event) {
              event.preventDefault(); // Impedisce l'invio del modulo

              const email = document.getElementById('email').value;
              const password = document.getElementById('password').value;
              const remember = document.getElementById('remember').checked;

              if (remember) {
                saveLoginData(email, password);
              } else {
                removeLoginData();
              }

              // Crea un elemento di input nascosto per inviare i dati tramite POST
              const hiddenEmailInput = document.createElement('input');
              hiddenEmailInput.type = 'hidden';
              hiddenEmailInput.name = 'email';
              hiddenEmailInput.value = email;
              document.getElementById('login-form').appendChild(hiddenEmailInput);

              const hiddenPasswordInput = document.createElement('input');
              hiddenPasswordInput.type = 'hidden';
              hiddenPasswordInput.name = 'password';
              hiddenPasswordInput.value = password;
              document.getElementById('login-form').appendChild(hiddenPasswordInput);

              // Invio del form
              document.getElementById('login-form').submit();
            });
          };

          function loadLoginData() {
            const email = localStorage.getItem('loginEmail');
            const password = localStorage.getItem('loginPassword');

            if (email && password) {
              document.getElementById('email').value = email;
              document.getElementById('password').value = password;
            }
          }

          function saveLoginData(email, password) {
            localStorage.setItem('loginEmail', email);
            localStorage.setItem('loginPassword', password);
          }

          function removeLoginData() {
            localStorage.removeItem('loginEmail');
            localStorage.removeItem('loginPassword');
          }



        </script>
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
            <form id="login-form" name="login-form" action="loginUtente.php" class="formlogin" method="post" onsubmit="return controlli_login();">
                <label>Email:</label>
                <input type="text" id="email" required="required" name="email" class="testo" placeholder="Email..." /><br>
                <label>Password:</label>
                <input type="password" id="password" name="password" class="testo" placeholder="Password..." /><br>

                <label for="remember">Ricordami:</label>
                <input type="checkbox" id="remember" name="remember">
                
                <div class="button-wrapper">
                    <a href="./registrazioneUtente.php"><input type="button" class="button" id="register" name="Register" value="Register!" /></a>
                    <input type="submit" class="button" name="submit2" value="Login" />
                   </div>
            </form>
        </div>
    </body>
</html>