function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "anis" && password === "123") {
        window.location.href = "/";
    } else {
        alert("Invalid username or password");
    }
}

function logout() {
    window.location.href = "/";
}

const planning = ["Museum", "Airport", "Monumen"];
let listHTML = "Planning Rekomendasi :";

for (let i = 0; i < planning.length; i++) {
    listHTML += `<li><a href="${planning[i].toLowerCase()}.html">${planning[i]}</a></li>`;
}

document.getElementById("planning-jkt").innerHTML = listHTML;
