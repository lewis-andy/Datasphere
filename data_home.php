<?php
// Include configuration file
require_once 'config.php';

// Fetch data from database
$sql = "SELECT * FROM Cars";
$result = $conn->query($sql);
?>

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
                echo "<td>" . $row["manufacturer"] . "</td>"; // Add this line for manufacturer
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
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<a href="create.php" class="btn btn-success">Add New Car</a><br><br>

<!-- OFFER SECTION -->
<section class="container section-2">
    <?php
    // Fetch offer data from the Cars table
    $offerSql = "SELECT * FROM Cars LIMIT 2"; // Example: Fetch first 2 cars as offers
    $offerResult = $conn->query($offerSql);

    if ($offerResult->num_rows > 0) {
        while ($offerRow = $offerResult->fetch_assoc()) {
            echo '<div class="offer">';
            // Display photo if available
            if (!empty($row["photo"])) {
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['photo']) . "' width='100' height='100'></td>";
            } else {
                echo "<td>No photo available</td>";
            }
            echo '<div class="offer-description">';
            echo '<h2 class="offer-title">' . $offerRow['model'] . '</h2>';
            echo '<p class="offer-hook">' . $offerRow['manufacturer'] . '</p>';
            echo '<div class="cart-btn">ADD TO CART</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No offers available';
    }
    ?>
</section>

<!-- PRODUCT SECTION -->
<section class="container section-3">
<?php
// Fetch product data from the Cars table
$productSql = "SELECT * FROM Cars LIMIT 4"; // Example: Fetch first 4 cars as products
$productResult = $conn->query($productSql);

if ($productResult->num_rows > 0) {
    while ($productRow = $productResult->fetch_assoc()) {
        echo '<div class="product">';
        // Display photo if available
        if (!empty($row["photo"])) {
            echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['photo']) . "' width='100' height='100'></td>";
        } else {
            echo "<td>No photo available</td>";
        }
        echo '<span class="product_add_cart">ADD TO CART</span>';
        echo '</div>';
    }
} else {
    echo 'No products available';
}
?>