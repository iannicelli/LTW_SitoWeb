<!DOCTYPE html>
<html>
  <head>

  <?php

    include './login/loginDB.php';
    include "./login/checkIsLogged.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM animali WHERE id = $id";
    $result = pg_query($db, $query);

    if ($result && pg_num_rows($result) > 0) {
      // Recuperare i dati dell'animale dal risultato della query
      $animale = pg_fetch_assoc($result);
      
    } else {
      // Nessun animale trovato con l'id specificato
      echo "Animale non trovato.";
    }

    

  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="animale.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    


    <!-- follie di chiara-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-button {width:150px;}
    </style>
    <!-- follie di chiara-->


    <link rel="icon" href="./Immagini logo/favicon.png" type="image/png">



    <link rel="stylesheet" href="animale.css" type="text/css">
    <title>Profilo Animale</title>
    </head>
<body >
  <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #E19853;">
    
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
            <li class="nav-item active" href="./AboutUs.php" >
                <a href="./AboutUs.php" class="nav-link active">
                    AboutUs
                </a>    
            </li>
            <li class="nav-item active" href="./pets/pets.php">
                <a href="./pets/pets.php" class="nav-link active">
                    Pets
                </a>
            </li>

            <a class="btn text-white"  href="https://www.facebook.com/profile.php?id=100092879172087&is_tour_dismissed=true" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

    
                <a class="btn text-white" href="#!" role="button">
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
<br><br><br><br>
<div class="container">
  <div style="text-align:center">
    
      <?php
        echo "<h1>Ciao! Sono ".$animale['nome']."</h1>";
      ?>

    
    <p>Questa pagina ti aiuterà a conoscermi meglio.</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="
        <?php
          $query = "SELECT image FROM animali WHERE id=$id";
          $result = pg_query($db, $query) or die (pg_last_error($db));
      
          $data = pg_fetch_result($result, 'image');
          $unes_image = pg_unescape_bytea($data);
      
          $file_name = "At.jpeg";
          $img = fopen($file_name, 'wb') or die("cannot open image\n");
          fwrite($img, $unes_image) or die("cannot write image data\n");
          echo $file_name;
        ?> " style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname"> <h2>Nome:
        <?php
          echo $animale['nome']."</h2>";
        ?>
        </label> 
        <br>
        <label for="fname"> <h3>Casa provvisoria:
        <?php
          echo $animale['casa_provvisoria']."</h3>";
        ?>
        </label> 
        <br>
        <label for="fname"> <h3>Età:
        <?php
          echo $animale['età']."</h3>";
        ?>
        </label> 
        <br>
        <label for="fname"> <h3>Dicono di me:
        <?php
          echo $animale['descrizione']."</h3>";
        ?>
        </label> 
        <br>
        <br><br><br><br>
        <?php
          if(isLogged()){
            echo '<a href="./adozione.php?id='.$id.'"><input type = "button" class="button" value="Adotta!"></a>';
          }
          else {
            echo '<a href="./generica.php?messaggio=nonLoggato"><input type = "button" class="button" value="Adotta!"></a>';
          }
        ?>

        </form>
    </div>
  </div>
</div>

</body>
</html>
