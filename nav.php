<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="./Responsive Ecommrence Slider/css/style.css">
    <!--light-slider.css------------->
    <link rel="stylesheet" type="text/css" href="./Responsive Ecommrence Slider/css/lightslider.css">
    <!--Jquery-------------------->
    <script type="text/javascript" src="./Responsive Ecommrence Slider/js/Jquery.js"></script>
    <!--lightslider.js--------------->
    <script type="text/javascript" src="./Responsive Ecommrence Slider/js/lightslider.js"></script>
    
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- follie di chiara-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-button {width:150px;}
    </style>
    <!-- follie di chiara-->

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
                    <a href="./AboutUs.html" class="nav-link active" >
                        AboutUs
                    </a>    
                </li>
                <li class="nav-item active" href="#">
                    <a href="./immagini_animali/drive/index.php" class="nav-link active">
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
            <form action="Iscrizione.html">

                <button type="submit" class="pulsante"> Trova un amico! </button>
            </form>
        </div>
		<video autoplay loop muted plays-inline>
			<source src="./immagini_animali/Pixie.mp4" type="video/mp4">
		</video>

	</div>






	</div>
	

        <br>
            <!--follie di chiara-->
            


        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>





<!-------------CAROSELLO------------------------->
<section class="slider">
	<ul id="autoWidth" class="cs-hidden">
	<!--1------------------------------------>	
  <li class="item-a">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/animali-da-reddito.jpg" alt="1">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$23</a>
		
	</div>
	
	</div>		
</li>
	<!--2------------------------------------>	
  <li class="item-b">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/corgi-.jpg" alt="2">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$20</a>
		
	</div>
	
	</div>		
</li>
	<!--3------------------------------------>	
  <li class="item-c">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/happy-cat-month-1.webp" alt="3">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$26</a>
		
	</div>
	
	</div>		
</li>
	<!--4------------------------------------>	
  <li class="item-d">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/lontre.webp" alt="4">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$27</a>
		
	</div>
	
	</div>		
</li>
	<!--5------------------------------------>	
  <li class="item-e">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/WhatsApp Image 2023-04-15 at 22.28.59.jpeg" alt="5">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$26</a>
		
	</div>
	
	</div>		
</li>
	<!--6------------------------------------>	
  <li class="item-f">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/foto-divertenti-animali-buffi-cv.jpg" alt="6">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$30</a>
		
	</div>
	
	</div>		
</li>
	<!--7------------------------------------>	
  <li class="item-g">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/WhatsApp Image 2023-04-15 at 22.44.19.jpeg" alt="7">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$33</a>
		
	</div>
	
	</div>		
</li>
	<!--8------------------------------------>	
  <li class="item-h">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img src="./immagini_animali/WhatsApp Image 2023-04-15 at 22.44.58.jpeg" alt="8">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
	<a href="#" class="buy-btn">Adotta</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
	<a href="#">Rabbed Cardigan</a>
	<span>Noe Arrival</span>
	</div>
	<!--price-------->
	<a href="#" class="price">$43</a>
		
	</div>
	
	</div>		
</li>
  
</ul>
	</section>

	
	
	
<!--script-link----------->
<script type="text/javascript" src="./Responsive Ecommrence Slider/js/script.js"></script>
</body>
  </body>
</html>

