<!DOCTYPE html>
<html>
<head>
	<title>Pets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<!--
    DA FARE:
    - aggiungere bottone su ogni animale
    - sostiuire immagini animali con vere immagini dal database
    - capire come popolare la pagina con immagini dal database (solo un tot)

-->

<?php
  include '../inserisci.php';
?>

<body>
  <div class="container">
    <div class="heading">
      <h3>I nostri amici</h3>
    </div>
    <div class="box">
      
      <div class="dream">
        <div class="image-container">

          <?php
            inserisci(0);
          ?>
          <a href='../../animale.php?id=1'><input type="button" class="image-overlay-button" value="Adotta!"></a>

        </div>
        
        <div class="image-container">
          <?php
            inserisci(1);
          ?>
        </div>

        <div class="image-container">
          <?php
            inserisci(2);
          ?>
        </div>

        <div class="image-container">
        <?php
            inserisci(3);
          ?>
        </div>

          <div class="image-container">
          <?php
            inserisci(4);
          ?>
          </div>
            
      </div>

        <div class="dream">
        <?php
        
        inserisci(5);

        ?>
          <?php
        
          inserisci(6);

          ?>
            <?php
        
            inserisci(7);

            ?>
           <?php
        
            inserisci(8);

            ?>
            <?php
        
              inserisci(9);

            ?>
            
      </div>

        <div class="dream">
        <?php
        
          inserisci(10);

          ?>
         <?php
        
          inserisci(11);

          ?>
          <?php
        
            inserisci(12);

          ?>
           <?php
        
            inserisci(13);

            ?>
            
      </div>




    </div>
    <div class="btn">
      <a href="#">More</a>
    </div>





  </div>

</body>
</html>