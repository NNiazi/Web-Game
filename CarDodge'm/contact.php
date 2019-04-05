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
                <!--inserting contact use title image-->
                <div id="contactusttl">
                    <p><img alt='ContactTittle' src='images/ContactUs.png'></p>
                </div>
                        <!--inserting email address image-->
                        <div id="emailttl">
                            <p><img alt='emailTittle' src='images/Emailadr.png'></p>
                        </div>
                                <!--inserting phone number image-->
                                <div id="phonettl">
                                    <p><img alt='phoneTittle' src='images/Phoneno.png'></p>
                                </div>
                                    <!--inserting address section 1 image-->
                                    <div id="address1">
                                        <p><img alt='A1' src='images/Address1.png'></p>
                                    </div>
                                <!--inserting address section 2 image-->
                                <div id="address2">
                                    <p><img alt='A2' src='images/Address2.png'></p>
                                </div>
                        <!--inserting address section 3 image-->
                        <div id="address3">
                            <p><img alt='A3' src='images/Address3.png'></p>
                        </div>
                <!--inserting address section 4 image-->
                <div id="address4">
                     <p><img alt='A4' src='images/Address4.png'></p>
                </div>
            <!--clossing contentBoarder-->
            </div> 
        <!--opening-logincanvas-right-->       
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
