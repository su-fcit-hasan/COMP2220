function myftn5() {
    var nameInput = document.getElementById("name");
    var errorDiv = document.getElementById("error");

    if (nameInput.value === "") {
        errorDiv.textContent = "Name field cannot be empty";
    } else {
        errorDiv.textContent = "";
    }
}

function myftn6() {
    var ageInput = document.getElementById("age");
    var errorDiv = document.getElementById("error");

    if (ageInput.value === "") {
        errorDiv.textContent = "Age field cannot be empty";
    } else if (ageInput.value < 18) {
        errorDiv.textContent = "Age should be greater than 18";
    } else {
        errorDiv.textContent = "";
    }
}