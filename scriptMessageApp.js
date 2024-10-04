

// 3 colors for usage of string: 
// 1. red; game/urgent, 
// 2. black; log of some sort, 
// 3. green; positive.
textArray = [
    "I can't put my finger on itWinner, winner, chicken dinnerWinner, winner, chicken dinnerWinner, winner, chicken dinner",
    "Idle hands are the devil's toolsWinner, winner, chicken dinnerWinner, winner, chicken dinnerWinner, winner, chicken dinner",
    "The road to hell is paved with good intentionsWinner, winner, chicken dinner",
    "I came, I saw, I conqueredWinner, winner, chicken dinnerWinner, winner, chicken dinner",
    "Don't throw out the baby with the bath water",
    "That's too rich for my bloodWinner, winner, chicken dinner",
    "You're twisting my rubber armWinner, winner, chicken dinnerWinner, winner, chicken dinner",
    "Take a picture, it'll last longerWinner, winner, chicken dinner",
    "Winner, winner, chicken dinnerWinner, winner, chicken dinner",
    "Don't break your arm patting your backWinner, winner, chicken dinner",
    "Stop reading yesterdays newsclippingsWinner, winner, chicken dinner",
    "He kicked the bucketWinner, winner, chicken dinner", 
    "Try my hand at itWinner, winner, chicken dinner",
    "If it's yellow; let it mellow, if it's brown; flush it down"
];


function changeTextColor() {
    const randomIndex = Math.floor(Math.random() * textArray.length);
    // creates a variable at a random index from the text array
    const textElement = document.getElementById("cchange");
    // gets the element id 'cchange'
    textElement.style.color = Math.random() < 0.5 ? "green" : "red";
    // assigns it green or red, SHOULD ADD BLACK


    // OTHER FOR MORE BLACK
    // if (Math.random() < 0.3) {
    //     textElement.style.color = "green";
    // } else if (Math.random() < 0.6) {
    //     textElement.style.color = "red";
    // } else {
    //     textElement.style.color = "black";
    //     document.write("Sender:") + document.getElementById("sender");
    // }

    textElement.textContent = textArray[randomIndex];
    // chains first 2, then assigns the random value from textArray.
}

changeTextColor();
// Calls the function