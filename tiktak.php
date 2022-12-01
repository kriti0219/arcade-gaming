<?php 
    session_start();
   
   //onnection complete
   include('config/db_connect.php');
    
    $sql="SELECT scores FROM pizzas where id = '$_SESSION[userid]'";

    $result=mysqli_query($conn,$sql);
    $counter=0;
    if($result){
        $counter=mysqli_fetch_assoc($result)['scores'];
        // echo $counter;
    }
   
  //   function score_update($counter){
  //     $conn = mysqli_connect('localhost', 'adarsh', 'test1234', 'ninja_pizza');
   
  //  //check connection
  //  if(!$conn){
  //    echo 'Connection error:' . mysqli_connect_error();
  //   }
  //     $yo = "UPDATE pizzas SET scores='$counter' where id= '$_SESSION[userid]' ";
  //     $result=mysqli_query($conn,$yo);
  //   }
    
  // }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tick-Tac-Toe</title>
    <link rel="stylesheet" href="tiktakstyle.css">
    <link rel="icon" href="logo.png" type="image/icon type">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>

<body>
  <h1 class="neonText">Tic-Tac-Toe </h1>

    <div class="container">
      <div class="tikcontainer">
        
      <div class="play-area" class="neonText">
        
        </div>
      </div>
      <h3 id="winner"></h3>
    </div>

    <a href="tiktak.php"> <button>RESET</button></a>

    <div class="sidebar">
    <a href="Home-page.php" class="home">Home</a>
    <a href="leader.php" class="leader">Leaderboard</a>
    </div>
   
<script>

let count = parseInt(<?php echo $counter; ?>);
// document.write(count);
var player = "O";
const computer = "X";
var name = player;

let board_full = false;
let play_board = ["", "", "", "", "", "", "", "", ""];

const board_container = document.querySelector(".play-area");

const winner_statement = document.getElementById("winner");

check_board_complete = () => {
  let flag = true;
  play_board.forEach(element => {
    if (element != player && element != computer) {
      flag = false;
    }
  });
  board_full = flag;
};


const check_line = (a, b, c) => {
  return (
    play_board[a] == play_board[b] &&
    play_board[b] == play_board[c] &&
    (play_board[a] == player || play_board[a] == computer)
  );
};

const check_match = () => {
  for (i = 0; i < 9; i += 3) {
    if (check_line(i, i + 1, i + 2)) {
      document.querySelector(`#block_${i}`).classList.add("win");
      document.querySelector(`#block_${i + 1}`).classList.add("win");
      document.querySelector(`#block_${i + 2}`).classList.add("win");
      return play_board[i];
    }
  }
  for (i = 0; i < 3; i++) {
    if (check_line(i, i + 3, i + 6)) {
      document.querySelector(`#block_${i}`).classList.add("win");
      document.querySelector(`#block_${i + 3}`).classList.add("win");
      document.querySelector(`#block_${i + 6}`).classList.add("win");
      return play_board[i];
    }
  }
  if (check_line(0, 4, 8)) {
    document.querySelector("#block_0").classList.add("win");
    document.querySelector("#block_4").classList.add("win");
    document.querySelector("#block_8").classList.add("win");
    return play_board[0];
  }
  if (check_line(2, 4, 6)) {
    document.querySelector("#block_2").classList.add("win");
    document.querySelector("#block_4").classList.add("win");
    document.querySelector("#block_6").classList.add("win");
    return play_board[2];
}
return "";
};

const check_for_winner = () => {
    let res = check_match()
    if (res == player) {
        
        winner.innerText = "Winner is " + "<?php echo $_SESSION['username'];?>";
        count = count + 10;
        // console.log(count +"winner");
        $.ajax({
  url: "readJson.php",
  type: "POST",
  data:{"myData":count}
}).done(function(data) {
     console.log(data);
    <?php ?>
});
    // document.write(count);
    winner.classList.add("playerWin");
    board_full = true
  } else if (res == computer) {
    winner.innerText = "Winner is computer";
    winner.classList.add("computerWin");
    
    board_full = true
  } else if (board_full) {
    winner.innerText = "Draw!";
    winner.classList.add("draw");
  
  }
  

  // fcookie='mycookie';
  // document.cookie=fcookie+"=" + count;
  // console.log(count);

};



const render_board = () => {
  board_container.innerHTML = ""
  play_board.forEach((e, i) => {
    board_container.innerHTML += `<div id="block_${i}" class="block" onclick="addPlayerMove(${i})">${play_board[i]}</div>`
    if (e == player || e == computer) {
      document.querySelector(`#block_${i}`).classList.add("occupied");
    }
  });
};

const game_loop = () => {
  render_board();
  check_board_complete();
  check_for_winner();
}

const addPlayerMove = e => {
  if (!board_full && play_board[e] == "") {
    play_board[e] = player;
    game_loop();
    addComputerMove();
  }
};

const addComputerMove = () => {
  if (!board_full) {
    do {
      selected = Math.floor(Math.random() * 9);
    } while (play_board[selected] != "");
    play_board[selected] = computer;
    game_loop();
  }
};

const reset_board = () => {
  play_board = ["", "", "", "", "", "", "", "", ""];
  board_full = false;
  winner.classList.remove("playerWin");
  winner.classList.remove("computerWin");
  winner.classList.remove("draw");
  winner.innerText = "";
  render_board();
};

//initial render
render_board();

</script>


    <!-- // if (isset($_COOKIE["mycookie"])){
    //   echo $_COOKIE["mycookie"];
    // }
    //   $score_count=$_COOKIE["mycookie"];
      
    //   // to update score 
    //   $sql = "UPDATE pizzas SET scores='$score_count' where id= '$_SESSION[userid]' ";
      
    //   if ($conn->query($sql) === TRUE) {
    //       echo "Score updated";
    //     }
    //     else {
    //         echo "Error";
    //     }
    // }
    //     else
    //        echo "Cookie Not Set";

    //        $conn->close(); -->
        
</body>

</html>
