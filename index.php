<?php
// Include configuration file
require_once 'config.php';

// Fetch data from database
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<body>
<h1>Employee Management</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Salary</th>
        <th>Action</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>$" . $row["salary"] . "</td>";
            echo "<td><a href='read.php?id=" . $row["id"] . "'>View</a> | <a href='update.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    ?>
</table>
<a href="create.php">create record</a>
</body>
</html>
