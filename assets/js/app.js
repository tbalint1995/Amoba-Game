import { checkWin, checkNoWinner } from "./Components.js";

const rows = 10, cols = 10;

const container = document.querySelector('.board');
[...Array(rows * cols).keys()].forEach(cell=>{
    container.appendChild( document.createElement('div') )
})



let board = [];

for (let i = 0; i < rows; i++) {
    let subarray=[];
    for (let j = 0; j < cols; j++) {
        subarray.push('')
    }
    board.push(subarray)
}

// Játékállapot inicializálása
const infodiv = document.querySelector('#infodiv');
let currentPlayer = 'X';
let gameEnded = false;
setmsg(((currentPlayer === 'X') ? 'Player1' : 'Player2')+' következik!', currentPlayer)

const boardDivs = document.querySelectorAll('.board div');
boardDivs.forEach((div, index) => {
  div.addEventListener('click', () => {
    if (!gameEnded && board[Math.floor(index / rows)][index % cols] === '') {
      div.textContent = currentPlayer;
      board[Math.floor(index / rows)][index % cols] = currentPlayer;

      if (checkWin(currentPlayer, rows, board)) {
        setmsg(`Az ${currentPlayer} játékos nyert! <a class="btn btn-primary" href="?play">újra</a>`, currentPlayer)
        gameEnded = true;
      } else if (checkNoWinner(cols, rows, board)) {
        setmsg('Döntetlen!')
        gameEnded = true;
      } else {
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        setmsg(((currentPlayer === 'X') ? 'Player1' : 'Player2')+' következik!', currentPlayer)
      }
    }
  });
});

function setmsg(msg, currentPlayer=''){
  infodiv.innerHTML = msg;  
}