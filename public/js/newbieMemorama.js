//user id
var id = document.getElementById("cont-game").getAttribute("value");

//post para enviar el puntaje
function send_puntaje() {
    
    axios.post('/getPoints/'+id, {
        points: '400'
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
var cardListRookie = [ //RookieCards
    {
        name: "helio",
        img: "../images/memoramaCards/2.png"
    },
    {
        name: "helio",
        img: "../images/memoramaCards/2.png"
    },
    {
        name: "neon",
        img: "../images/memoramaCards/10.png"
    },
    {
        name: "neon",
        img: "../images/memoramaCards/10.png"
    },
    {
        name: "argon",
        img: "../images/memoramaCards/18.png"
    },
    {
        name: "argon",
        img: "../images/memoramaCards/18.png"
    },
    {
        name: "kripton",
        img: "../images/memoramaCards/36.png"
    },
    {
        name: "kripton",
        img: "../images/memoramaCards/36.png"
    },
    {
        name: "xenon",
        img: "../images/memoramaCards/54.png"
    },
    {
        name: "xenon",
        img: "../images/memoramaCards/54.png"
    },
    {
        name: "radon",
        img: "../images/memoramaCards/86.png"
    },
    {
        name: "radon",
        img: "../images/memoramaCards/86.png"
    },
    {
        name: "oganeson",
        img: "../images/memoramaCards/118.png"
    },
    {
        name: "oganeson",
        img: "../images/memoramaCards/118.png"
    },
];


cardListRookie = shuffle(cardListRookie);
cardListRookie.forEach(card => {
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
var recordPointsElement;
var recordPoints = 0;


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

    //Option for check, for any trouble!
    if(firstCard.dataset.framework ===  secondCard.dataset.framework) {
        // It's a Match 
        disableCards();
        contador(); //Contador funcion
    } else {
        // Not a Match
        unFlipcards();
        intentos();
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


//var x = document.getElementById().innerHTML = "";

function contador() { //Contador de pares
    paresCartas++;
    paresCartasContenedor = document.getElementById('contenedor').innerHTML = "Pares encontrados: " + paresCartas;
    recordPoints += 1500;
    recordPointsElement = document.getElementById('recordPointsElement').innerHTML = "Puntuación actual: " + recordPoints;
    console.log(paresCartas);
    if(paresCartas == 7){
        send_puntaje();
        gameAlert(); 
    }
}

function intentos() { //Contador de intentos
    contIntentos--;
    paresCartasContenedor = document.getElementById('contenedorIntentos').innerHTML = "Intentos restantes: " + contIntentos;
    recordPoints -= 150;
    recordPointsElement = document.getElementById('recordPointsElement').innerHTML = "Puntuación actual: " + recordPoints;
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