    <!--Including my echoAssests file so that i can echo in functions-->
    <?php require('echoAssets.php'); ?>
    <!--Creating the type of document-->
    <!DOCTYPE html>
    <html>
    <!--Creating a header-->
    <head>
        <!--Name of tabe-->
        <title>CAR DODGE'M!</title>
        <!--Refrenceing my css styles though href-->
        <link href="style.css" rel="stylesheet" type="text/css">
        <!--including my javascript for login and register verification-->
        <script type="text/javascript" language="javascript" src="js/login.js"></script>
        <script type="text/javascript" language="javascript" src="js/register.js"></script>
        <!--End of my header-->
    </head> 
    <!--Echoing my mainheader through a php function which, displays logo-->
    <?php mainheader(); ?>
    <!--Start of body (main section of webpage)-->
    <body  onload="loginChecker()">
        <!--Echoing in my navigation bar through php function-->
        <?php navbar(); ?>
        <!--Echoing my register navigation bar through php function-->
        <?php registernav(); ?>
        <!--Echoing my socialmedia navigation bar though php function-->
        <?php socialnavbar(); ?>
        <!--Opening-RoadCageBoarder-->
        <div id="roadCageBoarder">
            <div id="startGameWelcome"></div>
            <!--inserting control title image-->
            <div id="welcomeImgMsg">
               <p><img alt='welcome' src='images/welcomeImg.png'></p>
           </div>
           <div id="pressStartImgMsg">
            <p><img alt='welcome' src='images/pressStartImg.png'></p>
        </div>
        <div id="startImgButton">
            <a href="start.php">
                <img border="0" alt="start" src="images/startGame.png" align="middle">
            </a>
        </div>
        <!--<button type="button" id="startBtn" onclick="initialize()">START</button>-->
        <!--<script src='cargame.js'></script>-->
        <!--opening-logincanvas-->
        <div class="logincanvas-right">
            <!--Echoing in login input through php fucntion-->
            <?php logininput(); ?>
            <p id="loginFailure"></p>
            <!--Echoing in register input through php fucntion-->
            <?php registerinput(); ?>
            <p id="result"></p>
            <!--Closing-Loginincanvas-right-->
        </div>
        <!--Opening-SocialMediaLinks-->
        <div class="socialMediaLinks">
            <!--Echoing in social media images with links through php fucntion-->
            <?php socialimg(); ?>
            <!--Clossing-SocialMediaLinks-->
        </div>
        <!--Clossing-SnakeCageBoarder-->
    </div>
    <!--Echoing in footer through php fucntion-->
    <?php mainfooter(); ?>
    <!--closing body-->
</body>
</html>