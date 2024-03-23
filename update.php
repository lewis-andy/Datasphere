<?php
// Include configuration file
require_once 'config.php';

// Check if ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch record based on ID
    $sql = "SELECT * FROM Cars WHERE car_id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Record found, fetch data
        $row = $result->fetch_assoc();
        $manufacturer = $row['manufacturer'];
        $model = $row['model'];
        $year = $row['year'];
        $color = $row['color'];
        $price = $row['price'];
    } else {
        // No record found with the provided ID, redirect to error page
        header("Location: error.php");
        exit();
    }
} else {
    // ID parameter not provided, redirect to error page
    header("Location: error.php");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    // Update record in database
    $sql = "UPDATE Cars SET manufacturer='$manufacturer', model='$model', year=$year, color='$color', price=$price WHERE car_id=$id";

    if ($conn->query($sql) === TRUE) {
        // Redirect to view car page after successful update
        header("Location: view_car.php?id=$id");
        exit();
    } else {
        // Error updating record, redirect to error page
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
    <title>Edit Car Details</title>
</head>
<body>
<h1>Edit Car Details</h1>
<form method="POST">
    <label for="manufacturer">Manufacturer:</label>
    <input type="text" id="manufacturer" name="manufacturer" value="<?php echo $manufacturer; ?>" required><br><br>
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" value="<?php echo $model; ?>" required><br><br>
    <label for="year">Year:</label>
    <input type="number" id="year" name="year" value="<?php echo $year; ?>" required><br><br>
    <label for="color">Color:</label>
    <input type="text" id="color" name="color" value="<?php echo $color; ?>" required><br><br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" value="<?php echo $price; ?>" required><br><br>
    <input type="submit" value="Update">
</form>
<a href="view_car.php?id=<?php echo $id; ?>">Cancel</a>
</body>
</html>
