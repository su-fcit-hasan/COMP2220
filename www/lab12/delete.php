<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "superheros");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Check if ID parameter exists
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Delete the hero with the specified ID
    $sql = "DELETE FROM hero WHERE id = $id";
    if($mysqli->query($sql) === true){
        echo "<div class='container mt-5'><div class='alert alert-success' role='alert'>Hero deleted successfully.</div></div>";
    } else{
        echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>ERROR: Could not able to execute $sql. " . $mysqli->error . "</div></div>";
    }
} else {
    echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>No ID parameter specified.</div></div>";
}

// Close connection
$mysqli->close();
?>
