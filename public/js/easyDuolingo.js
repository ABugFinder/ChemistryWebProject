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
    question: '¿A qué elemento corresponde el símbolo Li?',
          answers: [
            { text: 'Helio', correct: false },
            { text: 'Litio', correct: true },
            { text: 'Hidrógeno', correct: false },
            { text: 'Berilio', correct: false }
          ]
      },{
          
    //2
    question: '¿A qué elemento corresponde el símbolo Zr?',
          answers: [
            { text: 'Circonio', correct: true },
            { text: 'Copemicio', correct: false },
            { text: 'Mercurio', correct: false },
            { text: 'Lantano', correct: false }
          ]
      },{
          
    //3
    question: '¿A qué elemento corresponde el símbolo Ga?',
          answers: [
            { text: 'Yodo', correct: false },
            { text: 'Galio', correct: true },
            { text: 'Bario', correct: false },
            { text: 'Radio', correct: false }
          ]
      },{
          
    //4
    question: '¿A qué elemento corresponde el símbolo S?',
          answers: [
            { text: 'Fósforo', correct: false },
            { text: 'Azufre', correct: true },
            { text: 'Boro', correct: false },
            { text: 'Silicio', correct: false }
          ]
      },{
          
    //5
    question: '¿A qué elemento corresponde el símbolo Fe?',
          answers: [
            { text: 'Carbono', correct: false },
            { text: 'Rodio', correct: false },
            { text: 'Osmio', correct: false },
            { text: 'Hierro', correct: true }
          ]
      },{
          
    //6
    question: '¿A qué elemento corresponde el símbolo Co?',
          answers: [
            { text: 'Cobalto', correct: true },
            { text: 'Copemicio', correct: false },
            { text: 'Mercurio', correct: false },
            { text: 'Lantano', correct: false }
          ]
      },{
          
    //7
    question: '¿A qué elemento corresponde el símbolo Rh?',
          answers: [
            { text: 'Cromo', correct: false },
            { text: 'Rodio', correct: true },
            { text: 'Renio', correct: false },
            { text: 'Titanio', correct: true }
          ]
      },{
          
    //8
    question: '¿A qué elemento corresponde el símbolo Na?',
          answers: [
            { text: 'Sodio', correct: true },
            { text: 'Cadmio', correct: false },
            { text: 'Indio', correct: false },
            { text: 'Antimonio', correct: false }
          ]
      },{
          
    //9
    question: '¿A qué elemento corresponde el símbolo Sn?',
          answers: [
            { text: 'Oro', correct: false },
            { text: 'Estaño', correct: true },
            { text: 'Osmio', correct: false },
            { text: 'Plomo', correct: true }
          ]
      },{
          
    //10
    question: '¿A qué elemento corresponde el símbolo Bi?',
          answers: [
            { text: 'Bismuto', correct: true },
            { text: 'Bario', correct: false },
            { text: 'Osmio', correct: false },
            { text: 'Seleno', correct: false }
          ]
      },

]