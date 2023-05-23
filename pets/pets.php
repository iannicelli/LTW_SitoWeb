<!DOCTYPE html>
<html>
<head>
	<title>Pets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <link rel="icon" href="../Immagini logo/favicon.png" type="image/png">
    
</head>

<?php
  include './inserisci.php';
  include './checkIsAdopted.php';
  include "../login/checkIsLogged.php";
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
      <div class="dream">
        
            <?php
              for($i = 1; $i < 5; $i++){
               
                echo '<div class="image-container">';

                inserisci($i);
                if(!isAdopted($i)){
                  if(isLogged()){
                
                    echo '<a href="../animale.php?id='.$i.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                  }
                  else echo '<a href="../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                }
                else{
                  echo '<a href="../generica.php?messaggio=adottato"><input type="button" class="image-overlay-button" value="Adottato"></a>';
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
                
                    echo '<a href="../animale.php?id='.$i.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                    }
                    else echo '<a href="../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                  }
                else{
                  echo '<a href="../generica.php?messaggio=adottato"><input type="button" class="image-overlay-button" value="Adottato"></a>';
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
                
                    echo '<a href="../animale.php?id='.$i.'"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                    }
                    else echo '<a href="../generica.php?messaggio=nonLoggato"><input type="button" class="image-overlay-button" value="Adotta!"></a>';
                  }
                else{
                  echo '<a href="../generica.php?messaggio=adottato"><input type="button" class="image-overlay-button" value="Adottato"></a>';
                }

                echo '</div>';
              }
            ?>
            
      </div>

    </div>

    <br>
    <br>


    <div class="row">
        <a href="./more.php"> <input type="button" class="btn-btn-primary" value="More"></a>
        &emsp;&emsp;
        <a href="../../home.php"> <input type="button" class="btn-btn-primary" value="Home"></a>
        &emsp;&emsp;
        <?php
          if(isLogged()){
            echo '<a href="../caricaAnimale.php"> <input type="button" class="btn-btn-primary" value="Carica"></a>';
          }
          else{
            echo '<a href="../generica.php?messaggio=nonLoggato2"> <input type="button" class="btn-btn-primary" value="Carica"></a>';
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