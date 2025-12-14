// ===============================
// LOGIN STATE
// ===============================

function isLoggedIn() {
    return localStorage.getItem("loggedIn") === "true";
}

// ===============================
// BUY BUTTON (INDEX)
// ===============================

const buyButton = document.getElementById("buy-button");

if (buyButton) {
    buyButton.addEventListener("click", () => {
        if (isLoggedIn()) {
            window.location.href = "thankyou.html";
        } else {
            window.location.href = "login.html";
        }
    });
}

// ===============================
// LOGIN FORM (LOGIN PAGE ONLY)
// ===============================

const loginForm = document.getElementById("login-form");

if (loginForm) {
    loginForm.addEventListener("submit", (event) => {
    event.preventDefault(); // evita action

    localStorage.setItem("loggedIn", "true");

    window.location.href = "index.html"; // o donde quieras
});
``
}
