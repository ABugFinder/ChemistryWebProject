const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')

var shuffledQuestions, currentQuestionIndex;

var success = 0;
var wrong = 0;

//user id
var id = document.getElementById("cont-game").getAttribute("value");

//post para enviar el puntaje
function send_puntaje() {
    
    axios.post('/getPoints/'+id, {
        points: '50'
      })
      .then((response) => {
        console.log(response);
      }, (error) => {
        console.log(error);
      });
}


startButton.addEventListener('click', startGame)

nextButton.addEventListener('click', () => {
  currentQuestionIndex++
  setNextQuestion()
})

function startGame() {

  startButton.classList.add('hide')
  shuffledQuestions = questions.sort(() => Math.random() - .5)
  currentQuestionIndex = 0
  questionContainerElement.classList.remove('hide')
  setNextQuestion()

}

function setNextQuestion() {
  resetState()
  showQuestion(shuffledQuestions[currentQuestionIndex])
}

function showQuestion(question) {

  questionElement.innerText = question.question
  question.answers.forEach(answer => {
    const button = document.createElement('button')
    button.innerText = answer.text
    button.classList.add('btn')
    if (answer.correct) {
      button.dataset.correct = answer.correct
    }
    button.addEventListener('click', selectAnswer)
    answerButtonsElement.appendChild(button)
  })

}

function resetState() {

  clearStatusClass(document.body)
  nextButton.classList.add('hide')
  while (answerButtonsElement.firstChild) {
    answerButtonsElement.removeChild(answerButtonsElement.firstChild)
  }

}

const successElement = document.getElementById("goodAnswer");
const wrongElement = document.getElementById("badAnswer");

function selectAnswer(e) {
  let isGood = false;
  let isWrong = false;
  const selectedButton = e.target
  //const correct = selectedButton.dataset.correct
  //setStatusClass(document.body, correct) 
  Array.from(answerButtonsElement.children).forEach(button => {
    setStatusClass(button, button.dataset.correct)
    if(selectedButton.dataset.correct){
      console.log('respuesta positiva');
      success++;
      isGood = true;
    } else {
      wrong++;
      console.log("respuesta erronea");
      isWrong = true;
    }
  })
  if (shuffledQuestions.length > currentQuestionIndex + 1) {
    //nextButton.classList.remove('hide')

    if(isGood){
      success-=3;
    } else if(isWrong){
      wrong-=3;
    }

    successElement.innerHTML = success;
    wrongElement.innerHTML = wrong;

    currentQuestionIndex++
    setNextQuestion();
  } else {
    if(isGood){
      success-=3;
    } else if(isWrong){
      wrong-=3; 
    }

    successElement.innerHTML = success;
    wrongElement.innerHTML = wrong;

    //Here goes the validation for win duolingo
    send_puntaje();

    

    gameAlert();
  }
}

const gameAlert = () => Swal.fire({
  title: "¡Terminaste!",
  text: "Aciertos: "+ success + " - Errores: " + wrong + " - Total: " + (success+wrong),
  icon: "success",
  confirmButtonText: "Volver al menú"
}).then((result) => {
  if (result.value) {
      window.location.href="/duolingoDifficulty";
  }
});

function setStatusClass(element, correct) {

  clearStatusClass(element)
  if (correct) {
    element.classList.add('correct')
  } else {
    element.classList.add('wrong')
  }

}

function clearStatusClass(element) {

  element.classList.remove('correct')
  element.classList.remove('wrong')

}

const questions = [

    {
        question: '¿A qué elemento corresponde el síbolo H?',
        answers: [
        { text: 'Helio', correct: false },
        { text: 'Litio', correct: false },
        { text: 'Hidrógeno', correct: true },
        { text: 'Berilio', correct: false }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo Al?',
        answers: [
        { text: 'Fósforo', correct: false },
        { text: 'Silicio', correct: false },
        { text: 'Aluminio', correct: true },
        { text: 'Azufre', correct: false }
        ]
        },
        {
        question: '¿En qué estado de la materia se encuentra a temperatura ambiente el elemento Rutherfordio?',
        answers: [
        { text: 'Sólido', correct: false },
        { text: 'Plasma', correct: false },
        { text: 'Desconocido', correct: true },
        { text: 'Líquido', correct: false }
        ]
        },
        {
        question: '¿A que simbolo pertenece este el elemento Niobio?',
        answers: [
        { text: 'Mo', correct: false },
        { text: 'Md', correct: false },
        { text: 'Nd', correct: false },
        { text: 'Nb', correct: true }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo Cu?',
        answers: [
        { text: 'Zinc', correct: false },
        { text: 'Cobre', correct: true },
        { text: 'Galio', correct: false },
        { text: 'Germio', correct: false }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo Mn?',
        answers: [
        { text: 'Níquel', correct: false },
        { text: 'Cobalto', correct: false },
        { text: 'Hierro', correct: false },
        { text: 'Manganeso', correct: true }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo As?',
        answers: [
        { text: 'Selenio', correct: false },
        { text: 'Bromo', correct: false },
        { text: 'Kriptón', correct: false },
        { text: 'Arsénico', correct: true }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo Nb?',
        answers: [
        { text: 'Niobio', correct: true },
        { text: 'Molibdeno', correct: false },
        { text: 'Tecnesio', correct: false },
        { text: 'Rutenio', correct: false }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo Rb?',
        answers: [
        { text: 'Estroncio', correct: false },
        { text: 'Itrio', correct: false },
        { text: 'Rubidio', correct: true },
        { text: 'Circonio', correct: false }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo Rh?',
        answers: [
        { text: 'Paladio', correct: false },
        { text: 'Plata', correct: false },
        { text: 'Cadmio', correct: false },
        { text: 'Rodio', correct: true }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo I?',
        answers: [
        { text: 'Xenón', correct: false },
        { text: 'Yodo', correct: true },
        { text: 'Cesio', correct: false },
        { text: 'Bario', correct: false }
        ]
        },
        {
        question: '¿A qué elemento corresponde el síbolo La?',
        answers: [
        { text: 'Lantano', correct: true },
        { text: 'Cerio', correct: false },
        { text: 'Praseodimio', correct: false },
        { text: 'Neodimio', correct: false }
        ]
        },
        {
        question: '¿En qué estado de la materia se encuentra a temperatura ambiente el elemento Aluminio?',
        answers: [
        { text: 'Gaseoso', correct: false },
        { text: 'Desconocido', correct: false },
        { text: 'Sólido', correct: true },
        { text: 'Líquido', correct: false }
        ]
        },
        {
        question: '¿A que simbolo pertenece este el elemento Plomo?',
        answers: [
        { text: 'P', correct: false },
        { text: 'Pb', correct: true },
        { text: 'Pt', correct: false },
        { text: 'Pd', correct: false }
        ]
        },
        {
        question: '¿A que simbolo pertenece este el elemento Cobalto?',
        answers: [
        { text: 'Co', correct: true },
        { text: 'Cr', correct: false },
        { text: 'Ca', correct: false },
        { text: 'C', correct: false }
        ]
        },
        {
        question: '¿En qué estado de la materia se encuentra a temperatura ambiente el elemento Neón?',
        answers: [
        { text: 'Líquido', correct: false },
        { text: 'Desconocido', correct: false },
        { text: 'Gaseoso', correct: true },
        { text: 'Plasma', correct: false }
        ]
        },

]