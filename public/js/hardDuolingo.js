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
  //1
  question: '¿A qué grupo corresponde el elemento Vanadio?',
        answers: [
          { text: '4', correct: false },
          { text: '5', correct: true },
          { text: '3', correct: false },
          { text: '6', correct: false }
        ]
    },{
        
  //2
  question: '¿A qué grupo corresponde el elemento Níquel?',
        answers: [
          { text: '10', correct: true },
          { text: '7', correct: false },
          { text: '2', correct: false },
          { text: '6', correct: false }
        ]
    },{
        
  //3
  question: '¿A qué grupo corresponde el elemento Cadmio?',
        answers: [
          { text: '11', correct: false },
          { text: '12', correct: true },
          { text: '13', correct: false },
          { text: '14', correct: false }
        ]
    },{
        
  //4
  question: '¿A qué grupo corresponde el elemento Astato?',
        answers: [
          { text: '15', correct: false },
          { text: '17', correct: true },
          { text: '14', correct: false },
          { text: '7', correct: false }
        ]
    },{
        
  //5
  question: '¿A qué grupo corresponde el elemento Helio?',
        answers: [
          { text: '1', correct: false },
          { text: '6', correct: false },
          { text: '17', correct: false },
          { text: '18', correct: true }
        ]
    },{
        
  //6
  question: '¿A qué grupo corresponde el elemento Calcio?',
        answers: [
          { text: '2', correct: true },
          { text: '3', correct: false },
          { text: '1', correct: false },
          { text: '5', correct: false }
        ]
    },{
        
  //7
  question: '¿A qué grupo corresponde el elemento Aluminio?',
        answers: [
          { text: '10', correct: false },
          { text: '13', correct: true },
          { text: '11', correct: false },
          { text: '16', correct: true }
        ]
    },{
        
  //8
  question: '¿A qué grupo corresponde el elemento Cromo?',
        answers: [
          { text: '6', correct: true },
          { text: '8', correct: false },
          { text: '10', correct: false },
          { text: '13', correct: false }
        ]
    },{
        
  //9
  question: '¿A qué grupo corresponde el elemento Germanio?',
        answers: [
          { text: '6', correct: false },
          { text: '14', correct: true },
          { text: '18', correct: false },
          { text: '13', correct: true }
        ]
    },{
        
  //10
  question: '¿A qué grupo corresponde el elemento Francio?',
        answers: [
          { text: '1', correct: true },
          { text: '5', correct: false },
          { text: '2', correct: false },
          { text: '10', correct: false }
        ]
    },

]