<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes Database</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Superheroes</h1>

    <?php
    // Connect to MySQL
    $mysqli = new mysqli("localhost", "root", "", "superheros");

    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }

    // Query to retrieve all entries from the heroes table
    $sql = "SELECT * FROM hero";
    $result = $mysqli->query($sql);

    // Display the entries
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='card my-3'>";
            echo "<div class='card-body'>";
            echo "<img class='card-img-top' src='" . $row['image_link'] . "' alt='" . $row['name'] . "'>";
            echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
            echo "<p class='card-text'>Power: " . $row['powers'] . "</p>";
            echo "<a href='update.php?id=" . $row['id'] . "' class='btn btn-primary'>Update</a> ";
            echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
            echo "</div></div>";
        }
    } else {
        echo "<p>No heroes found.</p>";
    }

    // Close connection
    $mysqli->close();
    ?>

    <a href="add.php" class="btn btn-success my-3">Add New Hero</a>
</div>

</body>
</html>
