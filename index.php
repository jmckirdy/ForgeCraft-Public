<?php
    // session_start();

    // if(is_null($_SESSION["username"])) {
    //     header("Location: login.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link to your external CSS files -->
    <link rel="stylesheet" href="css/style.css" />
    
    <!-- <link rel="stylesheet" href="dice/dice.css" /> -->

    <!-- <link rel="stylesheet" href="styleMessage.css"> -->
    <meta charset="UTF-8">
    <title>-😊-ForgeCraft-Welcomes-You-</title>

    <!-- ! DON'T take the emoji out- see scriptOne.js, setInterval() declaration --WILL cause bug in <title> -->

</head>

<body>
    <script src="startMusic.js"></script>
    <audio id="startMusic" src="startMusic.mp3"></audio> 
    <!-- PUT 'LOADING TEXT . .. ...' HERE -->
    <div class="header">

        <div class="scoreContainer">
            $<span id="score">0</span><br>
            $<span id="scorepersecond">0</span> / sec.
            <img src="assets/GerGer.jpg" alt="main-character">
        </div>

        <div class="gameTitle">
            <img src="assets/Group.png" alt="ForgeCraft">
        </div>  

        <div class="floatRight">
            <a href="#">Profile</a><br>
            <a href="#">Achievements</a>
            <div class="musicIcon">
                <img src="assets/music.png" alt="music" width="35px" height="35px" onclick="playMusic()">
            </div>
        </div>
        
    </div>

    <!-- HERE IS WHERE U UPDATE CLICK AMOUNT/$perClick   -->
    <div class="clickerContainer unselectable">
        <div id="clicker" onclick="clickClicker()">
            <img onclick="addToScore(5)" src="assets/forge.png" alt="Forge Clicker">
            <audio id="clickerAudio" src="assets/audio/sword.mp3"></audio>                 
            <script src="clicker.js"></script>
        </div>
    </div>

    <div class="mainWindow">
        <div id="main">
            <?php
            if (!isset($_REQUEST['content']))
                include("main.inc.php");
            else {
                $content = $_REQUEST['content'];
                $nextpage = $content . ".inc.php";
                include($nextpage);
            }
            ?>
        </div>
    </div>

<div class="sectionRight" id="shopContainer">
    <div class="scrollable-section">
        <div class="store-title">Store</div>
        <div class="store">
            <a href="#">
                <div id="image1">
                    <img src="assets/upgrade1.png" alt="upgrade1" class="upgrade">
                </div>
            </a>
            <a href="#">
                <div id="image2">
                    <img src="assets/upgrade2.png" alt="upgrade2" class="upgrade">
                </div>
            </a>
            <a href="#">
                <div id="image3">
                    <img src="assets/upgrade3.png" alt="upgrade3" class="upgrade">
                </div>
            </a>
            <a href="#">
                <div id="image4">
                    <img src="assets/upgrade4.png" alt="upgrade4" class="upgrade">
                </div>
            </a>
            <!-- ETC...   <div id="image3">
                <img src="assets/upgrade3.png" alt="upgrade3" class="upgrade">
            </div>
            <div id="image4">
                <img src="assets/upgrade4.png" alt="upgrade4" class="upgrade">
            </div> -->
        </div>

        <audio id="shopButtonAudio" src="assets/audio/01_bong.ogg"></audio>                 
        <!-- <script src="shopButton.js"></script> -->
        <audio id="shopErrorButtonAudio" src="assets/audio/alien_death1.wav"></audio>                 

<!-- ADD ID darken FOR CSS DARKENING ONCLICK INCLUTION 
        <table class="shopButton unselectable" onclick="buyWater()" id="darken">
-->
        <table class="shopButton unselectable" onclick="buyWater()">
            <tr>
                <!-- TOOLTIP ON-HOVER WINDOW -->
                <td class="tooltip" id="image"><img src="assets/01_water.png">
                    <!-- <div class="tooltiptext">
                            <p>Name: Firepit</p>
                            <hr>
                            <img src="assets/tooltips/pantaloons.jpg" alt="test-icon"> Total Spent: $1,254<br>
                            <img src="assets/tooltips/green_skull.png" alt="test-icon"> Total Yeild: $33,334<br>
                            <hr>
                            <p>Description: Without Fire YOU SHALL SURELY DIE! rub two sticks together. rub-a-dub-dub</p>
                    </div> -->
                </td>

                <td id="nameAndCost">
                    <p>Water</p>

                    Cost:<p><span id="watercost">15</span> $</p>
                </td>
                <td id="amount"><span id="water">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $1/second</td>
            </tr>

        </table>


        <table class="shopButton unselectable" onclick="buyShelter()">
            <tr>
                <!-- TOOLTIP ON-HOVER WINDOW -->
                <td class="tooltip" id="image"><img src="assets/02_shelter.png">
                    <!-- <div class="tooltiptext">
                            <p>Name: Firepit</p>
                            <hr>
                            <img src="assets/tooltips/pantaloons.jpg" alt="test-icon"> Total Spent: $1,254<br>
                            <img src="assets/tooltips/green_skull.png" alt="test-icon"> Total Yeild: $33,334<br>
                            <hr>
                            <p>Description: Without Fire YOU SHALL SURELY DIE! rub two sticks together. rub-a-dub-dub</p>
                    </div> -->
                </td>
                <td id="nameAndCost">
                    <p>Shelter</p>

                    Cost:<p><span id="sheltercost">100</span> $</p>
                </td>
                <td id="amount"><span id="shelter">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $10/second</td>
            </tr>
        </table>

        <table class="shopButton unselectable" onclick="buyWood()">
            <tr>
                <td id="image"><img src="assets/03_wood.png"></td>
                <td id="nameAndCost">
                    <p>Wood</p>

                    Cost:<p><span id="woodcost">500</span> $</p>
                </td>
                <td id="amount"><span id="wood">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $50/second</td>
            </tr>
        </table>

        <table class="shopButton unselectable" onclick="buyFirepit()">
            <tr>
                <td id="image"><img src="assets/04_firepit.png"></td>
                <td id="nameAndCost">
                    <p>Firepit</p>

                    Cost:<p><span id="firepitcost">2500</span> $</p>
                </td>
                <td id="amount"><span id="firepit">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $250/second</td>
            </tr>
        </table>

        <table class="shopButton unselectable" onclick="buyFish()">
            <tr>
                <td id="image"><img src="assets/05_fish.png"></td>
                <td id="nameAndCost">
                    <p>Fishin Hole</p>

                    Cost:<p><span id="fishcost">10,000</span> $</p>
                </td>
                <td id="amount"><span id="fish">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $1000/second</td>
            </tr>
        </table>

        <table class="shopButton unselectable" onclick="buyClay()">
            <tr>
                <td id="image"><img src="assets/06_clay_making.png"></td>
                <td id="nameAndCost">
                    <p>Potter</p>

                    Cost:<p><span id="claycost">50,000</span> $</p>
                </td>
                <td id="amount"><span id="clay">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $5000/second</td>
            </tr>
        </table>

        <table class="shopButton unselectable" onclick="buyCoop()">
            <tr>
                <td id="image"><img src="assets/07_coop.png"></td>
                <td id="nameAndCost">
                    <p>Ptarmigan Coop</p>

                    Cost:<p><span id="coopcost">250,000</span> $</p>
                </td>
                <td id="amount"><span id="coop">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $25,000/second</td>
            </tr>
        </table>
        
        <table class="shopButton unselectable" onclick="buyShop()">
            <tr>
                <td id="image"><img src="assets/08_shop.png"></td>
                <td id="nameAndCost">
                    <p>The Shop</p>

                    Cost:<p><span id="shopcost">1,000,000</span> $</p>
                </td>
                <td id="amount"><span id="shop">0</span></td>
            </tr>
            <tr>
                <td id="yeild">Yeild: $100,000/second</td>
            </tr>
        </table>
        <table>
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </div>
</div>




            
    <div class="sectionBottom">
    <h3 class="skills">Skills</h3>


        <div class="sbContainerLeft">
            Water Sourcing<span id="a" onclick="addSkill('a')">🟥🟥🟥🟥🟥</span> <br>
            Shelter Building<span id="b">🟥🟥🟥🟥🟥</span> <br>
            Wood Cutting<span id="c">🟥🟥🟥🟥🟥</span> <br>
            Fire Making<span id="d">🟥🟥🟥🟥🟥</span><br>

            <!-- <button class="customButton">Custom Button</button> -->
        </div>

        <div class="sbContainerCenter">
            Fishing<span id="e">🟥🟥🟥🟥🟥</span> <br>
            Clay Making<span id="f">🟥🟥🟥🟥🟥</span> <br>
            Husbandry<span id="g">🟥🟥🟥🟥🟥</span> <br>
            Weapon Smithing<span id="h">🟥🟥🟥🟥🟥</span> <br>
        </div>  
        
        <div class="sbContainerRight" id="container">
            <h3>Messages</h3>      
            <div id="message">
    
                <div id="content">
                    <p id="sender">John Wilfred Doe</p>
                    <div id="cchange"></div>
                </div>
            </div>
        </div>

        <div>
            <div class="dice">
                <img id="dice" src="dice/dice_1.png" alt="Dice" onclick="rollDice()">
                <audio id="diceAudio" src="dice/dice_roll.ogg"></audio>                 
                <script src="dice.js"></script>
            </div>
        </div>

    </div>




    <script src="scriptOne.js"></script>
    <script src="scriptMessageApp.js"></script>
</body>

</html>

