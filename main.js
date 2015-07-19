window.onload = function() {
	document.getElementById("pass").onchange = verify;
	document.getElementById("pass2").onchange = verify;
}

function verify() {
	var content = document.getElementById("pass").value;
	var content2 = document.getElementById("pass2").value;
	if(content !=  content2) {
		document.getElementById("Error").style.visibility  = "visible";
	} else {
		document.getElementById("Error").style.visibility  = "hidden";
	}
}
