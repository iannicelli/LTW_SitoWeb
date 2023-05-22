//Start Section
let start = document.querySelector("#start");

//guide Section
let guide = document.querySelector("#guide");
let exit = document.querySelector("#exit");
let continueBtn = document.querySelector("#continue");

//Quiz Section
let quiz = document.querySelector("#quiz");
let time = document.querySelector("#time");

//question Section
let questionNo = document.querySelector("#questionNo");
let questionText = document.querySelector("#questionText");

//Multiple Choices Of Questions
let option1 = document.querySelector("#option1");
let option2 = document.querySelector("#option2");
let option3 = document.querySelector("#option3");
let option4 = document.querySelector("#option4");

//correct and next Button
let total_correct = document.querySelector("#total_correct");
let next_question = document.querySelector("#next_question");

//Result Section
let result = document.querySelector("#result");
let points = document.querySelector("#points");
let quit = document.querySelector("#quit");
let startAgain = document.querySelector("#startAgain");
let home = document.querySelector("#home");

//Get All 'H4' From Quiz Section (MCQS)
let choice_que = document.querySelectorAll(".choice_que");


let index = 0;




//animal points
let gatto = 0;
let cane = 0;
let criceto = 0;
let coniglio = 0;

//store Answer Value
let UserAns = undefined;

//what happen when 'Start' Button Will Click
start.addEventListener("click", () => {
    start.style.display = "none";
    guide.style.display = "block";
});

//what happen when 'Exit' Button Will Click
exit.addEventListener("click", () => {
    start.style.display = "block";
    guide.style.display = "none";
});




let loadData = () => {
    questionNo.innerText = index + 1 + ". ";
    questionText.innerText = MCQS[index].question;
    option1.innerText = MCQS[index].choice1;
    option2.innerText = MCQS[index].choice2;
    option3.innerText = MCQS[index].choice3;
    option4.innerText = MCQS[index].choice4;


}

loadData();

//what happen when 'Continue' Button Will Click
continueBtn.addEventListener("click", () => {
    quiz.style.display = "block";
    guide.style.display = "none";


    loadData();

    //    remove All Active Classes When Continue Button Will Click

    choice_que.forEach(removeActive => {
        removeActive.classList.remove("active");
    })

    total_correct.innerHTML = " ";
});

choice_que.forEach((choices, choiceNo) => {
    choices.addEventListener("click", () => {
        choices.classList.add("active");

        //check answer
        if (choiceNo == 0) {
            gatto++;
        }
        if (choiceNo == 1) {
            cane++;
        }
        if (choiceNo == 2) {
            criceto++;
        }
        if (choiceNo == 3){
            coniglio++;
        }



        //disable All Options When User Select An Option
        for (i = 0; i <= 3; i++) {
            choice_que[i].classList.add("disabled");
        }
    })
});

////what happen when 'Next' Button Will Click
next_question.addEventListener("click", () => {
    //    if index is less then MCQS.length
    if (index !== MCQS.length - 1) {
        index++;
        choice_que.forEach(removeActive => {
            removeActive.classList.remove("active");
        })

        //question
        loadData();

        //result
        total_correct.style.display = "block";


        if (index == 1){
            total_correct.innerHTML = `Il cane è l'unico animale che guarda in faccia gli esseri umani per comunicare`;
        }

        if (index == 3){
            total_correct.innerHTML = "Il gatto è uno dei pochi che non hanno la capacità di percepire il gusto dolce";
        }

        if (index == 5){
            total_correct.innerHTML = "Le femmine di criceto potrebbero mangiare alcuni cuccioli";
        }

        if (index == 7){
            total_correct.innerHTML = "I conigli fanno le fusa in segno di felicità";
        }

        if (index == 9){
            total_correct.innerHTML = `Gli uccelli non hanno denti ad eccezione della gallina`;
        }

        if ((index == 2) || (index == 4) || (index == 6) || (index == 8) || (index == 10)){
            total_correct.innerHTML = " ";
        }




    } else {
        index = 0;


        //when Quiz Question Complete Display Result Section
        quiz.style.display = "none";
        //points.innerHTML = `i gatti ${gatto}, criceti ${criceto}, cani ${cane}, conigli ${coniglio}`;
        if (gatto > criceto && gatto > cane && gatto > coniglio){
            points.innerHTML = "Il tuo animale da compagnia perfetto è il gatto";
        }

        if (criceto > gatto && criceto > coniglio && criceto > cane){
            points.innerHTML = "Il tuo animale da compagnia perfetto è il criceto";
        }

        if (cane > gatto && cane > coniglio && criceto < cane){
            points.innerHTML = "Il tuo animale da compagnia perfetto è il cane";
        }

        if (coniglio > gatto && criceto < coniglio && coniglio > cane){
            points.innerHTML = "Il tuo animale da compagnia perfetto è il criceto";
        }


        result.style.display = "block";
    }
    for (i = 0; i <= 3; i++) {
        choice_que[i].classList.remove("disabled");
    }
})

//what happen when 'Quit' Button Will Click
quit.addEventListener("click", () => {
    start.style.display = "block";
    result.style.display = "none";

});

//Start Again When 'Start Again' Button Will Clicked
startAgain.addEventListener("click", () => {
    guide.style.display = "block";
    result.style.display = "none";
    criceto = 0;
    gatto = 0;
    cane = 0;
    coniglio = 0;
});

home.addEventListener("click", () => {
    guide.style.display = "block";
    result.style.display = "none";

});
