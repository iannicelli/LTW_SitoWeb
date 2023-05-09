<!DOCTYPE html>
<html>
  <head>

  <?php

    include './login/loginDB.php';

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
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- follie di chiara-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-button {width:150px;}
    </style>
    <!-- follie di chiara-->


    <link rel="icon" href="favicon.png" type="image/png">



    <link rel="stylesheet" href="animale.css" type="text/css">
    <title>Profilo Animale</title>
    </head>
<body >
  <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #E19853;">
    
        <a 
        class ="navbar-brand mb-0 h1"
        href="#">
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
                <a class="nav-link active" href="./nav.html"> <!-- disabled-->
                    Home<span class="sr-only"></span></a>
                </a>
            </li>
            <li class="nav-item active" href="#" >
                <a href="#" class="nav-link active">
                    AboutUs (current)
                </a>    
            </li>
            <li class="nav-item active" href="#">
                <a href="./pets.html" class="nav-link active">
                    Pets
                </a>
            </li>

            <a class="btn text-white" style="background-color: #E19853;" href="#!" role="button">
                <i class="fab fa-facebook-f">
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
        <a href="./adozione.php?id=<?php echo $id; ?>"><input type = "button" class="button" value="Adotta!"></a>
      </form>
    </div>
  </div>
</div>

</body>
</html>