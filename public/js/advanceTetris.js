const cvs = document.getElementById("tetris");
const ctx = cvs.getContext("2d");
const scoreElement = document.getElementById("score");
const levelElement = document.getElementById("level");
const nextPieceElement = document.getElementById("nextPiece");
var id = document.getElementById("cont-game").getAttribute("value");

const cvsScale = 1.5;

ctx.scale(cvsScale, cvsScale);

let currentLVL = 0;
let nxtLvl = currentLVL + 1000;

const ROW = 17;
const COL = (COLUMN = 10);
const SQ = (squareSize = 25);
const VACANT = "WHITE"; // color of an empty square

const LVL1 = 999,
    LVL2 = 1999,
    LVL3 = 2999,
    LVL4 = 3999,
    LVL5 = 4999,
    LVL6 = 5999,
    LVL7 = 6999,
    LVL8 = 7999,
    LVL9 = 8999,
    LVL10 = 9999,
    LVL11 = 1999,
    LVL12 = 11999,
    LVL13 = 12999;

const e1 = document.getElementById("e1");
const e2 = document.getElementById("e2");
const e3 = document.getElementById("e3");
const e4 = document.getElementById("e4");
const e5 = document.getElementById("e5");
const e6 = document.getElementById("e6");

let score = 0;
//post para enviar el puntaje
function send_puntaje() {
    
    axios.post('/getPoints/'+id, {
        points: '1400'
      })
      .then((response) => {
        console.log(response);
      }, (error) => {
        console.log(error);
      });
}

// draw a square
function drawSquare(x, y, color) {
    ctx.fillStyle = color;
    ctx.fillRect(x * SQ, y * SQ, SQ, SQ);

    ctx.strokeStyle = "GRAY";
    ctx.strokeRect(x * SQ, y * SQ, SQ, SQ);
}

// create the board
let board = [];
for (let r = 0; r < ROW; r++) {
    board[r] = [];
    for (let c = 0; c < COL; c++) {
        board[r][c] = VACANT;
    }
}

// draw the board
function drawBoard() {
    for (let r = 0; r < ROW; r++) {
        for (let c = 0; c < COL; c++) {
            drawSquare(c, r, board[r][c]);
        }
    }
}

drawBoard();

// the pieces and their colors
const PIECES = [
    [Z, "#FF0D72"],
    [S, "#0DC2FF"],
    [T, "#0DFF72"],
    [O, "#F538FF"],
    [L, "#FF8E0D"],
    [I, "#FFE138"],
    [J, "#3877FF"]
];

// generate random pieces
function randomPiece() {
    let r = Math.floor(Math.random() * PIECES.length); // 0 -> 6
    return new Piece(PIECES[r][0], PIECES[r][1]);
}

let arregloPiezas = [];

function generateLoader() {
    for (let index = 0; index < 499; index++) {
        arregloPiezas.push(randomPiece());
    }
    //console.log(arregloPiezas);
}

generateLoader();

let p = randomPiece();

// The Object Piece
function Piece(tetromino, color) {
    this.tetromino = tetromino;
    this.color = color;

    this.tetrominoN = 0; // we start from the first pattern
    this.activeTetromino = this.tetromino[this.tetrominoN];

    // we need to control the pieces
    this.x = 3;
    this.y = -2;
}

// fill function
Piece.prototype.fill = function(color) {
    for (let r = 0; r < this.activeTetromino.length; r++) {
        for (let c = 0; c < this.activeTetromino.length; c++) {
            // we draw only occupied squares
            if (this.activeTetromino[r][c]) {
                drawSquare(this.x + c, this.y + r, color);
            }
        }
    }
};

// draw a piece to the board
Piece.prototype.draw = function() {
    this.fill(this.color);
};

// undraw a piece
Piece.prototype.unDraw = function() {
    this.fill(VACANT);
};

// move Down the piece
let cont = 0;
let nxtPieceToDraw = arregloPiezas[1];
//console.log(arregloPiezas);

checkNextPiece();

//console.log(nxtPieceToDraw);

Piece.prototype.moveDown = function() {
    if (!this.collision(0, 1, this.activeTetromino)) {
        this.unDraw();
        this.y++;
        this.draw();
    } else {
        // we lock the piece and generate a new one
        this.lock();
        p = randomPiece();
        cont++;
        let nextPieceCont = cont + 1;
        nxtPieceToDraw = arregloPiezas[nextPieceCont];
        p = arregloPiezas[cont];
        //console.log(nxtPieceToDraw);
        //console.log(nxtPieceToDraw.color);
        checkNextPiece();
    }
};

function checkNextPiece() {
    if (nxtPieceToDraw.color == "#FF0D72") {
        //console.log("Sigue Z");
        nextPieceElement.innerHTML = '<img src="/tetrisImages/z.png">';
    } else if (nxtPieceToDraw.color == "#0DC2FF") {
        //console.log("Sigue S");
        nextPieceElement.innerHTML = '<img src="/tetrisImages/s.png">';
    } else if (nxtPieceToDraw.color == "#0DFF72") {
        //console.log("Sigue T");
        nextPieceElement.innerHTML = '<img src="/tetrisImages/t.png">';
    } else if (nxtPieceToDraw.color == "#F538FF") {
        //console.log("Sigue O");
        nextPieceElement.innerHTML = '<img src="/tetrisImages/o.png">';
    } else if (nxtPieceToDraw.color == "#FF8E0D") {
        //console.log("Sigue L");
        nextPieceElement.innerHTML = '<img src="/tetrisImages/l.png">';
    } else if (nxtPieceToDraw.color == "#FFE138") {
        //console.log("Sigue I");
        nextPieceElement.innerHTML = '<img src="/tetrisImages/i.png">';
    } else if (nxtPieceToDraw.color == "#3877FF") {
        //console.log("Sigue J");
        nextPieceElement.innerHTML = '<img src="/tetrisImages/j.png">';
    }
}

// move Right the piece
Piece.prototype.moveRight = function() {
    if (!this.collision(1, 0, this.activeTetromino)) {
        this.unDraw();
        this.x++;
        this.draw();
    }
};

// move Left the piece
Piece.prototype.moveLeft = function() {
    if (!this.collision(-1, 0, this.activeTetromino)) {
        this.unDraw();
        this.x--;
        this.draw();
    }
};

// rotate the piece
Piece.prototype.rotate = function() {
    let nextPattern = this.tetromino[
        (this.tetrominoN + 1) % this.tetromino.length
    ];
    let kick = 0;

    if (this.collision(0, 0, nextPattern)) {
        if (this.x > COL / 2) {
            // it's the right wall
            kick = -1; // we need to move the piece to the left
        } else {
            // it's the left wall
            kick = 1; // we need to move the piece to the right
        }
    }

    if (!this.collision(kick, 0, nextPattern)) {
        this.unDraw();
        this.x += kick;
        this.tetrominoN = (this.tetrominoN + 1) % this.tetromino.length; // (0+1)%4 => 1
        this.activeTetromino = this.tetromino[this.tetrominoN];
        this.draw();
    }
};

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
        window.location.href="/tetrisDifficulty";
    }
});

const gameAlert = () => Swal.fire({
    title: "¡Lo lograste!",
    text: "¡Encontraste todos los elementos!",
    icon: "success",
    confirmButtonText: "Volver al menú"
}).then((result) => {
    if (result.value) {
        window.location.href="/tetrisDifficulty";
    }
});

Piece.prototype.lock = function() {
    for (r = 0; r < this.activeTetromino.length; r++) {
        for (c = 0; c < this.activeTetromino.length; c++) {
            // we skip the vacant squares
            if (!this.activeTetromino[r][c]) {
                continue;
            }
            // pieces to lock on top = game over
            if (this.y + r < 0) {
                //alert("Game Over");
                gameOverAlert();
                // stop request animation frame
                gameOver = true;
                break;
            }
            // we lock the piece
            board[this.y + r][this.x + c] = this.color;
        }
    }
    // remove full rows
    for (let r = 0; r < ROW; r++) {
        let isRowFull = true;
        for (let c = 0; c < COL; c++) {
            isRowFull = isRowFull && board[r][c] != VACANT;
        }
        if (isRowFull) {
            // if the row is full
            // we move down all the rows above it

            for (y = r; y > 1; y--) {
                for (c = 0; c < COL; c++) {
                    board[y][c] = board[y - 1][c];
                }
            }
            // the top row board[0][..] has no row above it
            for (c = 0; c < COL; c++) {
                board[0][c] = VACANT;
                //contR++;
            }

            // increment the score
            score += 250;

            scoreElement.innerHTML = score;
        }
    }
    // update the board
    drawBoard();
};

// collision fucntion
Piece.prototype.collision = function(x, y, piece) {
    for (r = 0; r < piece.length; r++) {
        for (c = 0; c < piece.length; c++) {
            // if the square is empty, we skip it
            if (!piece[r][c]) {
                continue;
            }
            // coordinates of the piece after movement
            let newX = this.x + c + x;
            let newY = this.y + r + y;

            // conditions
            if (newX < 0 || newX >= COL || newY >= ROW) {
                return true;
            }
            // skip newY < 0; board[-1] will crush our game
            if (newY < 0) {
                continue;
            }
            // check if there is a locked piece alrady in place
            if (board[newY][newX] != VACANT) {
                return true;
            }
        }
    }
    return false;
};

// CONTROL the piece
document.addEventListener("keydown", CONTROL);

function CONTROL(event) {
    if (event.keyCode == 37 || event.keyCode == 65) {
        p.moveLeft();
        //dropStart = Date.now();
    } else if (
        event.keyCode == 38 ||
        event.keyCode == 81 ||
        event.keyCode == 69
    ) {
        p.rotate();
        //dropStart = Date.now();
    } else if (event.keyCode == 39 || event.keyCode == 68) {
        p.moveRight();
        //dropStart = Date.now();
    } else if (event.keyCode == 40 || event.keyCode == 83) {
        p.moveDown();
    }
}

// drop the piece every delta time
let dropStart = 0;
let gameOver = false;

function drop() {
    let now = Date.now();
    let delta = now - dropStart;

    //console.log(delta);

    if (score < LVL1) {
        if (delta > 650) {
            p.moveDown();
            dropStart = Date.now();
            // update the score
            levelElement.innerHTML = 0;
            currentLVL = 0;
            nxtLvl = LVL1;
            e1.style.display = "block";
        }
    }
    if (score >= LVL1 && score < LVL2) {
        if (delta > 550) {
            p.moveDown();
            dropStart = Date.now();
            // update the score
            levelElement.innerHTML = 1;
            currentLVL = 1;
            nxtLvl = LVL2;
            e2.style.display = "block";
        }
    } else if (score >= LVL2 && score < LVL3) {
        if (delta > 450) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 2;
            currentLVL = 2;
            nxtLvl = LVL3;
            e3.style.display = "block";
        }
    } else if (score >= LVL3 && score < LVL4) {
        if (delta > 425) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 3;
            currentLVL = 3;
            e4.style.display = "block";
        }
    } else if (score >= LVL4 && score < LVL5) {
        if (delta > 410) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 4;
            currentLVL = 4;
            nxtLvl = LVL5;
            e5.style.display = "block";
        }
    } else if (score >= LVL5 && score < LVL6) {
        if (delta > 400) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 5;
            currentLVL = 5;
            nxtLvl = LVL6;
            e6.style.display = "block";
        }
    } else if (score >= LVL6 && score < LVL7) {
        if (delta > 390) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 6;
            currentLVL = 6;
            nxtLvl = LVL7;
        }
    } else if (score >= LVL7 && score < LVL8) {
        if (delta > 380) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 7;
            currentLVL = 7;
            nxtLvl = LVL8;
            e7.style.display = "block";
        }
    } else if (score >= LVL8 && score < LVL9) {
        if (delta > 370) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 8;
            currentLVL = 8;
            nxtLvl = LVL9;
            e8.style.display = "block";
        }
    } else if (score >= LVL9 && score < LVL10) {
        if (delta > 360) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 9;
            currentLVL = 9;
            nxtLvl = LVL10;
        }
    } else if (score >= LVL10 && score < LVL11) {
        if (delta > 350) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 10;
            currentLVL = 10;
            nxtLvl = LVL11;
            e9.style.display = "block";
        }
    } else if (score >= LVL11 && score < LVL12) {
        if (delta > 340) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 11;
            currentLVL = 11;
            nxtLvl = LVL12;
        }
    } else if (score >= LVL12 && score < LVL13) {
        if (delta > 330) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 12;
            currentLVL = 12;
            nxtLvl = LVL13;
            e10.style.display = "block";
        }
    } else if (score >= LVL13) {
        if (delta > 320) {
            p.moveDown();
            dropStart = Date.now();
            levelElement.innerHTML = 13;
            currentLVL = 13;
            e6.style.display = "block";
            send_puntaje();
            gameAlert();
            gameOver = true;
        }
    }

    if (!gameOver) {
        requestAnimationFrame(drop);
    }
}

drop();
