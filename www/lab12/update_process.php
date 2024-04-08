<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "superheros");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}


// Escape user inputs for security
$id = $mysqli->real_escape_string($_POST['id']);
$name = $mysqli->real_escape_string($_POST['name']);
$powers = $mysqli->real_escape_string($_POST['powers']);
$image_link = $mysqli->real_escape_string($_POST['image_link']);

// Check if ID parameter exists
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    // update the id with new data from the form
    $sql = "UPDATE hero SET name = '$name', powers = '$powers', image_link = '$image_link' WHERE id = $id";
    if($mysqli->query($sql) === true){
        echo "<div class='container mt-5'><div class='alert alert-success' role='alert'>Hero updated successfully.</div></div>";
    } else{
        echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>ERROR: Could not able to execute $sql. " . $mysqli->error . "</div></div>";
    }
} else {
    echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>No ID parameter specified.</div></div>";
}

// Close connection
$mysqli->close();
?>
