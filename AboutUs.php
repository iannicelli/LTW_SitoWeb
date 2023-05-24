<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- follie di chiara-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-button {width:150px;}
    </style>
    <!-- follie di chiara-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3"></script>
    

    
    <link rel="icon" href="./Immagini logo/favicon.png" type="image/png">


    <title>AboutUs</title>
  </head>
  <body style="height:600px">
    <?php
    include "./login/checkIsLogged.php";

   if(isLogged()){
       echo '<i>'.$_SESSION['nome'].' '.$_SESSION['cognome'].'</i>';
   }
   ?>
   

    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #E19853;">
        <div class="container">
            <a 
            class ="navbar-brand mb-0 h1"
            href="./home.php">
            <img class = "d-inline-block" src ="./Immagini logo/SITO WEB (1).png" height="40" />
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
                    <a class="nav-link active" href="./home.php"> <!-- disabled-->
                        Home<span class="sr-only"></span></a>
                    </a>
                </li>
                <li class="nav-item active" href="#" >
                    <a href="./AboutUs.php" class="nav-link active">
                        AboutUs (current)
                    </a>    
                </li>
                <li class="nav-item active" href="#">
                    <a href="./pets/pets.php" class="nav-link active">
                        Pets
                    </a>
                </li>

                <a class="btn text-white"  href="https://www.facebook.com/profile.php?id=100092879172087&is_tour_dismissed=true" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

    
                <a class="btn text-white" href="https://www.instagram.com/_taleoftails/" role="button">
                    <i class="fab fa-instagram" height="40"></i>
                </a>
				<li class="nav-item active" href="#">
					<?php
						if(isLogged())
							echo '<a href="./login/profiloUtente.php" class="nav-link active">
								<img src="omino.png" height="37" width="37"></img>
							</a>';
						else 
							echo '<a href="./login/login.php" class="nav-link active">
								Login
							</a>';
					?>

                </li>   
    

            </ul>

            </div>

        </div>
    </nav>
    </div>

    
    <div class="wrapper" id="wrapperAU" >
        <div class="testimonial" id="testimonialAU">
            <article >
                <br>
                <br>
                <br>
                <h8> About us </h8>
                <img id="ImmagineAU" height="500px" width="500px" src=".\sfondo_about_us\AboutUS.jpg">
                <blockquote id="blockquoteAU">
                    Benvenuti nel nostro sito dedicato all'adozione di animali! Siamo due amiche unite dalla stessa passione e dalla convinzione profonda che tutte le vite siano importanti.
                    Grazie alla nostra determinazione abbiamo creato questo sito, con l'obiettivo di facilitare l'adozione responsabile.
                    Crediamo che ogni animale meriti amore, cura e un ambiente sicuro. Nel nostro sito troverete una vasta selezione di animali in cerca di una nuova famiglia.
                    Speriamo che possiate trovare l'amico a quattro zampe che riempirà la vostra vita di gioia e amore.
                </blockquote>
                <h9>Chiara e Federica</h9>
                <p>Fai la tua parte!</p>  
            </article>


        </div>

    </div>
    

    
    <div id="nav_bassa">
        <nav_bassa></nav_bassa>
</div>


    <script type="application/javascript" src="./nav_bassa.js"></script>

	

       

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

  </body>
</html>