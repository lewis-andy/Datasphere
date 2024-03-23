<?php
// Include configuration file
require_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    // Check if a file was uploaded
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        // Read the uploaded file
        $photo_data = file_get_contents($_FILES['photo']['tmp_name']);

        // Check if file data was read successfully
        if ($photo_data !== false) {
            // Prepare an SQL statement with placeholders
            $sql = "INSERT INTO Cars (model, year, color, price, photo) VALUES (?, ?, ?, ?, ?)";

            // Prepare the statement
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $stmt->bind_param("sssis", $model, $year, $color, $price, $photo_data);

            // Execute the statement
            if ($stmt->execute()) {
                // Redirect to success page or display a success message
                echo "Car record inserted successfully.";
            } else {
                // Handle database insert error
                echo "Error: " . $stmt->error;
            }
        } else {
            // Handle file read error
            echo "Error reading uploaded file.";
        }
    } else {
        // Handle file upload error
        echo "No file uploaded or file upload error occurred.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Car Entry</title>
</head>
<body>
<h1>Create Car Entry</h1>
<form method="post" enctype="multipart/form-data">
    <label for="manufacturer">Manufacturer:</label><br>
    <input type="text" id="manufacturer" name="manufacturer" value="Toyota"><br><br>

    <label for="model">Model:</label><br>
    <input type="text" id="model" name="model" required><br><br>

    <label for="year">Year:</label><br>
    <input type="number" id="year" name="year" required><br><br>

    <label for="color">Color:</label><br>
    <input type="text" id="color" name="color" required><br><br>

    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price" step="0.01" required><br><br>

    <label for="photo">Photo:</label><br>
    <input type="file" id="photo" name="photo" accept="image/jpeg"><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
