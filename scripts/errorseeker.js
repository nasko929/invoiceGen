var currPassField = document.getElementById("pass");
var currPassField2 = document.getElementById("confpass");
console.log(currPassField);
function ErrorSeeker()
{
	setInterval(function(){
	var f = document.getElementById("pass");
	document.getElementById("ErrorSeeker").innerHTML = 
	(f.value.length>7 ? "" : "Your pass must be at least 8 characters long.");
	}, 500);
}
function ErrorSeeker2()
{
	setInterval(function(){
	var f = document.getElementById("confpass");
	if(f.value == document.getElementById("pass").value)
	{
		document.getElementById("ErrorSeeker2").style.color = "green";
		document.getElementById("ErrorSeeker2").innerHTML = "Passwords match."; 
	}
	else
	{
		document.getElementById("ErrorSeeker2").style.color = "red";
		document.getElementById("ErrorSeeker2").innerHTML = "Passwords don't match."; 
	}
	}, 500);
}

currPassField.addEventListener("load",ErrorSeeker());
currPassField2.addEventListener("load",ErrorSeeker2());
