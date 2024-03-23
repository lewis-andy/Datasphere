<?php
// Include configuration file
require_once 'config.php';

// Check if ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare an SQL statement to delete the record
    $sql = "DELETE FROM Cars WHERE car_id = ?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to index page after successful deletion
        header("Location: index.php");
        exit();
    } else {
        // Handle database error
        echo "Error: " . $stmt->error;
    }
} else {
    // Redirect to error page if ID parameter is not provided
    header("Location: error.php");
    exit();
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
<h1>Delete Car Record</h1>
<p>Are you sure you want to delete the record for <?php echo $name; ?>?</p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id"); ?>">
    <input type="radio" name="confirm" value="yes"> Yes
    <input type="radio" name="confirm" value="no" checked> No
    <br><br>
    <input type="submit" value="Confirm">
</form>
<!--<script>-->
<!--    function confirmDelete() {-->
<!--        var confirmation = confirm("Are you sure you want to delete the record?");-->
<!--        if (confirmation) {-->
<!--            // If user confirms, submit the form-->
<!--            document.getElementById("deleteForm").submit();-->
<!--        } else {-->
<!--            // If user cancels, do nothing-->
<!--            return false;-->
<!--        }-->
<!--    }-->
<!--</script>-->
</body>
</html>
