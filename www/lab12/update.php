<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hero</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Update Hero</h1>

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
        // Query to retrieve the hero details
        $sql = "SELECT * FROM hero WHERE id = $id";
        $result = $mysqli->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
    ?>

            <form action="update_process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="power">Power:</label>
                    <input type="text" class="form-control" id="powers" name="powers" value="<?php echo $row['powers']; ?>">
                </div>
                <div class="form-group">
                    <label for="image_link">Image Link:</label>
                    <input type="text" class="form-control" id="image_link" name="image_link" value="<?php echo $row['image_link']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

    <?php
        } else {
            echo "<p>No hero found with the given ID.</p>";
        }
    } else {
        echo "<p>No ID parameter specified.</p>";
    }

    // Close connection
    $mysqli->close();
    ?>

</div>

</body>
</html>
