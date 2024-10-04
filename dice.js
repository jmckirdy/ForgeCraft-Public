const diceImages = ["dice/dice_1.png", "dice/dice_2.png", "dice/dice_3.png", "dice/dice_4.png", "dice/dice_5.png", "dice/dice_6.png"];
                      
function rollDice() {
  const diceElement = document.getElementById("dice");
  const audioElement = document.getElementById("diceAudio");

  // Play the dice rolling sound
  audioElement.play();

  // Rapidly cycle through the dice images
  for (let i = 0; i < 15; i++) {
    setTimeout(() => {
      const randomIndex = Math.floor(Math.random() * diceImages.length);
      const newDiceImage = diceImages[randomIndex];
      diceElement.src = newDiceImage;
    }, i * 100);
  }

  // Settle on the final outcome after 1500 milliseconds
  setTimeout(() => {
    const randomIndex = Math.floor(Math.random() * diceImages.length);
    const newDiceImage = diceImages[randomIndex];
    diceElement.src = newDiceImage;
  }, 1500);
}