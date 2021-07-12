function checkPasswords(){
	if(document.getElementById("p1").value != document.getElementById("p2").value){
		alert("Passwords are mismatched!");
		return false;
	}
	else{
		alert("Passwords matched Welcome!");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("cb1").checked){
		document.getElementById("buttonS").disabled = false;
	}
	else{
		document.getElementById("buttonS").disabled = true;
	}
}
