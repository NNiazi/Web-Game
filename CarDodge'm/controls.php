<!--Including my echoAssests file so that i can echo in functions-->
<?php require( 'echoAssets.php');?>
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
</head>
<!--Echoing my mainheader through a php function which, displays logo-->
<?php mainheader(); ?>
<!--Start of body (this will hold the content for contact page)-->
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
                <!--inserting control title image-->
                <div id="controllttl">
                     <p><img alt='ControllTittle' src='images/Controlls.png'></p>
                </div>
                        <!--inserting press image-->
                        <div id="press">
                            <p><img alt='press' src='images/press.png'></p>
                        </div>
                                <!--inserting uparrow image-->
                                <div id="uparrow">
                                    <p><img alt='upkey' src='images/up.png'></p>
                                </div>
                                        <!--inserting accelerate up image-->
                                        <div id="accelerateup">
                                            <p><img alt='acceleratekey' src='images/accelerate.png'></p>
                                        </div>
                                                <!--inserting press1 image-->
                                                <div id="press1">
                                                    <p><img alt='press1' src='images/press.png'></p>
                                                </div>
                                                        <!--inserting down arrow image-->
                                                        <div id="downarrow">
                                                             <p><img alt='downkey' src='images/down.png'></p>
                                                        </div>
                                                            <!--inserting break image-->
                                                            <div id="break">
                                                                <p><img alt='breakkey' src='images/break.png'></p>
                                                            </div>
                                                    <!--inserting press2 image-->
                                                    <div id="press2">
                                                        <p><img alt='press2' src='images/press.png'></p>
                                                    </div>
                                            <!--inserting left arrow image-->
                                            <div id="leftarrow">
                                                 <p><img alt='leftkey' src='images/left.png'></p>
                                            </div>
                                    <!--inserting steer left image-->
                                    <div id="steerleft">
                                        <p><img alt='steerleftkey' src='images/steerleft.png'></p>
                                    </div>
                            <!--inserting press3 image-->
                            <div id="press3">
                                <p><img alt='press3' src='images/press.png'></p>
                            </div>
                    <!--inserting right arrow image-->
                    <div id="rightarrow">
                        <p><img alt='rightkey' src='images/right.png'></p>
                    </div>
             <!--inserting steer right image-->
             <div id="steerright">
                <p><img alt='steerrightkey' src='images/steerright.png'></p>
            </div>
    <!--opening-logincanvas-right--> 
    </div>
        <div class="logincanvas-right">
            <!--Echoing in login input through php fucntion-->
            <?php logininput(); ?>
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
<!--Closing body-->
</body>
</html>





