const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = [...document.querySelectorAll(".step p")];
const progressCheck = [...document.querySelectorAll(".step .check")];
const bullet = [...document.querySelectorAll(".step .bullet")];
var errorText = document.querySelector(".error");
let max = 4;
let current = 1;

nextBtnFirst.addEventListener("click", function() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("page");
    y = x[0].getElementsByTagName("input");

    // Validation for First Name and Last Name
    var firstName = y[0].value.trim();
    var lastName = y[1].value.trim();

    if (firstName.length < 4 || lastName.length < 4) {
        if (firstName.length < 4) {
            y[0].classList.add("invalid");
            y[0].setAttribute("placeholder", "First Name (min 4 letters)");
            y[0].value = ""; // Clear the input value
        }
        if (lastName.length < 4) {
            y[1].classList.add("invalid");
            y[1].setAttribute("placeholder", "Last Name (min 4 letters)");
            y[1].value = ""; // Clear the input value
        }
        errorText.style.visibility = "visible"; // Show the error message
        setTimeout(function() {
            errorText.style.visibility = "hidden";
        }, 3000);
        valid = false;
    }

    if (valid) {
        // Proceed to the next step
        slidePage.style.marginLeft = "-25%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    }
});
nextBtnSec.addEventListener("click", function() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("page");
    y = x[1].getElementsByTagName("input");
    var errorText = document.querySelector(".error"); // Select the error message element

    if (!errorText) {
        console.error("Error message element not found.");
        return; // Exit the function early if the error message element is not found
    }

    // Validation for Email
    var email = y[0].value.trim();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validation for Phone Number
    var phoneNumber = y[1].value.trim();
    var phoneRegex = /^\d{11}$/;

    if (!emailRegex.test(email) || !phoneRegex.test(phoneNumber)) {
        if (!emailRegex.test(email)) {
            y[0].classList.add("invalid");
            y[0].setAttribute("placeholder", "example@email.com");
            y[0].value = ""; // Clear the input value
        }
        if (!phoneRegex.test(phoneNumber)) {
            y[1].classList.add("invalid");
            y[1].setAttribute("placeholder", "Enter a 10-digit phone number");
            y[1].value = ""; // Clear the input value
        }
        errorText.style.visibility = "visible"; // Show the error message


        // Lower the opacity gradually
        errorText.style.opacity = "0.8"; // Set initial opacity
        setTimeout(function() {
            errorText.style.opacity = "0.5"; // Lower the opacity
        }, 1000); // Lower opacity after 1 second
        setTimeout(function() {
            errorText.style.opacity = "0"; // Fade out the error message
        }, 2000); // Fade out after 2 seconds

        valid = false;
    }

    if (valid) {
        // Proceed to the next step
        slidePage.style.marginLeft = "-50%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    }
});

nextBtnThird.addEventListener("click", function() {
    var addressInput = document.getElementById("address");

    if (!addressInput) {
        console.error("Address input element not found.");
        return; // Exit the function early if the address input element is not found
    }

    var address = addressInput.value.trim();

    if (address.length === 0) {
        addressInput.classList.add("invalid");
        addressInput.setAttribute("placeholder", "Address cannot be empty");
        addressInput.value = "";
        console.error("Address input is empty.");
        errorText.style.visibility = "visible"; // Show the error message
        return; // Exit the function early if the address is empty
    }

    // Proceed to the next step if address is not empty
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
});

submitBtn.addEventListener("click", function() {
    var usernameInput = document.getElementById("usernameInput");
    var passwordInput = document.getElementById("passwordInput");

    if (!usernameInput || !passwordInput) {
        console.error("Username or password input element not found.");
        return; // Exit the function early if elements are not found
    }

    var username = usernameInput.value.trim();
    var password = passwordInput.value.trim();

    if (username.length < 4 || password.length < 8) {
        if (username.length < 4) {
            usernameInput.classList.add("invalid");
            usernameInput.setAttribute("placeholder", "must be more than 4 letters");
            usernameInput.value = ""
        }
        if (password.length < 8) {
            passwordInput.classList.add("invalid");
            passwordInput.setAttribute("placeholder", "must be more than 8 letters");
            passwordInput.value = ""
        }
        errorText.style.visibility = "visible"; // Show the error message
        return; // Exit the function if username or password is empty
    }

    // Proceed to the next step if username and password are provided
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;

    setTimeout(function() {

        setTimeout(function() {
            location.href = "home.html"; // Redirect to home.html after the error message fades out
        }, 1000); // Redirect after 1 second
    }, 800);
});

prevBtnSec.addEventListener("click", function() {
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnThird.addEventListener("click", function() {
    slidePage.style.marginLeft = "-25%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnFourth.addEventListener("click", function() {
    slidePage.style.marginLeft = "-50%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});