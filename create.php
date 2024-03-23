<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data when form is submitted
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    // Validate input
    if (empty($name) || empty($address) || empty($salary)) {
        echo "All fields are required.";
    } else {
        // Prepare and execute SQL insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', '$salary')";
        if ($conn->query($sql) === TRUE) {
            header("location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
</head>
<body>
<h1>Create Employee</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Name:</label><br>
    <input type="text" name="name"><br>
    <label>Address:</label><br>
    <input type="text" name="address"><br>
    <label>Salary:</label><br>
    <input type="number" name="salary"><br>
    <input type="submit" value="Submit">
</form>
<a href="index.php">Back to Home</a>
</body>
</html>
