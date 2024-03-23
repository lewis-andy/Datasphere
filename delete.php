<?php
// Include configuration file
require_once 'config.php';

// Check if ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch record based on ID
    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Record found, display confirmation message
        $row = $result->fetch_assoc();
        $name = $row['name'];
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

// Check if confirmation is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['confirm'] == 'yes') {
        // Delete record from database
        $sql = "DELETE FROM employees WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            // Redirect to landing page after successful deletion
            header("Location: index.php");
            exit();
        } else {
            // Error deleting record, redirect to error page
            header("Location: error.php");
            exit();
        }
    } else {
        // User cancelled deletion, redirect to landing page
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee Record</title>
</head>
<body>
<h1>Delete Employee Record</h1>
<p>Are you sure you want to delete the record for <?php echo $name; ?>?</p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id"); ?>">
    <input type="radio" name="confirm" value="yes"> Yes
    <input type="radio" name="confirm" value="no" checked> No
    <br><br>
    <input type="submit" value="Confirm">
</form>
</body>
</html>
