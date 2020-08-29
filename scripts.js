function loginButtonClicked() {
    var login_id = document.forms["login"]["login_id"].value;
    var login_password = document.forms["login"]["login_password"].value;

    if(login_id == "arabind" && login_password == "1234") {
        document.getElementById("login_validation").innerHTML = "Access Granted";
    } else {
        document.getElementById("login_validation").innerHTML = "Access Denied";
    }
}

function registerButtonClicked() {
    var register_id = document.forms["register"]["register_id"].value;
    var register_password = document.forms["register"]["register_password"].value;
    var token = document.forms["register"]["token"].value;

    if(token == "qwerty") {
        document.getElementById("registration_validation").innerHTML = "Registration Success";
    } else {
        document.getElementById("registration_validation").innerHTML = "Registration Failed";
    }
}

function submitButtonClicked() {
    alert("Hello")
}