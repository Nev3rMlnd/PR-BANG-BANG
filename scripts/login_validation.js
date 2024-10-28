let username = document.getElementById("username");
let password = document.getElementById("password");
let email = document.getElementById("email");
let roles = document.getElementById("select");

let error_msg = document.getElementById("error-msg");

const btn = document.getElementById("Submit");

btn.addEventListener("click", (event) => {
    // Check if any of the fields are empty
    if (username.value.trim() === "" || password.value.trim() === ""){
        error_msg.textContent = "Please fill in all fields";
        errorDisplay(error_msg);
        removeInput(username, password, email);
         event.preventDefault();
    } else if (username.value.length < 12) { // Corrected length check
        error_msg.textContent = "Username must be at least 12 characters long";
        errorDisplay(error_msg);
         event.preventDefault();
    } else if (password.value.length < 12) { // Corrected length check
        error_msg.textContent = "Password must be at least 12 characters long";    
        errorDisplay(error_msg);
        event.preventDefault();
    } else { // Executes when there's no error
      error_msg.textContent = "Account Created!";
      error_msg.style.display = "inline-block";
      error_msg.style.background = "rgba(20, 255, 87, 0.85)"; // Corrected typo
      error_msg.style.borderColor = "rgba(25, 193, 53, 0.85)";
        
    }
});

function removeInput(username, password, email) {
    username.value = "";
    password.value = "";
    email.value = "";
} 

function errorDisplay(error_msg) {
    error_msg.style.display = "inline-block"; // Corrected to lowercase
    error_msg.style.background = "rgba(182, 32, 32, 0.85)"; // Corrected typo
    error_msg.style.borderColor = "rgb(248, 0, 0)";
}