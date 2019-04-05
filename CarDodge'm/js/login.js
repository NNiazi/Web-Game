

function loginChecker(){
	if(localStorage.loggedInUserName !== undefined) {
		//Extract details of logged in user
		var userObj = JSON.parse(localStorage[localStorage.loggedInUserName]);

		//Display message for logged in user
		document.getElementById("loginPara").innerHTML = userObj.userName + " Successful login.";
	}
}
function login(){
	//Get username
	var Username = document.getElementById("userName").value;

	//If user does not have an account
	if(localStorage[Username] === undefined) {
		//tell user they do not have an account
		document.getElementById("loginFailure").innerHTML = "Invalide Username. Do you have an account?";
		return; //Else do nothing
	}
	else{//if user has an account
         var userObj = JSON.parse(localStorage[Username]);//Convert tp object
         var password = document.getElementById("passwordR").value;
         if(password === userObj.password){//if successful login
         	document.getElementById("loginPara").innerHTML = userObj.userName + " logged in.";
         	document.getElementById("loginFailure").innerHTML = "";//Clear any login failures
         	localStorage.loggedInUserName = userObj.userName;
         }
         else{
         	document.getElementById("loginFailure").innerHTML = "Incorrect password. Please try again"
         }
     }
 }