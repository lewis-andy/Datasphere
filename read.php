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
        // Display photo if available
        $photo = !empty($row["photo"]) ? "<img src='data:image/jpeg;base64," . base64_encode($row['photo']) . "' width='200' height='200'>" : "No photo available";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Car Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .details p {
            margin-bottom: 0.5rem; /* Add some space between paragraphs */
        }
    </style>
</head>
<body>
<h1>View Car Details</h1>
<div class="details">
    <p><strong>Manufacturer:</strong> <?php echo $manufacturer; ?></p>
    <p><strong>Model:</strong> <?php echo $model; ?></p>
    <p><strong>Year:</strong> <?php echo $year; ?></p>
    <p><strong>Color:</strong> <?php echo $color; ?></p>
    <p><strong>Price:</strong> $<?php echo $price; ?></p>
    <p><strong>Photo:</strong> <?php echo $photo; ?></p>
</div>
<a href="data_home.php" class="btn btn-primary">Back to Car Management</a>

<!-- Bootstrap JS (optional, for components like dropdowns, tooltips, etc.) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
