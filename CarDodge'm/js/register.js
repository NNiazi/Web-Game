

function storeUser(){

	//console.log("hello");
    //Buid object that we are going to store
    var userObject = {};
    userObject.name = document.getElementById("name").value;
    userObject.surname = document.getElementById("surname").value;
    userObject.userName = document.getElementById("username").value;
    userObject.email = document.getElementById("email").value;
    userObject.phoneN = document.getElementById('phoneNumber').value;
    userObject.password = document.getElementById("passwordR").value;
    userObject.passwordConfirm = document.getElementById("passwordReg_Confirm").value;
    userObject.userScore = 0;


    if(userObject.name == ""){
        alert ("Please provide your name!");
        userObject.name.focus();
        document.getElementById("result1").innerHTML="Please provide your name!";
        return;
    }

    if(userObject.surname == ""){
        alert ("Please provide your surname");
        userObject.surname.focus();
        document.getElementById("resutl1").innerHTML="Please provide your surname!";
        return;
    }

    if(userObject.userName == ""){
        alert ("You must enter a username!");
        userObject.userName.focus();
        document.getElementById("result1").innerHTML="You must enter a username!";
        return;
    }

    if(userObject.password = ""){
        alert ("You must enter a password!");
        userObject.password.focus();
        document.getElementById("result1").innerHTML="You must enter a password";
        return;
    }

    if(userObject.email == ""){
        alert ("You must provide a email!");
        userObject.email.focus();
        document.getElementById("result1").innerHTML="You must provide a email!";
        return;
    }

    if (userObject.phoneN == ""){
        alerr ("You must provide your phone number!");
        userObject.phoneN.focus();
        document.getElementById("result1").innerHTML="You must provide your phone number!";
        return;
    }

    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(userObject.email)){   
        alert("Enter valid email!");
        userObject.email.focus();
        document.getElementById("result1").innerHTML="Enter valid email!";
        return ;
    }
    

    //Store users
    localStorage[userObject.userName] = JSON.stringify(userObject);

    //alert("Regsteration Completed!");
    // //Inform users of result
    document.getElementById("result").innerHTML = "<b>You have registered!</b>";
}

