<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0okbX8xSegZR0XKpxwef3VvNqIhFzMJ6D9sBCxOeH3+C/ZGfSrAr4vXIrjNHr2W" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <!-- Add any other CSS stylesheets or dependencies here -->
</head>
<body>
<header>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Car Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Employee</title>
        <!--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0okbX8xSegZR0XKpxwef3VvNqIhFzMJ6D9sBCxOeH3+C/ZGfSrAr4vXIrjNHr2W" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
    </head>




    <body>
    <header>
        <div class="company-logo">Datasphere</div>
        <nav class="navbar">
            <ul class="nav-items">
                <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
                <li class="nav-item"><a href="data_home.php" class="nav-link">Database</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT</a></li>
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
                <h1 class="company-title">DOWNTOWN Datasphere</h1>
                <h2 class="company-slogan">
                    The biggest Car Shop shop in the area where customers come first.
                </h2>
            </div>
            <div class="home-computer-container">
                <img class="home-computer" src="img/sports-car-races-through-dark-blurred-motion-generative-ai.jpg" alt="a computer in dark with shadow" class="home-img">
            </div>
        </section>

    </main>
<footer>
    <!-- Footer content -->
</footer>
<!-- Bootstrap JS and any other scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fU6AP6K9MIpA4GBMhS5UUHRiD0XBhAUVWEJQTb/mObJJ8nYlXk+0EDCiBlBAxidj" crossorigin="anonymous"></script>
<!-- Add any other JS scripts or dependencies here -->

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
