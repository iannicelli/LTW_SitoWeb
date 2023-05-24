<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="./slider/css/style.css">
    <!--light-slider.css------------->
    <link rel="stylesheet" type="text/css" href="./slider/css/lightslider.css">
    <!--Jquery-------------------->
    <script type="text/javascript" src="./slider/js/Jquery.js"></script>
    <!--lightslider.js--------------->
    <script type="text/javascript" src="./slider/js/lightslider.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- follie di chiara-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-button {width:150px;}
    </style>
    <!-- follie di chiara-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3"></script>
    
    <link rel="icon" href="./Immagini logo/favicon.png" type="image/png">
    <title>Tale of Tails</title>
  </head>
  <body style="height:600px">
	<?php
        include "./login/checkIsLogged.php";

        if(isLogged()){
            echo '<i>'.$_SESSION['nome'].' '.$_SESSION['cognome'].'</i>';
        }
    ?>
	<div class="banner">
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
                <li class="nav-item active" id="qwerty">
                    <a class="nav-link active" href="#"> <!-- disabled-->
                        Home<span class="sr-only">(current)</span></a>
                    </a>
                </li>
                <li class="nav-item active" href="#" >
                    <a href="./AboutUs.php" class="nav-link active" >
                        AboutUs
                    </a>    
                </li>
                <li class="nav-item active" href="#">
                    <a href="./pets/pets.php" class="nav-link active">
                        Pets
                    </a>
                </li>

                <!--pass: Progetto2023!-->

                <a class="btn text-white"  href="https://www.facebook.com/profile.php?id=100092879172087&is_tour_dismissed=true" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

    
                <a class="btn text-white" href="https://www.instagram.com/_taleoftails/" role="button">
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="content">
		<h3>Tale of Tails <br> Racconti di animali</h3>
		<br>
		<br>
		<div class="centrato_bottone">
            <form action="./pets/pets.php">

                <button type="submit" class="pulsante"> Trova un amico! </button><br>

            </form>
            <br> &emsp;&emsp;
            <?php
                if(isLogged()){
                    echo '<form action="./caricaAnimale.php">';
                }
                else{
                    echo '<form action="./generica.php" method="GET">
                            <input type="hidden" name="messaggio" value="nonLoggato2">';
                }
            ?>
                <button type="submit" class="pulsante" href="./pets/pets.php"> Carica un amico! </button>

            </form>
        </div>
		<video autoplay loop muted plays-inline>
			<source src="./pets/Pixie.mp4" type="video/mp4">
		</video>

	</div>





	</div>
	

        <br>
            


        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>





<!-------------CAROSELLO------------------------->

<?php
	include './login/loginDB.php';
	$query = "SELECT * FROM animali order by id limit 9 ";
	$result = pg_query($db, $query);

	if ($result && pg_num_rows($result) > 0) {
	  // Recuperare i dati dell'animale dal risultato della query in un array
	  $animali = pg_fetch_all($result);
	} else {
		// Nessun animale trovato con l'id specificato
		echo "Animale non trovato.";
	}

	
	
?>
<section class="slider">
	<ul id="autoWidth" class="cs-hidden">
		<!--1------------------------------------>	
		<?php
			$j = 1;
			for($i = 0; $i < 9; $i++){
				echo '
					<li class="item-a">
						<!--box-slider--------------->
						<div class="box">
							<!--img-box---------->
							<div class="slide-img">
				';			
								$animale = $animali[$i];
								$data = pg_unescape_bytea($animale['image']);
								$file_name = $animale['nome'] . ".jpeg";
								$img = fopen($file_name, 'wb') or die("cannot open image\n");
								fwrite($img, $data) or die("cannot write image data\n");
								echo '<img src="' . $file_name . '" alt="'.$j.'">';

								echo '
								<!--overlayer---------->
								<div class="overlay">
									<!--buy-btn------>
									<a href="./animale.php?id='.$j.'" class="buy-btn">Adotta</a>
								</div>
							</div>
							<!--detail-box--------->
							<div class="detail-box">
								<!--type-------->
								<div class="type">';
									echo $animale['nome'];
									echo'
									<a href="./animale.php?id='.$j.'">Scopri di più su di me</a>
								</div>
								<!--price-------->
								<a href="#" class="price"><img src="./zampa.png"  width="30" height="30"></a>
							</div>
						</div>
					</li>
				';
				$j++;	
			}

		?>
		
	
	</ul>
</section>


<section class="game">
    <div class="game-content">
    <g2>Animal match - trova il tuo compagno perfetto</g2>
    <g1>è un divertente quiz interattivo che ti aiuterà a scoprire quale animale domestico è più adatto alla tua personalità e al tuo stile di vita. </g1>
    
    <button onclick="window.location.href = './quiz/index.php';" id="game_bottone"> Gioca! </button>
    </div>
    


</section>








	
<div id="nav_bassa">
        <nav_bassa></nav_bassa>
</div>


    <script type="application/javascript" src="./nav_bassa.js"></script>

	
<!--script-link----------->
<script type="text/javascript" src="./slider/js/script.js"></script>
</body>
</html>

