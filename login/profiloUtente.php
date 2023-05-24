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

    <link rel="stylesheet", type="text/css", href="./ProfiloUtente.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



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
            <a class ="navbar-brand mb-0 h1" href="../home.php">
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
                    <a class="nav-link active" href="../home.php"> <!-- disabled-->
                        Home<span class="sr-only"></span></a>
                    </a>
                </li>
                <li class="nav-item active" href="../AboutUs.html" >
                    <a href="../AboutUs.php" class="nav-link active" >
                        AboutUs
                    </a>    
                </li>
                <li class="nav-item active" href="../pets/pets.php">
                    <a href="../pets/pets.php" class="nav-link active">
                        Pets
                    </a>
                </li>

                <!--pass: Progetto2023!-->

                <a class="btn text-white"  href="https://www.facebook.com/profile.php?id=100092879172087&is_tour_dismissed=true" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

    
                <a class="btn text-white" href="https://www.instagram.com/_taleoftails/" role="button">
                    <i class="fab fa-instagram" height="40"></i>
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
                        <img src="../sfondo_about_us/per_logo.jpg" width="200" height="130" />
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
                echo "<p><b>N animali adottati:</b> ".$row["n_adottati"];
                echo '&emsp;&emsp;&emsp;&emsp;   ';
                echo '<a href="adottatiUtente.php?email='.$mail.'"><input type="button" class="pulsante" value="Visualizza"></a></p>';
                echo "<p><b>N animali inseriti:</b> ".$row["n_caricati"];
                echo '&emsp;&emsp;&emsp;&emsp;&emsp;';
                echo '<a href="caricatiUtente.php?email='.$mail.'"><input type="button" class="pulsante"  value="Visualizza"></a> </p>';
                }
                ?>
                <br>

                <p style="text-align:center">
                    <a href="ModificaPassword.php"> <input type='submit' id="pass" value='Modifica Password'></a>
                    <a href="ModificaDati.php"> <input type='submit' id="pass" value='Modifica Dati'></a>

                </p>
    
            </div>

    </div>
    <div class="container_button">
    <a href="../pets/pets.php"><input type="button" id="bot_1" value="Adotta un amico"></a>
    &emsp;
    <a href="../caricaAnimale.php"><input type="button" id="bot_2" value="Aggiungi un 
    amico">
    </a>
    </div>
    <br><br><br><br>

    <!-- 
                <div id="nav_bassa">
        <nav_bassa></nav_bassa>
    </div>

    -->

    
    <div class="footer">
        <img src="../Immagini logo/favicon.png" alt="Tale of Tails" width="40" height="40"/>
        &nbsp;
        &copy; 2023 Tale of Tails
        &nbsp;
        <a href="https://protezionedatipersonali.it/informativa">Privacy</a>  &emsp;
        <a href="./AboutUs.php">Chi siamo</a>
        &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        Contatti: iannicelli.1957045@studenti.uniroma1.it / lavini.1941986@studenti.uniroma1.it
    </div>


    <script type="application/javascript" src="../nav_bassa.js"></script>

            <!--follie di chiara-->
            


        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>