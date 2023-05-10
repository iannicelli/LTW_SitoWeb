<!DOCTYPE html>
<html>
<head>
	<title>Pets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
  include '../inserisci.php';
  include './checkIsAdopted.php';
  include "../../login/checkIsLogged.php";
?>

<body>
  <div class="container">
    <div class="heading">
      <h3>I nostri amici</h3>
    </div>
    <div class="box">
      <div class="dream">
        
            <?php
              for($i = 1; $i < 5; $i++){
               
                echo '<div class="image-container">';

                inserisci($i);
                if(!isAdopted($i)){
                  if(isLogged()){
                
                    echo '<a href="../../animale.php?id='.$i.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                  }
                  else echo '<a href="../../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                }
                else{
                  echo '<a href="../../generica.php?messaggio=adottato"><input type="button" class="image-overlay-button" value="Adottato"></a>';
                }

                echo '</div>';
              }
            
            ?>
            
      </div>

        <div class="dream">
        <?php
              for($i = 5; $i < 10; $i++){
               
                echo '<div class="image-container">';

                inserisci($i);
                if(!isAdopted($i)){
                  if(isLogged()){
                
                    echo '<a href="../../animale.php?id='.$i.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                    }
                    else echo '<a href="../../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                  }
                else{
                  echo '<a href="./giaAdottato.html"><input type="button" class="image-overlay-button" value="Adottato"></a>';
                }

                echo '</div>';
              }
            ?>
            
      </div>

        <div class="dream">
        <?php
              for($i = 10; $i < 14; $i++){
               
                echo '<div class="image-container">';

                inserisci($i);
                if(!isAdopted($i)){
                  if(isLogged()){
                
                    echo '<a href="../../animale.php?id='.$i.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                    }
                    else echo '<a href="../../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                  }
                else{
                  echo '<a href="./giaAdottato.html"><input type="button" class="image-overlay-button" value="Adottato"></a>';
                }

                echo '</div>';
              }
            ?>
            
      </div>

    </div>

    <br>
    <br>


    <div class="row">
        <a href="#"> <input type="button" class="btn-btn-primary" value="More"></a>
        &emsp;&emsp;
        <a href="../../nav.php"> <input type="button" class="btn-btn-primary" value="Home"></a>
      </div>
    </div>

    <br><br><br>


  </div>

</body>
</html>