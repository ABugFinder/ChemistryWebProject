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
    question: '¿A qué categoría corresponde el elemento Hidrógeno?',
    answers: [
      { text: 'Alcalinos', correct: false },
      { text: 'Gases nobles', correct: false },
      { text: 'Alcalinotérreos', correct: false },
      { text: 'Otros no metales', correct: true },
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Oxígeno?',
    answers: [
      { text: 'Gases nobles', correct: false },
      { text: 'Otros no metales', correct: true },
      { text: 'Meteloides', correct: false },
      { text: 'Metales de Transición', correct: false }
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Sodio?',
    answers: [
      { text: 'Alcalinos', correct: true },
      { text: 'Otros metales', correct: false },
      { text: 'Metaloides', correct: false },
      { text: 'Hlógenos', correct: false }
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Cobalto?',
    answers: [
      { text: 'Halógenos', correct: false },
      { text: 'Otros no metales', correct: false },
      { text: 'Alcalinos', correct: false },
      { text: 'Metales de transisción', correct: true },
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Calcio?',
    answers: [
      { text: 'Metaloides', correct: false },
      { text: 'Alcalinotérreos', correct: false },
      { text: 'Alcalinos', correct: true },
      { text: 'Otros metales', correct: false }
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Vanadio?',
    answers: [
      { text: 'Otros no metales', correct: false },
      { text: 'Metales de transición', correct: true },
      { text: 'Alcalinos', correct: false },
      { text: 'Metales', correct: false }
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Selenio?',
    answers: [
      { text: 'Otros no metales', correct: true },
      { text: 'Metaloides', correct: false },
      { text: 'Gases nobles', correct: false },
      { text: 'Otros metales', correct: false }
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Indio?',
    answers: [
      { text: 'Lantánidos', correct: false },
      { text: 'Halógenos', correct: false },
      { text: 'Alcalinos', correct: false },
      { text: 'Otros metales', correct: true },
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Molibdeno?',
    answers: [
      { text: 'Lantánidos', correct: false },
      { text: 'Metales de transición', correct: true },
      { text: 'Halógenos', correct: false },
      { text: 'Alcalinos', correct: false }
    ]
  },
  {
    question: '¿A qué categoría corresponde el elemento Plata?',
    answers: [
      { text: 'Metales de transición', correct: true },
      { text: 'Gases nobles', correct: false },
      { text: 'Halógenos', correct: false },
      { text: 'Otros no metales', correct: false }
    ]
  },

]