// JavaScript Document
function checkInput(eleId, imgId) {	
	var login = document.getElementById(eleId);
    var img = document.getElementById(imgId);
	if (login.value !== "") {
        img.src = "images/tick.png";
        img.alt = "tick";
    }
    else {
        img.src = "images/cross.png";
        img.alt = "cross";
    }
}

function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
		document.mainForm.emailTick.src = "images/tick.png";
        document.mainForm.emailTick.alt = "tick";
return true;
}
else
{
		document.mainForm.emailTick.src = "images/cross.png";
        document.mainForm.emailTick.alt = "cross";
		
return false;
}
}