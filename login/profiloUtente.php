<!DOCTYPE html>
<html lang="en">

<html>
    <?php
        include 'loginDB.php';
        
        include 'checkIsLogged.php';

        if(isLogged()){
            $mail= $_SESSION['email'];
        
            $query = "SELECT * FROM utenti WHERE email='$mail';";

            $res = pg_query($db, $query);
            if(!$res){
                echo "ERRORE QUERY: " . pg_last_error($db);
                exit;
            }
        }
        
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="./Immagini logo/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://unpkg.com/vue@3"></script>
    
    <link rel="icon" href="../Immagini logo/favicon.png" type="image/png">

    <!--da martina -->
    <link rel="stylesheet", type="text/css", href="./daMartina/Layout.css">
       <link rel="stylesheet", type="text/css", href="./daMartina/ProfiloUtente.css">
       <link rel="stylesheet", type="text/css", href="./daMartina/card.css">
    <!--da martina -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-button {width:150px;}
    </style>

    <title>Profilo Utente</title>
</head>

<body style="height:600px">
	<?php

        if(isLogged()){
            echo '<i>'.$_SESSION['nome'].' '.$_SESSION['cognome'].'</i>';
        }
    ?>
	<div class="banner_profiloUtente">
    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #E19853;">
        <div class="container">
            <a class ="navbar-brand mb-0 h1" href="../nav.php">
            <img class = "d-inline-block" src ="../Immagini logo/SITO WEB (1).png" height="40" />
            Tale of Tails - Racconti di animali
            </a>
            <button class="navbar-toggler"
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav"  
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" href="../nav.php"> <!-- disabled-->
                        Home<span class="sr-only"></span></a>
                    </a>
                </li>
                <li class="nav-item active" href="../AboutUs.html" >
                    <a href="../AboutUs.html" class="nav-link active" >
                        AboutUs
                    </a>    
                </li>
                <li class="nav-item active" href="../immagini_animali/drive/pets.php">
                    <a href="../immagini_animali/drive/pets.php" class="nav-link active">
                        Pets
                    </a>
                </li>

                <!--pass: Progetto2023!-->

                <a class="btn text-white" style="background-color: #E19853;" href="#!" role="button">
                    <i class="fab fa-facebook-f" href="https://www.facebook.com/tuapaginadiFacebook" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </i>
                </a>
    
                <a class="btn text-white" style="background-color: #E19853;" href="#!" role="button">
                    <i class="bi bi-twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                          </svg>
                    </i>
                </a>
				
				<li class="nav-item active" href="#">
                    <a href="./logOut.php" class="nav-link active">
                        LogOut
                    </a>
                </li>
    
    

            </ul>

            </div>

        </div>
    </nav>

	</div>
    <br>
    <br>
    <br>


    <div class="wrapper">

            <div id="formContent">
                
                <div id="icona">
                    <div class="round-image">
                        <img src="./daMartina/giusta.png" width="70" height="70" />
                    </div>
                </div>

                <?php
                if(isLogged()){
                    $mail= $_SESSION['email'];
                
                    $query = "SELECT * FROM utenti WHERE email='$mail';";
        
                    $res = pg_query($db, $query);
                    if(!$res){
                        echo "ERRORE QUERY: " . pg_last_error($db);
                        exit;
                    }
                
                $row=pg_fetch_array($res);
                echo "<p><b>Nome:</b> ".$row["nome"]."</p>";
                echo "<p><b>Cognome:</b> ".$row["cognome"]."<p>"; 
                echo "<p><b>E-mail:</b> ".$row["email"]."</p>";
                echo "<p><b>N animali adottati:</b> ".$row["n_adottati"]."</p>";
                echo "<p><b>N animali inseriti:</b> ".$row["n_caricati"]."</p>";
                }
                ?>
                <br>

                <p style="text-align:center">
                    <a href="ModificaPassword.php"> <input type='submit' id="pass" value='Modifica Password'></a>
                </p>
    
            </div>

    </div>
    <div class="container_button">
    <a href="../immagini_animali/drive/pets.php"><input type="button" id="bot_1" value="Adotta un amico"></a>
    &emsp;
    <input type="button" id="bot_2" value="Aggiungi un 
    amico">
    </div>
    <br><br><br><br>

    <!--<div class="footer">
            <img src="../Immagini logo/favicon.png" alt="Tale of Tails" width="40" height="40"/>
            &nbsp;
            &copy; 2023 Tale of Tails
            &nbsp;
            <a href="https://protezionedatipersonali.it/informativa">Privacy</a> 
            <a href="../AboutUs.html">Chi siamo</a>
            &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            Contatti: iannicelli.1957045@studenti.uniroma1.it / lavini.1941986@studenti.uniroma1.it
    </div>-->
    <div id="nav_bassa">
        <nav_bassa></nav_bassa>
    </div>

    <script type="application/javascript" src="../nav_bassa.js"></script>

            <!--follie di chiara-->
            


        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>