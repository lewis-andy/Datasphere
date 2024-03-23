<?php
// Include configuration file
require_once 'config.php';

// Check if ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch record based on ID
    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Record found, fetch data
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $address = $row['address'];
        $salary = $row['salary'];
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
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    // Update record in database
    $sql = "UPDATE employees SET name='$name', address='$address', salary=$salary WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Redirect to landing page after successful update
        header("Location: index.php");
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
    <title>Update Employee Record</title>
</head>
<body>
<h1>Update Employee Record</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id"); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo $address; ?>" required><br><br>
    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary" value="<?php echo $salary; ?>" required><br><br>
    <input type="submit" value="Update">
</form>
</body>
</html>
