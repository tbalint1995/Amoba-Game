  // Ellenőrzi, hogy van-e nyertes
  export function checkWin(player, rows, board) {
    let wincases = [];
    for (let i = 0; i < rows; i++) {

      for( let offset = 0; offset <= 5; offset++ ) {
        wincases.push(( board[i][offset] === player &&
                        board[i][offset+1] === player &&
                        board[i][offset+2] === player &&
                        board[i][offset+3] === player &&
                        board[i][offset+4] === player ))
      }

    }

      let winindex = wincases.findIndex( c => c === true ) 

      if (winindex > -1 ) {
        return true; // Vízszintes győzelem
      }

      /*********************************/

    wincases = [];
    for (let i = 0; i < rows; i++) {

      for( let offset = 0; offset <= 5; offset++ ) {
        wincases.push(( board[offset][i] === player &&
                        board[offset+1][i] === player &&
                        board[offset+2][i] === player &&
                        board[offset+3][i] === player &&
                        board[offset+4][i] === player ))
      }
    }
      winindex = wincases.findIndex( c => c === true ) 

      if (winindex > -1 ) {
        return true; // Függőleges győzelem
      }
    
      
    wincases = [];
    for (let i = 0; i < rows; i++) {
      for( let xyoffset=0; xyoffset <= 5; xyoffset++ ) {
        for( let offset = 0; offset <= 5; offset++ ) {
          wincases.push(( board[offset][offset+xyoffset] === player &&
                          board[offset+1][offset+xyoffset+1] === player &&
                          board[offset+2][offset+xyoffset+2] === player &&
                          board[offset+3][offset+xyoffset+3] === player &&
                          board[offset+4][offset+xyoffset+4] === player ))

        wincases.push((  board[xyoffset][offset] === player &&
                          board[xyoffset+1][offset+1] === player &&
                          board[xyoffset+2][offset+2] === player &&
                          board[xyoffset+3][offset+3] === player &&
                          board[xyoffset+4][offset+4] === player ))                 
        }
      }  
    }
  
      winindex = wincases.findIndex( c => c === true ) 

      if (winindex > -1 ) {
        return true; // átló
      }


    wincases = [];
    for (let i = 0; i < rows; i++) {
      for( let xyoffset=0; xyoffset <= 5; xyoffset++ ) {
        for( let offset = 0; offset <= 5; offset++ ) {
          wincases.push(( board[offset][9-offset-xyoffset] === player &&
                          board[offset+1][9-(offset+1)-xyoffset] === player &&
                          board[offset+2][9-(offset+2)-xyoffset] === player &&
                          board[offset+3][9-(offset+3)-xyoffset] === player &&
                          board[offset+4][9-(offset+4)-xyoffset] === player ))

          wincases.push(( board[xyoffset][9-offset] === player &&
                          board[xyoffset+1][9-(offset+1)] === player &&
                          board[xyoffset+2][9-(offset+2)] === player &&
                          board[xyoffset+3][9-(offset+3)] === player &&
                          board[xyoffset+4][9-(offset+4)] === player ))
        }
      }
    }  

      winindex = wincases.findIndex( c => c === true ) 

      if (winindex > -1 ) {
        return true; // fordítva átló
      }


    return false; // Nincs nyertes
  }

  // Ellenőrzi, hogy döntetlen van-e
 export function checkNoWinner(cols, rows, board) {
    for (let i = 0; i < cols; i++) {
      for (let j = 0; j < rows; j++) {
        if (board[i][j] === '') {
          return false; // Van még üres cella, nincs döntetlen
        }
      }
    }
    return true; // Minden cella kitöltve, döntetlen
  }