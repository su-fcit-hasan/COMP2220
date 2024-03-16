function checkOddEven() {
    // Get the input value from the text field
    var inputValue = document.getElementById("numberInput").value;
    
    // Convert the input value to a number
    var number = parseInt(inputValue);

    // Check if the input is a valid number
    if (isNaN(number)) {
        alert("Please enter a valid number.");
        return;
    }

    // Check if the number is odd or even
    if (number % 2 === 0) {
        alert(number + " is even.");
    } else {
        alert(number + " is odd.");
    }
}

function checkName() {
    // Get the input value
    var name = document.getElementById("nameInput").value;

    // Check if the name is less than 5 characters
    if (name.length < 5) {
        // Clear the input field
        document.getElementById("nameInput").value = "";
        alert("Name should be at least 5 characters long.");
    } else {
        alert("Name is valid: " + name);
    }
}

function addRow() {
    // Get input values
    var id = document.getElementById("idInput").value;
    var name = document.getElementById("nameInput").value;
    var gpa = document.getElementById("gpaInput").value;
    
    // Get the table
    var table = document.getElementById("myTable");
    
    // Create a new row
    var row = table.insertRow(-1);
    
    // Insert cells into the row
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    
    // Add values to the cells
    cell1.innerHTML = id;
    cell2.innerHTML = name;
    cell3.innerHTML = gpa;
    
    // Reset the form
    document.getElementById("myForm").reset();
}
