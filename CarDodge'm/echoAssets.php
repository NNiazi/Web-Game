<?php

//Creating Header
function mainheader() {
    $header = "
    <div class='container'>
    <a href=''><img src='images/logocar.gif' height='160' width='270'></a>
    <a href=''><img src='images/logotext1.png' height='60' width='800'></a>
    </div>";

    echo $header;
}

//Creating Main Navigation Bar
function navbar() {
    $navigationbar = "
    <div id='navigationbar'>
    <ul>
    <li><a href='index.php'>Play</a></li>
    <li><a href='Leaderboard.php'>LeaderBoard</a></li>
    <li><a href='controls.php'>Controls</a></li>
    <li><a href='contact.php'>Contact</a></li>
    </ul>
    </div>";

    echo $navigationbar;
}

//Creating Register Navigation bar
function registernav() {
    $registerNavbar = "
    <div id='registerNavbar'>
    <ul>
    <li><a href=''>Register</a></li>
    </ul>
    </div>";

    echo $registerNavbar;
}



//Creating user register
function registerinput() {
    $registerdetail = "
    <div id='registeruser' 
    <form onsubmit = 'return false'>
    <input type='text' id='name' maxlength='10' placeholder='Name...'>
    <input type='text' id='surname' maxlength='10' placeholder='Surname...'>
    <input type='text' id='username' maxlength='' placeholder='Username...'>
    <input type='email' id='email' placeholder='Email...'>
    <input type='text' id='phoneNumber' placeholder='Phone Number...'>
    <input type='password' id='passwordR'  placeholder='Password...'>
    <input type='password' id='passwordReg_Confirm' placeholder='Confirm Password...'>  
    <button class='btn-register' onclick='storeUser()'>Submit</button> 
    </form>
    </div>";

    echo $registerdetail;
}

//Creating login section for users to enter login credentials
function logininput() {
    $login = "
    <div id='loginPara'>
    <form id='login' onsubmit = 'return false'>
    <input type='text' id='userName' placeholder='Username ... ' />
    <input type='password' id='passwordLog' placeholder='Password ...' />
    <button type='submit' class='btn-login' onclick='login()'>Login</button> 
    </form>
    </div>";
    echo $login;
}

//Creating Social Media navigation bar 
function socialnavbar() {
    $socialMediaLinknav = "
    <div id='socialMediaLinknav'>
    <ul>
    <li><a href=''>Social</a></li>
    </ul>
    </div>";

    echo $socialMediaLinknav;
}

//Adding in Social images with links in a veticle row; placed centered. 
function socialimg() {
    $socialImages = "
    <div id='socialimages'>
    <p><a href='https://www.instagram.com/cardodgem/'><img alt='Instagram' class='top' height='80' src='images/insta.png'  width='80'></p>
    <img hspace='100px;'>
    <p><a href='https://twitter.com/Car_Dodgem?lang=en-gb'><img alt='Twitter' class='top' height='80' src='images/twitter.png' width='80'></p>
    <img hspace='100px;'>
    <p><img alt='Snapchat' class='bottom' height='90' src='images/snap.png' width='100'></p>
    <img hspace='110px;'>
    <p><a href='https://www.facebook.com/car.dodgem.7'><img alt='Facebook' class='bottom' height='80' src='images/face.png' width='80'></p>
    <img hspace='100px;'>
    </div>";

    echo $socialImages;
}

//Creating footer that includes links to different pages and also Author name and rights to website.
function mainfooter() {
    $footer = "
    <div id='footer'>
    <ul>
    <li><a href='index.php'>Play</a></li>
    <li><a href='register.php'>Register</a></li>
    <li><a href='leaderboard.php'>LeaderBoard</a></li>
    <li><a href='controls.php'>Controls</a></li>
    <li><a href='contact.php'>Contact</a></li>
    </ul>
    <p> 2017 Noman Niazi All Rights Reserved</p>
    </div>";
    
    echo $footer;
}

?>
