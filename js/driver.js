function passwords(){
	if(document.getElementById("password1").value != document.getElementById("password2").value){
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
		document.getElementById("submitB").disabled = false;
	}
	else{
		document.getElementById("submitB").disabled = true;
	}
}
