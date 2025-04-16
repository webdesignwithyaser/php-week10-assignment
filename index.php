<html>
  <head>
    <title>Number Guessing Game</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="game-container">
      <h1 class="title">Guessing Game</h1>
      <h2 style="text-align: center;">Guess a number between 1 and 3</h2>
      <p style="text-align: center;">You have one chance to guess correctly. Good luck!</p>
      
      <div class="input-group">
        <label for="guess">Your Guess: </label>
        <input type="number" id="guess" name="guess" min="1" max="3" required>
      </div>
      <script>
        function guess() {
          var guess = document.getElementById("guess");
        var guessValue = guess.value;
        var randomNumber = Math.floor(Math.random() * 3) + 1;
        if (guessValue == randomNumber) {
          document.style.col.write("You guessed right!");
        }
        else if(guessValue=="" || guessValue>=4){
          var mess="Please enter a number between 1 and 3";
          document.write(mess);
        }
        else {
          document.style.color="red".write("You guessed wrong!");
        }
        }
      </script>
      <button type="button" onclick="guess()">
        Submit
      </button>
      <button type="button" onclick="location.reload()">
        Reset
      </button>  
    
  </body>
</html>