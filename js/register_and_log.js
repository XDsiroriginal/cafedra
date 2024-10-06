let user;
function log() {
	let log = document.getElementById('log_inp').value;
	let pass = document.getElementById('pass_inp').value;
	console.log(log);
	console.log(pass);
	if (log == "admin") {
		if (pass == "root") {
			user = "admin";
			document.location="index.html";
		}
		else {
			alert("Неверынй логи или пороль");
		}
	}
	else {
		alert("Неверынй логи или пороль");
	}
}