<?php
require_once 'config.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("location: error.php");
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    header("location: error.php");
    exit();
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
</head>
<body>
<h1>View Employee</h1>
<p>ID: <?php echo $row['id']; ?></p>
<p>Name: <?php echo $row['name']; ?></p>
<p>Address: <?php echo $row['address']; ?></p>
<p>Salary: <?php echo $row['salary']; ?></p>
<a href="index.php">Back to Home</a>
</body>
</html>
