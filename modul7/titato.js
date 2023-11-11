const cells = document.querySelectorAll('.cell');
const statusElement = document.getElementById('status');
const boardElement = document.getElementById('board');
const winningMessageElement = document.getElementById('winningMessage');
const resetButton = document.getElementById('reset');
const toggleDarkModeButton = document.getElementById('toggleDarkMode');
const body = document.body;

let currentPlayer = 'X';
let gameBoard = ['', '', '', '', '', '', '', '', ''];
let gameActive = true;
let darkMode = false;

function checkWinner(){
    const winPatterns = [
        [0, 1, 2],
        [3, 4, 5], 
        [6, 7, 8], 
        [0, 3, 6], 
        [1, 4, 7], 
        [2, 5, 8], 
        [0, 4, 8], 
        [2, 4, 6]             
    ];

    for (let pattern of winPatterns){
        const [a, b, c] = pattern;
        if (gameBoard[a] !== '' && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]){
            return gameBoard[a];
        }
    }

    if (!gameBoard.includes('')){
        return 'L';
    }
        return null;
}

function updateStatus(){
    const winner = checkWinner();
    if (winner) {
        gameActive = false;
            statusElement.textContent = winner === 'L' ? 'PLAYERS LOSE!' : `PLAYER ${winner} WINS!`;
    } else {
        statusElement.textContent = `CURRENT PLAYERS: ${currentPlayer}`;
    }
}

function handleCellClick(index){
    if (gameBoard[index] == '' && gameActive){
        gameBoard[index] = currentPlayer;
        cells[index].textContent = currentPlayer;
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        updateStatus();
    }
}
    
function resetGame(){
    gameBoard = ['', '', '', '', '', '', '', '', ''];
    currentPlayer = 'X';
    gameActive = true;

    cells.forEach(cell =>{
    cell.textContent = '';
    cell.classList.remove('dark-mode');
    });
    
    statusElement.textContent = 'Current player: X';
};
    
function toggleDarkMode() {
    darkMode = !darkMode;
    body.classList.toggle('dark-mode', darkMode);
    updateDarkModeCells();
}
    
function updateDarkModeCells() {
    cells.forEach(cell => {
        cell.classList.toggle('dark-mode', darkMode);
    });
}
    
cells.forEach((cell, index) => {
    cell.addEventListener('click', () => {
        handleCellClick(index);
    });
});
    
resetButton.addEventListener('click', resetGame);    
toggleDarkModeButton.addEventListener('click', toggleDarkMode);