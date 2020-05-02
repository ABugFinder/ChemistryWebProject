//user id
var id = document.getElementById("cont-game").getAttribute("value");

//post para enviar el puntaje
function send_puntaje() {
    
    axios.post('/getPoints/'+id, {
        points: '1700'
      })
      .then((response) => {
        console.log(response);
      }, (error) => {
        console.log(error);
      });
}

//Generate the cards on html code
function cardPrototype(dataFramework, src) {
    let container = document.createElement("div");
    let imgBack = document.createElement("img");
    let imgFront = document.createElement("img");
    // Contenedor
    container.setAttribute("class", "memory-card");
    container.setAttribute("data-framework", dataFramework);
    //Back 
    imgBack.setAttribute("src", "../images/memoramaCards/reverso_1.png");
    imgBack.setAttribute("class", "back-face");
    //Front
    imgFront.setAttribute("src", src);
    imgFront.setAttribute("class", "front-face");
    //Insert
    container.appendChild(imgFront);
    container.appendChild(imgBack);
    return container;
}

function shuffle(array) {
    let currentIndex = array.length, temporaryValue, randomIndex;
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      // And swap it with the current element.
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
    return array;
  }
// Game init
const cardContainer = document.getElementById("card-container");

var cardListAdvance = [ //NormalCards
    {
        name: "escandio",
        img: "../images/memoramaCards/21.png"
    },
    {
        name: "escandio",
        img: "../images/memoramaCards/21.png"
    },
    {
        name: "hierro",
        img: "../images/memoramaCards/26.png"
    },
    {
        name: "hierro",
        img: "../images/memoramaCards/26.png"
    },
    {
        name: "cobalto",
        img: "../images/memoramaCards/27.png"
    },
    {
        name: "cobalto",
        img: "../images/memoramaCards/27.png"
    },
    {
        name: "niquel",
        img: "../images/memoramaCards/28.png"
    },
    {
        name: "niquel",
        img: "../images/memoramaCards/28.png"
    },
    {
        name: "cobre",
        img: "../images/memoramaCards/29.png"
    },
    {
        name: "cobre",
        img: "../images/memoramaCards/29.png"
    },
    {
        name: "plata",
        img: "../images/memoramaCards/47.png"
    },
    {
        name: "plata",
        img: "../images/memoramaCards/47.png"
    },
    {
        name: "oro",
        img: "../images/memoramaCards/79.png"
    },
    {
        name: "oro",
        img: "../images/memoramaCards/79.png"
    },
    {
        name: "mercurio",
        img: "../images/memoramaCards/80.png"
    },
    {
        name: "mercurio",
        img: "../images/memoramaCards/80.png"
    },
    {
        name: "titanio",
        img: "../images/memoramaCards/22.png"
    },
    {
        name: "titanio",
        img: "../images/memoramaCards/22.png"
    },
    {
        name: "iridio",
        img: "../images/memoramaCards/77.png"
    },
    {
        name: "iridio",
        img: "../images/memoramaCards/77.png"
    },
];


cardListAdvance = shuffle(cardListAdvance);
cardListAdvance.forEach(card => {
    cardContainer.appendChild(cardPrototype(card.name, card.img));
})

//Atributtes
const cards = document.querySelectorAll('.memory-card');
let hasFlippedCard = false;
let firstCard, secondCard;
let lockBoard = false;
var i = Math.round(Math.random()*5)
var tm = 60;
var paresCartas = 0;
var paresCartasContenedor;
var contIntentos = 15;


//Sounds 
/*
var soundCorrect = new Audio();
soundCorrect.src = "correct-ding.mp3";
var soundIncorrect = new Audio();
soundIncorrect.src = "correct-cbt-sound.mp3";*/


///////////////////////////////

//Functions and Methods
function flipCard(){
    if(lockBoard) return; //Don't let de user flip more of 3 cards at same time!!

    if(this === firstCard) return;

    this.classList.add('flip');
    if(!hasFlippedCard){
        //First Click!
    
        hasFlippedCard = true;
        firstCard = this;
        console.log({hasFlippedCard,firstCard});
        
        return;
    }
    // Second Click!!
    hasFlippedCard =false;
    secondCard = this;

    console.log({hasFlippedCard,secondCard});
    
    checkFormatch();
    
}


function checkFormatch(){

    /*let isMatch = firstCard.dataset.framework === 
    secondCard.dataset.framework;

    isMatch ? disableCards() : unFlipcards() ; 

    */

    //Option for check, for any trouble!
    if(firstCard.dataset.framework ===  secondCard.dataset.framework) {
        // It's a Match 
        disableCards();
        //playAudioC();
        contador(); //Contador funcion

    } else {
        // Not a Match
        unFlipcards();
        intentos();
        //playAudioI();  
    }

}

//Make de Cards lose de effect, which means, the user accert on the match
function disableCards(){
    firstCard.removeEventListener('click', flipCard);
    firstCard.removeEventListener('click', flipCard);
    resetBoard();
}

//Denied the Flip when both cards are no equal and returns to the original form
function unFlipcards(){
    lockBoard = true;

    setTimeout(()=>{

        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');

        lockBoard = false;
    },1000);

}

function resetBoard(){
    [ hasFlippedCard, lockBoard] = [false,false];
    [ firstCard, secondCard] = [null,null];
}

//Give to the cards a random position
(function shuffle(){
    cards.forEach(card => {
        let randomPos = Math.floor(Math.random()*12)
        card.style.order = randomPos;
    });
})();

//Manage the audio on the match 
function playAudioC(){
    soundCorrect.play();
}

function playAudioI(){
    soundIncorrect.play();
}

function timer1(){
    document.form1.time1.value=tm;
    if(tm<=0){clearInterval();window.location.href='ot raweb.htm'}
    else{tm--}
}

function contador() { //Contador de pares
    paresCartas++;
    paresCartasContenedor = document.getElementById('contenedor').innerHTML = "Pares encontrados: " + paresCartas;
    console.log(paresCartas);
    if(paresCartas == 10){
        send_puntaje();
        gameAlert(); 
     }
}

function intentos() { //Contador de intentos
    contIntentos--;
    paresCartasContenedor = document.getElementById('contenedorIntentos').innerHTML = "Intentos restantes: " + contIntentos;
    console.log(contIntentos);
    if(contIntentos == 0){
        gameOverAlert(); 
    }
}

const gameAlert = () => Swal.fire({
    title: "¡Lo lograste!",
    text: "¡Encontraste todos los elementos!",
    icon: "success",
    confirmButtonText: "Volver al menú"
}).then((result) => {
    if (result.value) {
        window.location.href="/memoramaDifficulty";
    }
});

const gameOverAlert = () => Swal.fire({
    title: '¡Perdiste!',
    text: "¿Quieres volver a intentarlo?",
    icon: 'error',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, otro intento',
    cancelButtonText: 'No, volver al menú',
}).then((result) => {
    if (result.value) {
        window.location.reload();
    } else {
        window.location.href="/memoramaDifficulty";
    }
});

cards.forEach(card => card.addEventListener('click',flipCard))