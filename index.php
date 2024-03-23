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
    <link rel="stylesheet" href="css/style.css">
    <title>proposal</title>
    <link href="img/proposal2.png" rel="icon">
    <!-- Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Animation CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <!-- js library for animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<body>

<div class="navbar">
    <div class="logo">Parth Sharma</div>
    <div class="navbar-toggle" onclick="toggleNav()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="nav-list" id="navList">
        <li><a href="index.html">Home</a></li>
        <li><a href="template/about.html">About</a></li>
        <li><a href="template/services.html">Services</a></li>
        <li><a href="template/contact.html">Contact</a></li>
    </ul>
</div>
<!-- slider section -->
<section class="slider_section ">
    <div class="slider_bg_box">
        <img src="img/img.png" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="detail-box">
                                <h1>
                                    Proposal
                                </h1>
                                <p>
                                    This is my proposal aimed at looking at the database system
                                </p>
                                <div class="btn-box">
                                    <a href="template/contact.html" class="btn1">
                                        Contact Me
                                    </a>
                                    <a href="template/about.html" class="btn2">
                                        About me
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="detail-box">
                                <h1>
                                    Proposal
                                </h1>
                                <p>
                                    It covers each and every scope of all the highlighted subjects
                                </p>
                                <div class="btn-box">
                                    <a href="template/contact.html" class="btn1">
                                        Contact Me
                                    </a>
                                    <a href="template/about.html" class="btn2">
                                        About Me
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="detail-box">
                                <h1>
                                    proposal
                                </h1>
                                <p>
                                    This application will streamline task organization, enhance collaboration, and boost productivity.
                                </p>
                                <div class="btn-box">
                                    <a href="template/contact.html" class="btn1">
                                        Contact Me
                                    </a>
                                    <a href="template/about.html" class="btn2">
                                        About Me
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
                <li data-target="#customCarousel1" data-slide-to="3"></li>
                <li data-target="#customCarousel1" data-slide-to="4"></li>
            </ol>
        </div>
    </div>
</section>
<!-- end slider section -->

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

<!--start of explanation -->
<!--/ Section Services Star /-->
<div class="service-content animate__animated animate__fadeInUp">
    <!-- ... End ... -->
</div>
<section id="service" class="services-mf route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        View point
                    </h3>
                    <p class="subtitle-a">
                        An effective task management system is becoming more and more necessary as our lives get more and busier.
                        Our final project intends to provide a Task Manager, a feature-rich and easy-to-use database-driven online
                        application, in order to address this. This program, which is designed for both people and teams,
                        will improve cooperation, expedite task organization, and increase productivity.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-content">
                        <h2 class="s-title">User-centric features</h2>
                        <p class="s-description text-center">
                        <ul>
                            <li>personalized dashboards</li>
                            <li>Reminders and Notification</li>
                            <li>intuitive Task creation</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">

                    <div class="service-content">
                        <h2 class="s-title">user interface design</h2>
                        <p class="s-description text-center">
                        <ul>
                            <li>user profile</li>
                            <li>Task Data</li>
                            <li>Project details</li>
                            <li>Notification preference</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">

                    <div class="service-content">
                        <h2 class="s-title">Web page layout</h2>
                        <p class="s-description text-center">
                        <ul>
                            <li>consistent nav-bar at top</li>
                            <li>calming color scheme</li>
                            <li>Promoting focus and clarity</li>
                            <li>colaborative project section</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-content">

                        <h2 class="s-title">Audit trail</h2>
                        <p class="s-description text-center">
                            To be used to track:
                        <ul>
                            <li>User action</li>
                            <li>Security-Related Events</li>
                            <li>Data modification</li>
                            <li>Error Logging</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

            <!-- project overview start -->
            <div class="container-fluid bg-light bg-icon py-6 mb-5">
                <div class="container">
                    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Project overview.</h1>
                        <p>Welcome to our database proposal, where organization meets efficiency. With sleek design and seamless
                            functionality, our database solution is poised to revolutionize the way you store and access your
                            valuable information. Say goodbye to hours of searching and sorting through endless paperwork – our
                            database is here to streamline your processes and elevate your productivity.Here are some of the features to
                            expect.
                        </p>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item position-relative bg-white p-5 mt-4">
                            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                            <p class="mb-4">"
                            <center> <bold><h2 class="proposal">Security</h2></bold></center>
                            Security is our utmost priority. Our robust encryption protocols guarantee the confidentiality of your sensitive data,
                            protecting it from unauthorized access and potential threats. With regular backups and data redundancy, rest assured that your information is safe and sound, even in the face of unexpected events..</p>
                            <div class="d-flex align-items-center">


                            </div>
                        </div>
                        <div class="testimonial-item position-relative bg-white p-5 mt-4">
                            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                            <p class="mb-4">"
                            <center> <bold><h2 class="proposal">Adaptability</h2></bold></center>
                            But it doesn't stop there. Our database is designed to adapt and scale with your growing needs.
                            As your business expands, our solution seamlessly accommodates increased volumes of data without
                            compromising on performance or speed. From small startups to multinational corporations,
                            our database is the ideal partner for all your data management requirements.</p>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="testimonial-item position-relative bg-white p-5 mt-4">
                            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                            <p class="mb-4">"
                            <center> <bold><h2 class="proposal">User- friendly</h2></bold></center>
                            Imagine a world where every piece of data is readily available at your fingertips. Our database
                            offers a user-friendly interface, providing effortless navigation through your stored information.
                            Whether it's financial records, customer profiles, or inventory details, our system ensures that
                            essential data is organized and easily retrievable, saving you time and eliminating headaches.
                            </p>
                            <div class="d-flex align-items-center">


                            </div>
                        </div>
                        <div class="testimonial-item position-relative bg-white p-5 mt-4">
                            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                            <p class="mb-4">"
                            <center> <bold><h2 class="proposal">Technological</h2></bold></center>
                            Gone are the days of manual data entry. Our database effortlessly integrates with a wide range
                            of existing systems, enabling smooth data transfer and synchronization. Spend less time on mundane
                            administrative tasks and more time on what truly matters – building and growing your business.
                            </p>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="testimonial-item position-relative bg-white p-5 mt-4">
                            <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                            <p class="mb-4">"
                            <center> <bold><h2 class="proposal">Conclusion</h2></bold></center>
                            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                            In conclusion, our database proposal sets the stage for a more streamlined and efficient future.
                            Let us be your digital companion, simplifying your data management processes, ensuring data security,
                            and providing a foundation for growth. Embrace the power of our database solution and unlock the true
                            potential of your digital endeavors.</p>
                            <div class="d-flex align-items-center">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->





                    <!-- Bottom Container -->
                    <h2>Database proposal</h2>
                    <div class="bottom-container">

                        <!-- Columns for bottom container -->

                        <div class="column">
                            <h3>Database Proposal</h3>
                            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                            <p>Follow us on all social media platforms to be well informed of our new offers and exciting deals.</p>
                            <div class="social-container">
                                <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook" style="color: #3b5998;"></i></a>
                                <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram" style="color: #e4405f;"></i></a>
                                <a href="https://www.twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter" style="color: #1da1f2;"></i></a>
                                <a href="https://www.tiktok.com" target="_blank" class="social-icon"><i class="fab fa-tiktok" style="color: #d34f4f;"></i></a>

                            </div>
                        </div>
                        <div class="column">
                            <h3>Contact Info</h3>
                            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                            <p>+254-456-7890</p>
                            <p>+254-222-3333</p>
                            <p>databasesysteam@gmail.com</p>
                        </div>
                        <div class="column">
                            <h3>Quick Links</h3>
                            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                            <p>→ Home</p>
                            <p>→ About</p>
                            <p>→ Services</p>
                            <p>→ >contacts</p>
                        </div>
                        <div class="column">
                            <h3>Newsletter</h3>
                            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                            <p>Subscribe For the Latest Updates</p>
                            <form action="{{ url_for('subscribe') }}" method="post">
                                <label for="email">Email:</label>
                                <input type="email" name="email" required>
                                <button type="submit" class="subscribe-button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <footer>
                        <p>&copy; 2024 Parth Sharma | <b>School ID:</b> 202106916 </p>
                    </footer>
                    <!-- Hard script to this page --->
                    <script >
                        // JavaScript to trigger the animation when the element is in the viewport
                        document.addEventListener("DOMContentLoaded", function () {
                            var services = document.querySelectorAll(".service-content");

                            function checkInView() {
                                services.forEach(function (service) {
                                    var rect = service.getBoundingClientRect();
                                    var isInView = (rect.top >= 0 && rect.bottom <= window.innerHeight);

                                    if (isInView) {
                                        service.classList.add("animate__animated", "animate__fadeInUp");
                                    }
                                });
                            }

                            window.addEventListener("scroll", checkInView);
                            window.addEventListener("resize", checkInView);
                            checkInView();
                        });

                        // JavaScript function to toggle the navigation menu
                        function toggleNav() {
                            var navList = document.getElementById("navList");
                            navList.classList.toggle("active");
                        }
                    </script>
                    <!-- Bootstrap JS and Popper.js CDN links -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
                    <!-- Bootstrap JS CDN link -->
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                    <!-- Wow.js CDN link -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
                    <!-- Initialize Wow.js -->
                    <!-- Scripting for the icon -->
                    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Employee Management</title>-->
<!--</head>-->
<!--<body>-->

</body>
</html>
