<?php
// Include configuration file
require_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    // Handle photo upload
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $photo_type = $_FILES['photo']['type'];
    $photo_error = $_FILES['photo']['error'];

    if ($photo_error === 0) {
        $photo_content = file_get_contents($photo_tmp_name);
    } else {
        echo "Error uploading photo.";
        exit;
    }

    // Insert record into database
    $sql = "INSERT INTO Cars (manufacturer, model, year, color, price, photo) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiisd", $manufacturer, $model, $year, $color, $price, $photo_content);

    if ($stmt->execute()) {
        // Redirect to landing page after successful insertion
        header("Location: index.php");
        exit();
    } else {
        // Error inserting record, redirect to error page
        header("Location: error.php");
        exit();
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
