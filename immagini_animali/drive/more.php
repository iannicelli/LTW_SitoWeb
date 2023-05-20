<!DOCTYPE html>
<html>
<head>
	<title>More</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    
</head>

<?php
  include '../../login/loginDB.php';
  include './checkIsAdopted.php';
  include "../../login/checkIsLogged.php";
?>

<body>
  <section>
  <div class="container">
    <div class="heading">
      <h3>I nostri amici</h3>
    </div>
    <ul>
            <li class="list active" data-filter="all">All</li>
            <li class="list" data-filter="cane">Cane</li>
            <li class="list" data-filter="gatto">Gatto</li>
            <li class="list" data-filter="coniglio">Coniglio</li>
            <li class="list" data-filter="criceto">Criceto</li>
 
          </ul>
    <div class="box">
        
            <?php

                $query = "SELECT * FROM animali where id > 14 order by id ";
                $result = pg_query($db, $query);

                if ($result && pg_num_rows($result) > 0) {
                    // Recuperare i dati dell'animale dal risultato della query in un array
                    $animali = pg_fetch_all($result);
                    $lunghezza = count($animali);

                } else {
                      // Nessun animale trovato con l'id specificato
                      echo "Animale non trovato.";
                      $lunghezza = -1;
                }
                // Recupera l'immagine dal database
                if($lunghezza  < 4){
                    for($i = 0; $i < $lunghezza ; $i++){
                        $animale = $animali[$i];
                        $data = pg_unescape_bytea($animale['image']);
                        $file_name = $animale['nome'] . ".jpeg";
                        $img = fopen($file_name, 'wb') or die("cannot open image\n");
                        fwrite($img, $data) or die("cannot write image data\n");
                        
                        echo '<div class="image-container">';
                        echo '<img class="itemBox '.$animale['tipologia'].'" src="' . $file_name . '" width="500px" height="350px">';
        
                        if(!isAdopted($animale['id'])){
                            if(isLogged()){
                              $x = $i + 15;
                              echo '<a href="../../animale.php?id='.$x.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                            }
                        else echo '<a href="../../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                        }
                        else{
                            echo '<a href="../../generica.php?messaggio=adottato"><input type="button" class="image-overlay-button" value="Adottato"></a>';
                        }

                        echo '</div>';
                    }
                }
                else {
                  for($i = 0; $i < $lunghezza ; $i++){
                    if($i % 3 == 0){
                      echo '<div class="dream">';
                    }
                    $animale = $animali[$i];
                    $data = pg_unescape_bytea($animale['image']);
                    $file_name = $animale['nome'] . ".jpeg";
                    $img = fopen($file_name, 'wb') or die("cannot open image\n");
                    fwrite($img, $data) or die("cannot write image data\n");
                        
                    echo '<div class="image-container">';
                    echo '<img class="itemBox '.$animale['tipologia'].'" src="' . $file_name . '"> &emsp;';
        
                    if(!isAdopted($animale['id'])){
                      if(isLogged()){
                        $x = $i + 15;
                        echo '<a href="../../animale.php?id='.$x.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                      }
                      else echo '<a href="../../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                    }
                    else{
                      echo '<a href="../../generica.php?messaggio=adottato"><input type="button" class="image-overlay-button" value="Adottato"></a>';
                    }

                  echo '</div>';
                  if($i % 3 == 0){
                    echo '</div>';
                  }  
                }
              }
            
            ?>
                        
  
    </div>

    <br>
    <br>


    <div class="row">

        <a href="../../nav.php"> <input type="button" class="btn-btn-primary" value="Home"></a>
        &emsp;&emsp;
        <?php
          if(isLogged()){
            echo '<a href="../../caricaAnimale.php"> <input type="button" class="btn-btn-primary" value="Carica"></a>';
          }
          else{
            echo '<a href="../../generica.php?messaggio=nonLoggato2"> <input type="button" class="btn-btn-primary" value="Carica"></a>';
          }
        ?>
      </div>
    </div>

    <br><br><br>


  </div>

  <script type="text/javascript">
        $(document).ready(function(){
            $('.list').click(function(){
                const value = $(this).attr('data-filter');
                if(value == 'all'){
                    $('.itemBox').show('1000');
                }
                else{
                    $('.itemBox').not('.'+value).hide('1000');
                    $('.itemBox').filter('.'+value).show('1000');
                }
            })
            $('.list').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
    </script>

</body>
</html>