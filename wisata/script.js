function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "anis" && password === "123") {
        window.location.href = "planning.html";
    } else {
        alert("Invalid username or password");
    }
}

function logout() {
    window.location.href = "planning.html";
}
