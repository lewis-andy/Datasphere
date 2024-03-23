
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0okbX8xSegZR0XKpxwef3VvNqIhFzMJ6D9sBCxOeH3+C/ZGfSrAr4vXIrjNHr2W" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

<body>
<header>
    <div class="company-logo">Datasphere</div>
    <nav class="navbar">
        <ul class="nav-items">
            <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="#" class="nav-link">OFFER</a></li>
            <li class="nav-item"><a href="#" class="nav-link">SHOP</a></li>
            <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>
        </ul>
    </nav>
    <div class="menu-toggle">
        <i class="bx bx-menu"></i>
        <i class="bx bx-x"></i>
    </div>
</header>
<main>
    <!-- HOME SECTION -->
    <section class="container section-1">
        <div class="slogan">
            <h1 class="company-title">DOWNTOWN TECH LIVER</h1>
            <h2 class="company-slogan">
                The biggest computer shop in the area where customers come first.
            </h2>
        </div>
        <div class="home-computer-container">
            <img class="home-computer" src="img/sports-car-races-through-dark-blurred-motion-generative-ai.jpg" alt="a computer in dark with shadow" class="home-img">
        </div>
    </section>
    <?php
    // Include configuration file
    require_once 'config.php';

    // Fetch data from database
    $sql = "SELECT * FROM Cars";
    $result = $conn->query($sql);
    ?>

    <h1>Car Management</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Model</th>
            <th>Year</th>
            <th>Color</th>
            <th>Price</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["car_id"] . "</td>";
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
//                // Debugging output
//                echo "<pre>";
//                var_dump($row["photo"]);
//                echo "</pre>";
                // Action links
                echo "<td><a href='read.php?id=" . $row["car_id"] . "'>View</a> | <a href='update.php?id=" . $row["car_id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["car_id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
    </table>

    <a href="create.php">Add New Car</a><br><br>
    <!-- OFFER SECTION -->
    <section class="container section-2">
        <!-- offer 1 -->
        <div class="offer offer-1">
            <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/offer_1.png?raw=true" alt="a computer in dark with with white shadow" class="offer-img offer-1-img">
            <div class="offer-description offer-desc-1">
                <h2 class="offer-title">Macbook pro</h2>
                <p class="offer-hook">This a Macbook pro nulla vulputate magna vel odio sagittis bibendium...</p>
                <div class="cart-btn">ADD TO CART</div>
            </div>
        </div>
        <!-- offer 2 -->
        <div class="offer offer-2">
            <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/offer_2.png?raw=true" alt="a opened computer" class="offer-img offer-2-img">
            <div class="offer-description offer-desc-2">
                <h2 class="offer-title">Lenovo</h2>
                <p class="offer-hook">This a Lenovo nulla vulputate magna vel odio sagittis bibendium...</p>
                <div class="cart-btn">ADD TO CART</div>
            </div>
        </div>
    </section>

    <!-- PRODUCT SECTION -->
    <section class="container section-3">
        <!-- product - 1 -->
        <div class="product product-1">
            <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/comp_1.png?raw=true" alt="computer to sell" class="product-img">
            <span class="product_add_cart">ADD TO CART</span>
        </div>
        <!-- product - 2 -->
        <div class="product product-2">
            <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/comp_2.png?raw=true" alt="computer to sell" class="product-img">
            <span class="product_add_cart">ADD TO CART</span>
        </div>
        <!-- product - 3 -->
        <div class="product product-3">
            <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/comp_3.png?raw=true" alt="computer to sell" class="product-img">
            <span class="product_add_cart">ADD TO CART</span>
        </div>
        <!-- product - 4 -->
        <div class="product product-4">
            <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/comp_4.png?raw=true" alt="computer to sell" class="product-img">
            <span class="product_add_cart">ADD TO CART</span>
        </div>
    </section>

    <!-- SPONSOR SECTION -->
    <section class="container section-4">
        <!-- SPONSOR group 1 -->
        <div class="sponsor sponsor-1"><img src="https://raw.githubusercontent.com/r-e-d-ant/Computer-store-website/b90ac65459206fef22e9b87313f587185554263b/assets/images/microsoft.svg" alt=""></div>
        <div class="sponsor sponsor-2"><img src="https://raw.githubusercontent.com/r-e-d-ant/Computer-store-website/b90ac65459206fef22e9b87313f587185554263b/assets/images/apple.svg" alt=""></div>

        <!-- SPONSOR group 2 -->
        <div class="sponsor sponsor-3"><img src="https://raw.githubusercontent.com/r-e-d-ant/Computer-store-website/b90ac65459206fef22e9b87313f587185554263b/assets/images/dell.svg" alt=""></div>
        <div class="sponsor sponsor-4"><img src="https://raw.githubusercontent.com/r-e-d-ant/Computer-store-website/b90ac65459206fef22e9b87313f587185554263b/assets/images/ibm.svg" alt=""></div>
    </section>

    <!-- SUBSCRIBE SECTION-->
    <section class="container section-5">
        <h2 class="subscribe-input-label">NEWSLETTER</h2>
        <div class="subscribe-container">
            <input type="text" id="email-subscribe" placeholder="Email address...">
            <input type="submit" value="SUBSCRIBE">
        </div>
    </section>
</main>
<footer>
    <div class="container top-footer">
        <!-- footer item 1 -->
        <div class="footer-item">
            <h2 class="footer-title">ADDRESS</h2>
            <div class="footer-items">
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing st18</h3>
            </div>
        </div>
        <!-- footer item 2 -->
        <div class="footer-item">
            <h2 class="footer-title">SERVICES</h2>
            <div class="footer-items">
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
            </div>
        </div>
        <!-- footer item 3 -->
        <div class="footer-item">
            <h2 class="footer-title">SUPPLIERS</h2>
            <div class="footer-items">
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
            </div>
        </div>
        <!-- footer item 4 -->
        <div class="footer-item">
            <h2 class="footer-title">INVESTMENT</h2>
            <div class="footer-items">
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
                <h3>Adipisicing elit.</h3>
            </div>
        </div>
    </div>
    <div class="container end-footer">
        <div class="copyright">copyright © 2021 - Present • <b>DOWNTOWN TECH LIVER</b></div>
        <a class="designer" href="#">Thierry M</a>
    </div>
</footer>
<script>

    'use strict'

    const menuToggle = document.querySelector('.menu-toggle');
    const bxMenu = document.querySelector('.bx-menu');
    const bxX = document.querySelector('.bx-x');

    const navBar = document.querySelector('.navbar');

    // --- open menu ---

    bxMenu.addEventListener('click', (e)=> {
        if(e.target.classList.contains('bx-menu')){
            navBar.classList.add('show-navbar');
            bxMenu.classList.add('hide-bx');
            bxX.classList.add('show-bx');
        }
    })

    // --- close menu ---

    bxX.addEventListener('click', (e)=> {
        if(e.target.classList.contains('bx-x')){
            navBar.classList.remove('show-navbar');
            bxMenu.classList.remove('hide-bx');
            bxX.classList.remove('show-bx');
        }
    })

</script>
</body>
</html>