<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quiz App</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Exo:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/style.css">

    
    <link rel="icon" href="../Immagini logo/favicon.png" type="image/png">
</head>

<style>
    body {
    background-image: url('../login/sfondo/giusta.jpg');
    background-attachment : fixed
    }
</style>

<body background="imgSfondo.gif">

<?php
    include '../login/loginDB.php';

    $query = "SELECT * FROM animali";
    $res = pg_query($db, $query);  
    if(!$res){
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
    } 
    $animali = pg_fetch_all($res);
?>
    <div id="container">
        <!--    Start Section     -->
        <div id="start">Iniziamo</div>

        <!--    Guide Section    -->
        <div id="guide">
            <h2>Quale animale fa per te?</h2>
            <br>
            <h4>Durante le riposte sii il più sincer* possibile e non lasciare che il gioco rimanga fine a se stesso,
                adotta un trovatello!! Inoltre verrano mostrate alcune curiosità sugli animali.
                Divertiti.</h4>
            <div id="button">
                <button onclick="window.location.href = '../home.php';" id="exit">Exit</button>
                <button id="continue">Inizia</button>
            </div>
        </div>

        <!--    Quiz Section    -->
        <div id="quiz">
            <div id="quiz_header">
                <h5>Quale amico dovresti adottare</h5>
            </div>

            <!--     Quiz Questions  -->

            <div id="question">
                <h2 id="questionNo"></h2>
                <h2 id="questionText"></h2>
            </div>

            <!--       Quiz Choices   -->

            <div id="optionList">
                <h4 class="choice_que" id="option1"></h4>
                <h4 class="choice_que" id="option2"></h4>
                <h4 class="choice_que" id="option3"></h4>
                <h4 class="choice_que" id="option4"></h4>
            </div>

            <!--  Answers Section-->

            <div id="answersSection">
                <h3 id="total_correct">3 Of 10 Questions</h3>
                <h3 id="next_question">Next</h3>
            </div>
        </div>

        <!--   Result Section-->
        <div id="result">
            <h6 id="points">Adotta un animale</h6>
            <br><br><br><br>
            <div class="image-container2">


            <div class="image-container">
                    <img calss="itemBox" src="./js/animali_quiz.jpg" id="img">
                    <a href="../pets/pets.php"><input type="button" class="image-overlay-button" value="Adotta!"></a>
              </div>
            </div>

            <button id="startAgain">Start Again</button>
            <button onclick="window.location.href = '../home.php';" id="home">Torna alla Home</button>
        </div>
    </div>
    <script src="js/questions.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
