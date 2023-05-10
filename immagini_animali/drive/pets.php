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
  include './checkIsAdopted.php';
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
            if(!isAdopted(1)){
              
              echo '<a href="../../animale.php?id=1"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
            }
            else{
              echo '<a href="./giaAdottato.html"><input type="button" class="image-overlay-button" value="Adottato"></a>';
            }
          
          ?>

        </div>
        
        <div class="image-container">
          <?php
            inserisci(1);
            if(!isAdopted(2)){
              
              echo '<a href="../../animale.php?id=2"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
            }
            else{
              echo '<a href="giaAdottato.html"><input type="button" class="image-overlay-button" value="Adottato"></a>';
            }
          ?>
        </div>

        <div class="image-container">
          <?php
            inserisci(2);
          ?>
          <a href='../../animale.php?id=3'><input type="button" class="image-overlay-button" value="Adotta!"></a>
        </div>

        <div class="image-container">
        <?php
            inserisci(3);
          ?>
          <a href='../../animale.php?id=4'><input type="button" class="image-overlay-button" value="Adotta!"></a>
        </div>

          <div class="image-container">
          <?php
            inserisci(4);
          ?>
          <a href='../../animale.php?id=5'><input type="button" class="image-overlay-button" value="Adotta!"></a>
          </div>
            
      </div>

        <div class="dream">
        <div class="image-container">
        <?php
        
        inserisci(5);

        ?>
        <a href='../../animale.php?id=6'><input type="button" class="image-overlay-button" value="Adotta!"></a>
        </div>
          <div class="image-container">
          <?php
          
          inserisci(6);

          ?>
          <a href='../../animale.php?id=7'><input type="button" class="image-overlay-button" value="Adotta!"></a>
          </div>
            <div class="image-container">
            <?php
        
            inserisci(7);

            ?>
            <a href='../../animale.php?id=8'><input type="button" class="image-overlay-button" value="Adotta!"></a>
            </div>
           <div class="image-container">
           <?php
        
            inserisci(8);

            ?>
            <a href='../../animale.php?id=9'><input type="button" class="image-overlay-button" value="Adotta!"></a>
            </div>
            <div class="image-container">
            <?php
        
              inserisci(9);

            ?>
            <a href='../../animale.php?id=10'><input type="button" class="image-overlay-button" value="Adotta!"></a>
            </div>
            
      </div>

        <div class="dream">
        <div class="image-container">
        <?php
        
          inserisci(10);

          ?>
          <a href='../../animale.php?id=11'><input type="button" class="image-overlay-button" value="Adotta!"></a>
          </div>
         <div class="image-container">
         <?php
        
          inserisci(11);

          ?>
          <a href='../../animale.php?id=13'><input type="button" class="image-overlay-button" value="Adotta!"></a>
          </div>
          <div class="image-container">
          <?php
        
            inserisci(12);

          ?>
          <a href='../../animale.php?id=14'><input type="button" class="image-overlay-button" value="Adotta!"></a>
          </div>
          <div class="image-container">
          <?php
        
            inserisci(13);

            ?>
            <a href='../../animale.php?id=12'><input type="button" class="image-overlay-button" value="Adotta!"></a>
            </div>
            
      </div>




    </div>
    <div class="btn">
      <a href="#">More</a>
    </div>





  </div>

</body>
</html>