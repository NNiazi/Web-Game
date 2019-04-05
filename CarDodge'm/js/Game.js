//Trigger the draw event when the window is loaded so that we can see the starting state of the game
window.onload = draw;
 //Play music 
 //Listen for key events so that we can control the spaceship
 //window.onkeydown = handleKeyEvent;
 var score = 0;
 var scoreInterval = 1;
 //This will move the enemyCars and redraw the canvas every 100ms
 //setInterval(moveEnemyCars, scoreInterval, checkCollision);
 //Location of the spaceship
 var playerCarXPos = 117.5;
 var playerCarYPos = 115;
 //Size of the canvas
 var canvasWidth = 500;
 var canvasHeight = 500;
 //How fast the enemyCars move
 var enemyCarSpeed = 1;
 //How fast the spaceship moves
 var playerCarSpeed = 1;
 var imgY = 0;
 //Global variables pointing to the canvas and context
 var canvas = document.getElementById("roadCage");
 var ctx = canvas.getContext("2d");
 //Create enemyCarImg image
 var enemyCarImg = new Image(30, 30);
 enemyCarImg.src = "images/p1.png";
 var playerCarWidth = 33;
 var playerCarHeight = 33;
 var enemyCarWidth = 33;
 var enemyCarHeight = 33;
 //Create an array holding all of the enemyCars
 var ticks = 0;
 var enemyCars = new Array();
 enemyCars[0] = "images/p1.png";
 enemyCars[1] = "images/p2.png";
 //pedCar2
 var pedCarImg2 = new Image(30, 30);
 pedCarImg2.src = "images/p2.png";
 //Set up the spaceship image ready to draw
 var playerCarImg = new Image(30, 30);
 playerCarImg.src = "images/ajayCar2.png";
 //Background image setup before draw
 var backgroundImage = new Image();
 backgroundImage.src = "images/roadAnim.png";
 //Left and Right key variables.
 var pauseKey = false;
 var startKey = false;
 var upKey = false;
 var downKey = false;
 var leftKey = false;
 var rightKey = false;
 var score = 0;
 ////// Arrow keys //////
 function move() {
    if (pauseKey) {
        stopGame();
    }
    if (startKey) {
     draw;
 }
 if (upKey) {
    playerCarYPos -= enemyCarSpeed;
}
if (downKey) {
    playerCarYPos += enemyCarSpeed;
}
if (leftKey) {
    playerCarXPos -= enemyCarSpeed;
}
if (rightKey) {
    playerCarXPos += playerCarSpeed;
}
draw();
}
document.onkeydown = function(e) {
    if (e.keyCode == 80) pauseKey = true;
    if (e.keyCode == 79) startKey = true;
    if (e.keyCode == 87) upKey = true;
    if (e.keyCode == 83) downKey = true;
    if (e.keyCode == 65) leftKey = true;
    if (e.keyCode == 68) rightKey = true;
}
document.onkeyup = function(e) {
    if (e.keyCode == 80) pauseKey = true;
    if (e.keyCode == 79) startKey = true;
    if (e.keyCode == 87) upKey = false;
    if (e.keyCode == 83) downKey = false;
    if (e.keyCode == 65) leftKey = false;
    if (e.keyCode == 68) rightKey = false;
}
 //Draws everything on the canvas
 function draw() {
    //Draw background
    ctx.drawImage(backgroundImage, 0, ++imgY - 137, 300, 150);
    ctx.drawImage(backgroundImage, 0, imgY, 300, 150);
    imgY = imgY % 140;
    //Draw spaceship
    ctx.drawImage(playerCarImg, playerCarXPos, playerCarYPos, playerCarWidth, playerCarHeight);
    //Draw asteroid
    drawEnemyCars();
    ticks++
    if (ticks % 135 /* this is the inverval - 3 seconds now, I believe */ === 0) {
        enemyCars.push({
            xPos: Math.floor(Math.random() * 250),
            yPos: -25
        });
    }
    score += scoreInterval;
    ctx.fillText("Score: " + score, 10, 13);
    ctx.fillStyle = "#00FF00";
}
 //Draws the pedcars on the canvas
 function drawEnemyCars() {
    //Work through the enemyCars array
    for (var i = 0; i < enemyCars.length; ++i) {
        //Draw each asteroid at its position
        var tmpAst = enemyCars[i];
        ctx.fillStyle = "#00ff00";
        ctx.drawImage(enemyCarImg, tmpAst.xPos, tmpAst.yPos, 33, 33);
    }
}
 //Moves the pedcars down the canvas
 function moveEnemyCars() {
    for (var i = 0; i < enemyCars.length; ++i) {
        var tmpAst = enemyCars[i];
        tmpAst.yPos += enemyCarSpeed;
    }
    //Redraw canvas after enemyCars have been moved
    draw();
}
 //setInterval (update, 40);
 function update() {
    draw();
    drawEnemyCars();
    move();
    moveEnemyCars();
    //check collisions
    checkCollision();
    //handleKeyEvent();
}
var myGame = setInterval(update, 15);

function checkCollision() {
    for (var i = 0; i < enemyCars.length; ++i) {
        var tmpCar = enemyCars[i];
        //Top left corner
        if ((playerCarXPos >= tmpCar.xPos && playerCarXPos <= tmpCar.xPos + enemyCarWidth) && (
            playerCarYPos >= tmpCar.yPos && playerCarYPos <= tmpCar.yPos + enemyCarHeight)) {
            //Just to make sure that the collision detection is working
        console.log("COLLISION DETECTED");
        stopGame();
    }
}
}

function saveUserScore() {
    if(localStorage.loggedInUserName !== undefined) {
        //Extract details of logged in user
        var userObj = JSON.parse(localStorage[localStorage.loggedInUserName]);

        if (userObj["userScore"] < score){
            userObj["userScore"] = score;
            localStorage[localStorage.loggedInUserName] = JSON.stringify(userObj);
        }
    }
}

 //myGame();
 function stopGame() {
    saveUserScore()
    //window.location.href = "gameOver.php";
    ctx.font="19px Arial";
    //Colour of text.
    ctx.fillStyle = "#00FF00";
    //When game is stopped; "Game Over will be printed onto the screen to show user of end state".
    ctx.fillText("Game Over", 102, 60);
    //Show on screen the user score at the end of the game when game is over. 
    ctx.fillText("Final Score: " + score, 84, 80)
    //Clearing myGame.
    clearInterval(myGame);
}