<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./elenchi.css">
    <title>AdottatiUtente</title>
</head>
<body>

<?php

    include 'loginDB.php';
    include 'checkIsLogged.php';



        $mail= $_GET['email'];
    

    $query2= "SELECT animali.id, età, animali.nome as nome_animale, email, image
                 FROM animali JOIN adozioni on animali.id = adozioni.id_animale
                WHERE adozioni.email='$mail';";
    $res2 = pg_query($db, $query2);
    if(!$res2){
        header("location: ../generica.php?messaggio=nessunaAdozione");
    }

    else {
        $animali = pg_fetch_all($res2);
    }
?>
    <section>
        <div class="box">
            <h3>Animali che hai adottato</h3>
                <?php
                    for($i = 0; $i<count($animali); $i++){

                        $nome = $animali[$i]['nome_animale'];
                        $eta = $animali[$i]['età'];
                        $data = pg_unescape_bytea($animali[$i]['image']);
                        $file_name = $animali[$i]['nome_animale'] . ".jpeg";
                        $img = fopen($file_name, 'wb') or die("cannot open image\n");
                        fwrite($img, $data) or die("cannot write image data\n");
                        $j = $i+1;

                        echo'
                        
                        <div class="list">
                            <div class="imgBx">
                            <a href="../animale.php?id='.$animali[$i]['id'].'">
                                <img src="'.$file_name.'">
                            </a>
                            </div>
                            <div class="content">
                                <h2 class="rank"><small>#</small>'.$j.'</h2>
                                <h4>'.$nome.'</h4>
                                <p>Età: '.$eta.'</p>
                            </div>  
                        </div>  ';
                    }
                ?>
                 
                 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <a href="profiloUtente.php"> <input class="button" type='submit' id="pass" value='Indietro'></a>

       
                
        </div>
    </section>
    
</body>
</html>