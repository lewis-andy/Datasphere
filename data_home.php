<?php
// Include configuration file
require_once 'config.php';

// Fetch data from database
$sql = "SELECT * FROM Cars";
$result = $conn->query($sql);
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Car Management</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Manufacturer</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["car_id"] . "</td>";
                    echo "<td>" . $row["manufacturer"] . "</td>"; // Manufacturer column
                    echo "<td>" . $row["model"] . "</td>";
                    echo "<td>" . $row["year"] . "</td>";
                    echo "<td>" . $row["color"] . "</td>";
                    echo "<td>$" . $row["price"] . "</td>";
                    // Display photo if available
                    if (!empty($row["photo"])) {
                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['photo']) . "' width='100' height='100'></td>";
                    } else {
                        echo "<td>No photo available</td>";
                    }
                    // Action links
                    echo "<td><a href='read.php?id=" . $row["car_id"] . "' class='btn btn-info btn-sm'>View</a> | <a href='update.php?id=" . $row["car_id"] . "' class='btn btn-primary btn-sm'>Edit</a> | <a href='delete.php?id=" . $row["car_id"] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No records found</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <a href="create.php" class="btn btn-success">Add New Car</a>
    <a href="index.php" class="btn btn-success">Home</a>

</div>

    <!-- Bootstrap JS and any other scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
