<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="./Immagini logo/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="./style.css">
    

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-button {width:150px;}
    </style>
    

    <title>Modulo inserimento del trovatello</title>
</head>

<body style="height:600px">
	<?php
         include "./login/checkIsLogged.php";

        if(isLogged()){
            //echo '<i>'.$_SESSION['nome'].' '.$_SESSION['cognome'].'</i>';
        }
    ?>
	<div class="banneradozione">
    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #E19853;">
        <div class="container">
            <a class ="navbar-brand mb-0 h1" href="#">
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
                    <a class="nav-link active" href="#"> <!-- disabled-->
                        Home<span class="sr-only">(current)</span></a>
                    </a>
                </li>
                <li class="nav-item active" href="#" >
                    <a href="./AboutUs.html" class="nav-link active" >
                        AboutUs
                    </a>    
                </li>
                <li class="nav-item active" href="#">
                    <a href="./pets.html" class="nav-link active">
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
					<?php
						if(isLogged())
							echo '<a href="#" class="nav-link active">
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




    <div class="container-text-center">
        <br>
        <br>
        <br>
        <div class="prova" style="text-align: center;">
            <img src="./immagini_animali/modulo_carica.png" style="width: 200px; height: 200px;">
        </div>
        <h4>Modulo di inserimento</h4>

        
        <br>
        <br>
        <br>

    <!-- aggiungere un js con controlli -->
    <form name="caricamento" action="caricaAnimaleDB.php" class="formadozione" method="post" enctype="multipart/form-data">
    
    <!--<form name="adozione" action="./adozioneDB.php?id=10" class="formadozione" method="post" enctype="multipart/form-data">-->
    <div class="row">
    <!---------padding------------>

    <div class="col1">
        <br>
    </div>
    <!---------primo colonna------------>
    <div class="col">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome del trovatello (sarai tu a darlo, opta per un bel nome!)*</label>
            <input type="text" required name= "nome_animale" class="form-control" id="nome" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="indirizzo" name="indirizzo" class="form-label">Indirizzo della casa provvisoria*</label>
            <input type="text" required name="indirizzo" class="form-control" id="indirizzo">
        </div>
        
        <div class="mb-3">
            <label for="provincia" class="form-label">Provincia della casa provvisoria*</label>
            <input type="text" required name="provincia" class="form-control" id="provincia">
        </div>
        

        <div class="form-group">
    <label for="exampleFormControlSelect1">Tipologia*</label>
    <select class="form-control" required name="tipologia" id="exampleFormControlSelect1">
      <option></option>
      <option>cane</option>
      <option>gatto</option>
      <option>criceto</option>
      <option>coniglio</option>
      <option>uccello</option>
    </select>
  </div>
       
        
    </div>

    <div class="col">
        <div class="mb-3">
            <label for="eta" class="form-label">Età del trovatello, anche indicativa</label>
            <input type="text" name="eta" class="form-control" id="eta" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="indirizzo" class="form-label">Città della casa provvisoria*</label>
            <input type="text" required name="citta" class="form-control" id="citta">
        </div>
        
        <div class="mb-3">
            <label for="provincia" class="form-label">CAP della casa provvisoria*</label>
            <input type="text" required name="cap" class="form-control" id="cap">
        </div>
        

    

    </div>

    <!---------padding------------>
    <div class="col1">
        <br>
    </div>
  </div>


    
  </div>
  <div class="row">
    <div class="col1">
    </div>
    
    <div class="col">
        <br>

        <div class="form-group">
            <label for="input">Lascia una descrizione che invogli gli altri utenti ad adottare il trovatello*</label>
            <textarea class="form-control" required name="descrizione" id="desidero" rows="2"></textarea>
        </div>

    <div class="col">
        <br>
    <label for="exampleFormControlFile1">Inserisci foto: *</label>
    <input type="file" required id="foto_carica" name="image" class="form-control" aria-label="file example">
    <div class="invalid-feedback">Example invalid form file feedback</div>

        <div class="mb-3 form-check">
        <br>
            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Accetto tutte le condizioni*</label>
        </div>

        <label class="form-check-label" id="ok">"*": campo obbligatorio</label>

    </div> <!--chiudo l'unica grande colonna-->


      <!---------padding------------>
      <div class="col1">
        <br>
    </div>
  </div>

   
    <div class="col1">

    </div>
    </div> <!--chiudo l'ultima row-->
    </div>

    <div class="row">
    <div class="col2">
            <br>
    </div>
    <div class="col">
        <button type="submit" class="btn-btn-primary">Submit</button>
        <br>
        <br>

    </div>
            <br>
    </div>
    </div>

        <?php
        //verifico caricament
        if(!isset($_FILES['image']) || !is_uploaded_file($_FILES['image']['tmp_name'])){
            exit;
        }

        //impostiamo il percorso della cartella dove mettere il file
        $uploaddir = 'nuovi_animali/';
        //recupero il percorso temporaneo del file
        $immagine_tmp = $_FILES['image']['tmp_name'];
        //recupero il nome originale del file caricato
        $immagine_name = $_FILES['image']['name'];
        //verifico tramite function se il file è stato spostato nella cartella scelta
        if(move_uploaded_file($immagine_tmp, $uploaddir.$immagine_name)){
            echo 'Foto inviata';
        }
        else{
            echo 'Caricamento invalido';
        }
    ?>
</form>




</div>

<br><br><br>
<!--aggiungere footer-->


        <br>
            <!--follie di chiara-->
                   
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>




</body>
</html>