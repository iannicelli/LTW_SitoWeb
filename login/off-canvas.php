<head>
    <link rel="stylesheet" type="text/css",  href="off-canvas.css">
</head>

    <div id="mySidenav" class="sidenavCanvas">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="text-align: center;">
            <p>
            <?php
                 include "checkIsLogged.php";

                 if(isLogged()){
                    echo '<i>'.$_SESSION['nome'].' '.$_SESSION['cognome'].'</i>';
                }
            ?>
            </p>
        </div>
        <a href="#">Profilo</a>
        <a href="#">Le mie ricette</a>
        <a href="#">Le mie ricette preferite</a>
        <a href="#">Logout</a>
    </div>