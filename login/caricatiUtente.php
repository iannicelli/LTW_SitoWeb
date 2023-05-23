<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Immagini logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="./elenchi.css">
    <title>caricatiUtente</title>
</head>
<body>

<?php

    include 'loginDB.php';
    include 'checkIsLogged.php';



        $mail= $_GET['email'];
    

    $query2= "SELECT * 
                FROM animali JOIN caricamento on caricamento.id_animale = animali.id
                WHERE caricamento.email='$mail';";
        
    $res2 = pg_query($db, $query2);
    if(!$res2){

        header("location: ../generica.php?messaggio=nessunCaricamento");
    }

    else {
        
        $animali = pg_fetch_all($res2);
        if(count($animali) == 0){
            header("location: ../generica.php?messaggio=nessunCaricamento");
        }
    }
?>
    <section>
        <div class="box">
            <h3>Animali che hai caricato</h3>
            
                <?php
                    for($i = 0; $i<count($animali); $i++){

                        $nome = $animali[$i]['nome_animale'];
                        $eta = $animali[$i]['età'];
                        $data = pg_unescape_bytea($animali[$i]['image']);
                        $file_name = $animali[$i]['nome'] . ".jpeg";
                        $img = fopen($file_name, 'wb') or die("cannot open image\n");
                        fwrite($img, $data) or die("cannot write image data\n");
                        $j = $i+1;

                        echo'
                        
                        <div class="list">
                        
                            <div class="imgBx">
                            <a href="../animale.php?id='.$animali[$i]['id_animale'].'">
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