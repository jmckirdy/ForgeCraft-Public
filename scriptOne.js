// GAME-CHEAT - adjust score higher for testing and building
let score = 0;
let scorepersecond = 0;

let waterCost = 15;
let water = 0;

let shelterCost = 100;
let shelter = 0;

let woodCost = 500;
let wood = 0;

let firepitCost = 2500;
let firepit = 0;

let fishCost = 10000;
let fish = 0;

let clayCost = 50000;
let clay = 0;

let coopCost = 250000;
let coop = 0;

let shopCost = 1000000;
let shop = 0;





/* ///////////////// 
The `waterCost =...` line is a setting where u tweak the number based on how hard u want the building. 
!! Don't tweak (int values) if possible, since u would also have to in `updateScorePerSecond()`, `setInterval()` 
///////////////// */

function buyWater() {
    if (score >= waterCost) {
        score = score - waterCost;
        water++;
        waterCost = Math.round(waterCost * 1.15);

        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Water");

        document.getElementById("score").innerHTML = score;
        document.getElementById("water").innerHTML = water;
        document.getElementById("watercost").innerHTML = waterCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy Water");
    }
}

function buyShelter() {
    if (score >= shelterCost) {
        score = score - shelterCost;
        shelter++;
        shelterCost = Math.round(shelterCost * 1.15);

        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Shelter");

        document.getElementById("score").innerHTML = score;
        document.getElementById("shelter").innerHTML = shelter;
        document.getElementById("sheltercost").innerHTML = shelterCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy Shelter");
    }
}

function buyWood() {
    if (score >= woodCost) {
        score = score - woodCost;
        wood++;
        woodCost = Math.round(woodCost * 1.15);

        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Wood---Hey there!!!!!");

        document.getElementById("score").innerHTML = score;
        document.getElementById("wood").innerHTML = wood;
        document.getElementById("woodcost").innerHTML = woodCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy Wood");
    }
}

function buyFirepit() {
    if (score >= firepitCost) {
        score = score - firepitCost;
        firepit++;
        firepitCost = Math.round(firepitCost * 1.15);

        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Firepit");

        document.getElementById("score").innerHTML = score;
        document.getElementById("firepit").innerHTML = firepit;
        document.getElementById("firepitcost").innerHTML = firepitCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy Firepit");
    }
}

function buyFish() {
    if (score >= fishCost) {
        score = score - fishCost;
        fish++;
        fishCost = Math.round(fishCost * 1.15);
        
        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Fishin Hole");

        document.getElementById("score").innerHTML = score;
        document.getElementById("fish").innerHTML = fish;
        document.getElementById("fishcost").innerHTML = fishCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy Fishin Hole");
    }
}

function buyClay() {
    if (score >= clayCost) {
        score = score - clayCost;
        clay++;
        clayCost = Math.round(clayCost * 1.15);
                
        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Potter");

        document.getElementById("score").innerHTML = score;
        document.getElementById("clay").innerHTML = clay;
        document.getElementById("claycost").innerHTML = clayCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy Potter");
    }
}

function buyCoop() {
    if (score >= coopCost) {
        score = score - coopCost;
        coop++;
        coopCost = Math.round(coopCost * 1.15);

        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Ptarmigan Coop");

        document.getElementById("score").innerHTML = score;
        document.getElementById("coop").innerHTML = coop;
        document.getElementById("coopcost").innerHTML = coopCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy Ptarmigan Coop");
    }
}

function buyShop() {
    if (score >= shopCost) {
        score = score - shopCost;
        shop++;
        shopCost = Math.round(shopCost * 1.15);
        
        // Create sound variable
        const audioElement = document.getElementById("shopButtonAudio");
        // Reset sound if still playing
        audioElement.currentTime = 0;
        // Play sound
        audioElement.play();
        console.log("You bought xNum Shop");

        document.getElementById("score").innerHTML = score;
        document.getElementById("shop").innerHTML = shop;
        document.getElementById("shopcost").innerHTML = shopCost;
        updateScorePerSecond();
    } else {
        const audioElement = document.getElementById("shopErrorButtonAudio");
        audioElement.currentTime = 0;
        audioElement.play();
        console.log("Not enough forgecoins to buy The Shop");
    }
}





// // ADD TO SCORE HERE
// function addToScore(amount) {
//     score = score + amount;
//     scoreFormatted = addCommaToNumber(score);
//     document.getElementById("score").innerHTML = scoreFormatted;
// }





// TUNE HERE!!!
// When u create add(Fish, Clay, etc) function, u must check addToScore(), updateScoreP(), setInterval functions too.
function updateScorePerSecond() {
    scorepersecond = water + shelter * 10 + wood * 50 + firepit * 250 + fish * 1000 + clay * 5000 + coop * 25000 + shop * 100000;
    let formattedsps = addCommaToNumber(scorepersecond);
    document.getElementById("scorepersecond").innerHTML = formattedsps;
    return formattedsps;
}





// ------------------Not sure if actively working. so check isolated first , test it.


// CHATGPT -Needs nested funt. controls '* 5' part independently for the superPower of increasing clickValue! 
function addToScore(amount) {

    // Multiply the amount by 5 before adding it to the score
    score = score + (amount * 5); //Old GPT
    // score = incrementClicks(3, 1);

    scoreFormatted = addCommaToNumber(score);
    document.getElementById("score").innerHTML = scoreFormatted;
  }




// a lot of gpt here... 
function addCommaToNumber(number) {
    if (number < 1000000) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    } else {
        const units = [
            { limit: 1e6, symbol: 'M' },
            { limit: 1e9, symbol: 'B' },
            { limit: 1e12, symbol: 'T' },
            { limit: 1e15, symbol: 'Quad' },
            { limit: 1e18, symbol: 'Quin' },
            { limit: 1e21, symbol: 'Sex' },
            { limit: 1e24, symbol: 'Sept' },
            { limit: 1e27, symbol: 'Oct' },
            { limit: 1e30, symbol: 'Non' },
            { limit: 1e33, symbol: 'Dec' }
        ];

        for (let i = units.length - 1; i >= 0; i--) {
            if (number >= units[i].limit) {
                let value = (number / units[i].limit).toFixed(3);
                value = value.replace(/\.0+$/, '').replace(/(\.\d*[1-9])0+$/, '$1');
                return value + units[i].symbol;
            }
        }
    }
    return number.toString(); // Fallback in case the number doesn't match any unit
}

// Tests
// console.log(addCommaToNumber(1234567)); // Output: "1.23M"
// console.log(addCommaToNumber(1234567890123)); // Output: "1.23T"
// console.log(addCommaToNumber(1234567890123456)); // Output: "1.23Quad"
// console.log(addCommaToNumber(1234567890123456789012)); // Output: "1.23SEX"
// console.log(addCommaToNumber(12345)); // Output: "12,345"




// Increaser for clicks --Not Good but works given 2 args, only 2nd multiplies by amount, it's invoked in addToScore() block
function incrementClicks(stage, amount) {
    stage = 0;
    if (stage > 0) {
        score = score + (amount * 5);
    } else if (stage > 1) {
        score = score + (amount * 50);
    }  else if (stage > 2) {
        score = score + (amount * 2500);
    } else {
        return score;
    }
    return score;
}
// Needs `stage` vari declared somewhere in code; its the var containing whether building is at Lv.0,1,2,3,4,or5. (20,40,)





// ! Important function. Updates the 'title' tab of chrome, has 'score' id
// adjust lower to tune the game for a/b testing and deployment
setInterval(function() {
    score = score + water;
    score = score + shelter * 10;
    score = score + wood * 50;
    score = score + firepit * 250;
    score = score + fish * 1000;
    score = score + clay * 5000;
    score = score + coop * 25000;
    score = score + shop * 100000;

    scoreFormatted = addCommaToNumber(score);

    document.getElementById("score").innerHTML = scoreFormatted;
    document.title = "$" + scoreFormatted + "🔥-ForgeCraft-⚒️";
}, 100);  // runs 10x per second, NOW IT GETS 10 PER SEC.





// LevelUp function: levels ur building from 1-5, updates the gif, the skills bar
function levelUp(skill) {
    // Check if water count is a multiple of 20
    if (water % 20 === 0) {
        // Calculate how many emojis to display
        const emojiCount = water / 20;

        // Update the innerHTML with the appropriate number of emojis
        document.getElementById(skill).innerHTML = "🟩".repeat(emojiCount);
    }
}

// Function that compares if Player{} money is >= BuildingCose, then un-darken the gradient over store button

// Function that runs the game timer, tutorial timer, and any other linear like messages that will fire off throughout the game.