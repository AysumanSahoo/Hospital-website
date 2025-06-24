//Admin login form js//
let user = "capitalhospital@123";
let passwords = "23456874";
function login() {

    let userName = document.getElementById("user").value;
    let password = document.getElementById("passwords").value;

    if (userName === user && password === passwords) {


        window.location.href = "dashboard.php";
        alert("Admin login successfully")
    }
    else if (userName === "" && password === "") {
        alert("Please enter correct username and password...")
    }
}
