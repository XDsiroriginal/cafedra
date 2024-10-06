let user;
function log() {
	let log = document.getElementById('log_inp').value;
	let pass = document.getElementById('pass_inp').value;
	console.log(log);
	console.log(pass);
	if (log == "admin") {
		if (pass == "root") {
			user = "admin";
			document.getElementById('log_div').style.display = "none";
			document.getElementById("header_shop").style.display = "flex";
			document.getElementById("body_shop").style.display = "flex";
			document.getElementById("user_name").innerHTML = "Админ";
		}
		else {
			alert("Неверынй логи или пороль");
		}
	}
	else if (log == "vipuser") {
		if (pass == "zxcclown") {
			user = "vipuser";
			document.getElementById('log_div').style.display = "none";
			document.getElementById("header_shop").style.display = "flex";
			document.getElementById("body_shop").style.display = "flex";
			document.getElementById("user_name").innerHTML = "Вип юзер";
		}
		else {
			alert("Неверынй логи или пороль");
		}
	}
	else {
		alert("Неверынй логи или пороль");
	}
}

function adress_reg() {
	console.log(document.getElementById('log_div').style.display);
	document.getElementById('log_div').style.display = "flex";
	document.getElementById("header_shop").style.display = "none";
	document.getElementById("body_shop").style.display = "none";
}	