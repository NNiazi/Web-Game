<!--Including my echoAssests file so that i can echo in functions-->
<?php include( 'echoAssets.php'); ?>
<!--Creating the type of document-->
<!DOCTYPE html>
<html>
<!--Creating a header-->
<head>
    <!--Name of tabe-->
    <title>CAR DODGE'M!</title>
    <!--Refrenceing my css styles though href-->
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--End of my header-->
    <!--<script type="text/javascript" src="js/scoreboard.js"></script>-->
</head>
<!--Echoing my mainheader through a php function which, displays logo-->
<?php mainheader(); ?>
<!--Start of body (main section of webpage)-->
<body>
    <!--Echoing in my navigation bar through php function-->
    <?php navbar(); ?>
    <!--Echoing my register navigation bar through php function-->
    <?php registernav(); ?>
    <!--Echoing my socialmedia navigation bar though php function-->
    <?php socialnavbar(); ?>
    <!--Opening-RoadCageBoarder-->
    <div id="roadCageBoarder">
        <div id="contentBoarder">
            <div id="leaderboardttl">
                <p><img alt='LeaderBoardTittle' src='images/LeaderBoard.png'></p>             
            </div>
        </div>
<!--opening-logincanvas-->
<div class="logincanvas-right">
    <p id="loginPara"></p>
    <!--Echoing in login input through php fucntion-->
    <!--<?php /*logininput();*/ ?>-->
    <!--Closing-Loginincanvas-right-->
</div>
<!--Opening-SocialMediaLinks-->
<div class="socialMediaLinks">
    <!--Echoing in social media images with links through php fucntion-->
    <?php socialimg(); ?>
    <!--Clossing-SocialMediaLinks-->
</div>
</div>
<!--Echoing in footer through php fucntion-->
<?php mainfooter(); ?>
<!--closing body-->
</body>
</html>
