<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "superheros");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$name = $mysqli->real_escape_string($_POST['name']);
$power = $mysqli->real_escape_string($_POST['power']);
$image_link = $mysqli->real_escape_string($_POST['image_link']);

// Insert new record into the heroes table
$sql = "INSERT INTO hero (name, powers, image_link) VALUES ('$name', '$power', '$image_link')";
if($mysqli->query($sql) === true){
    echo "<div class='container mt-5'><div class='alert alert-success' role='alert'>New hero added successfully.</div></div>";
} else{
    echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>ERROR: Could not able to execute $sql. " . $mysqli->error . "</div></div>";
}

// Close connection
$mysqli->close();
?>
