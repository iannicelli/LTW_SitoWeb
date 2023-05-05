<!DOCTYPE html>
<html>
<head>
	<title>Pets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Connessione al database
    include '../../login/loginDB.php';

// Query per recuperare i primi 10 animali dal database
    $query = "SELECT * FROM animali LIMIT 4";
    $result = pg_query($db, $query);

    if ($result && pg_num_rows($result) > 0) {
      // Recuperare i dati dell'animale dal risultato della query in un array
      $animali = pg_fetch_all($result);
    } else {
        // Nessun animale trovato con l'id specificato
        echo "Animale non trovato.";
    }
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
                // Recupera l'immagine dal database
                $animale = $animali[0];
                $data = pg_unescape_bytea($animale['image']);
                $file_name = $animale['nome'] . ".jpeg";
                $img = fopen($file_name, 'wb') or die("cannot open image\n");
                fwrite($img, $data) or die("cannot write image data\n");
                echo '<img src="' . $file_name . '">';

                ?>
            </div>
            <div class="image-container">
                <?php
                // Recupera l'immagine dal database
                $animale = $animali[1];
                $data = pg_unescape_bytea($animale['image']);
                $file_name = $animale['nome'] . ".jpeg";
                $img = fopen($file_name, 'wb') or die("cannot open image\n");
                fwrite($img, $data) or die("cannot write image data\n");
                echo '<img src="' . $file_name . '">';

                ?>
            </div>
            <div class="image-container">
                <?php
                // Recupera l'immagine dal database
                $animale = $animali[2];
                $data = pg_unescape_bytea($animale['image']);
                $file_name = $animale['nome'] . ".jpeg";
                $img = fopen($file_name, 'wb') or die("cannot open image\n");
                fwrite($img, $data) or die("cannot write image data\n");
                echo '<img src="' . $file_name . '">';

                ?>
            </div>
            <div class="image-container">
                <?php
                // Recupera l'immagine dal database
                $animale = $animali[3];
                $data = pg_unescape_bytea($animale['image']);
                $file_name = $animale['nome'] . ".jpeg";
                $img = fopen($file_name, 'wb') or die("cannot open image\n");
                fwrite($img, $data) or die("cannot write image data\n");
                echo '<img src="' . $file_name . '">';

                ?>
            </div>
        </div>
    </div>

    <div class="dream">
        <img src="../lingua-animali-2.avif">
         <img src="../foto-divertenti-animali-buffi-cv.jpg">
          <img src="../shutterstock_1673818144-560x700.jpg">
           <img src="../lontre.webp">
            <img src="../images.jfif">
            
      </div>

        <div class="dream">
        <img src="../comportamenti-animali-3.avif">
         <img src="../scimmia-che-conta_1020x680.avif">
          <img src="../images (1).jfif">
           <img src="../WhatsApp Image 2023-04-15 at 22.44.19.jpeg">
            <img src="../WhatsApp Image 2023-04-15 at 22.44.58.jpeg">
            
      </div>




    </div>

    <div class="btn">
      <a href="#">More</a>
    </div>





  </div>

</body>
</html>