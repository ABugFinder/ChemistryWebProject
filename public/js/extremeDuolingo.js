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
    question: '¿Cuál es la masa atómica del Helio?',
    answers: [
      { text: '1.00794', correct: false },
      { text: '6.941', correct: false },
      { text: '4.002602', correct: true },
      { text: '9.012182', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Kriptón?',
    answers: [
      { text: '74.9216', correct: false },
      { text: '78.96', correct: false },
      { text: '83.8', correct: true },
      { text: '87.62', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Oro?',
    answers: [
      { text: '204.3833', correct: false },
      { text: '200.59', correct: false },
      { text: '196.966569', correct: true },
      { text: '210', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Fósforo?',
    answers: [
      { text: '22.98976', correct: false },
      { text: '26.981538', correct: false },
      { text: '30.973762', correct: true },
      { text: '26.981538', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Cromo?',
    answers: [
      { text: '12.0107', correct: false },
      { text: '9.012182', correct: false },
      { text: '10.811', correct: true },
      { text: '10.811', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Boro?',
    answers: [
      { text: '15.9994', correct: false },
      { text: '9.012182', correct: false },
      { text: '10.811', correct: true },
      { text: '20.1797', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Itrio?',
    answers: [
      { text: '101.07', correct: false },
      { text: '92.90638', correct: false },
      { text: '88.90585', correct: true },
      { text: '102.9055', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Europio?',
    answers: [
      { text: '140.116', correct: false },
      { text: '145', correct: false },
      { text: '151.964', correct: true },
      { text: '157.25', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Platino?',
    answers: [
      { text: '167.259', correct: false },
      { text: '180.9479', correct: false },
      { text: '195.084', correct: true },
      { text: '204.3833', correct: false }
    ]
  },
  {
    question: '¿Cuál es la masa atómica de Hierro?',
    answers: [
      { text: '50.9415', correct: false },
      { text: '44.95591', correct: false },
      { text: '55.847', correct: true },
      { text: '63.546', correct: false }
    ]
  },
]