// login state
// check if the user is logged in
function isLoggedIn() {
    // returns true if localStorage has loggedIn set to true
    return localStorage.getItem("loggedIn") === "true";
}

// buy button on index page
// handle click on buy button
const buyButton = document.getElementById("buy-button");

if (buyButton) {
    buyButton.addEventListener("click", () => {
        if (isLoggedIn()) {
            // if user already logged in, go to thank you page
            window.location.href = "thankyou.html";
        } else {
            // if not logged in, redirect to login page
            window.location.href = "login.html";
        }
    });
}

// login form on login page
// handle form submission
const loginForm = document.getElementById("login-form");

if (loginForm) {
    loginForm.addEventListener("submit", (event) => {
        event.preventDefault(); // prevent default form action

        // save logged in state
        localStorage.setItem("loggedIn", "true");

        // redirect user to home page after login
        window.location.href = "index.html";
    });
}

// optional logout function
// reset logged in state if needed
function logout() {
    localStorage.removeItem("loggedIn");
    window.location.href = "index.html";
}
