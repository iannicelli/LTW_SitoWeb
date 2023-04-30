<html>
    <?php
        include 'loginDB.php';
        
        include "checkIsLogged.php";

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

       <title>Profilo Utente</title>
       <link rel="stylesheet", type="text/css", href="../style.css">

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <html lang="it"> 
    </head>

    <body>


	<div class="banner2">
    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #E19853;">
        <div class="container">
            <a class ="navbar-brand mb-0 h1" href="#">
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
                    <a class="nav-link active" href="#"> <!-- disabled-->
                        Home<span class="sr-only">(current)</span></a>
                    </a>
                </li>
                <li class="nav-item active" href="#" >
                    <a href="../AboutUs.html" class="nav-link active" >
                        AboutUs
                    </a>    
                </li>
                <li class="nav-item active" href="#">
                    <a href="../pets.html" class="nav-link active">
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
					<a href="#" class="nav-link active">
								<img src="../omino.png" height="37" width="37"></img>
					</a>
			
                </li>
    
    

            </ul>

            </div>

        </div>
    </nav>
	

        <div class="wrapper">

            <div id="formContent">
                
                <div id="icona">
                    <!-- <img src="LogIn.png" width="70" height="70" /> -->
                    
                </div>

                <?php
                $row=pg_fetch_array($res);
                echo "<p><b>Nome:</b> ".$row["nome"]."</p>";
                echo "<p><b>Cognome:</b> ".$row["cognome"]."<p>"; 
                echo "<p><b>E-mail:</b> ".$row["email"]."</p>"; 
                ?>
                <br>
                <p style="text-align:center">
                    <a href="#"> <input type='submit' id="pass" value='Modifica Password'></a>
                    <a href="#"> <input type='submit' id="dati" value='Modifica Dati'></a>
                </p>
    
            </div>

        </div>


        <div class="footer">
            &nbsp;
            &copy; 2022 Sapori del Sud 
            &nbsp;
            <a href="https://protezionedatipersonali.it/informativa">Privacy</a> 
            <a href="Contatti.html">Chi siamo</a>
        </div>

    </body>

</html>