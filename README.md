# DataSphere Project

Welcome to the DataSphere project! This project is a web application for managing car data.

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- Web server software (e.g., Apache, Nginx)
- PHP (7.x or higher)
- MySQL (or any other relational database)
- Web browser (e.g., Chrome, Firefox, Safari)
- Code editor (e.g., Visual Studio Code, Sublime Text)

## Getting Started

1. Clone the repository to your local machine using the following command:

   ```bash
   git clone https://github.com/your-username/datasphere-project.git'

## After clone
- Create a MySQL database for the project.

- Import the provided SQL dump file (database.sql) into your database.

- Copy the project files to your web server's document root directory.

## Configuration
1. Open the config.php file located in the project directory.
2. Update the database connection settings with your MySQL credentials:

```php
   <?php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_database_user');
   define('DB_PASS', 'your_database_password');
   define('DB_NAME', 'your_database_name');
   ?>
Make sure to replace 'your_database_user', 'your_database_password', and 'your_database_name' with your actual MySQL credentials.
```
## Customization

- If you want to customize the application further, you can modify the HTML, CSS, and PHP files in the project directory. You can also add additional functionality as needed.

## Running the Application Locally

1. Clone the repository to your local machine 
2. Navigate to the project directory:
3. cd your-repository
4. Ensure that you have PHP and a MySQL database server installed on your local machine.

5. Import the provided SQL dump file into your MySQL database:

6. Replace `username` with your MySQL username and `database_name` with the name of your MySQL database
7.   Start a PHP development server: in xammp control panel
8. Open your web browser and navigate to `http://localhost:8000` to view the application.

9. You should now be able to interact with the application locally.

## Setting up MySQL Database

- Follow these steps to create a MySQL database for the Car Management System using XAMPP:

1. Install XAMPP: If you haven't already installed XAMPP, download it from the official website (https://www.apachefriends.org/index.html) and follow the installation instructions.

2. Start XAMPP Control Panel: Launch the XAMPP Control Panel and start the Apache and MySQL services.

3. Access phpMyAdmin: Open your web browser and navigate to http://localhost/phpmyadmin.

4. Log in to phpMyAdmin: Enter your MySQL username and password (default username is root and leave the password field empty if you haven't set any).

5. Create a New Database:

- Click on the "Databases" tab in phpMyAdmin.

- Enter a name for your database in the "Create database" field, e.g., `carsystemdb`.

- Click the "Create" button to create the new database.

6. Create a Table:

- Navigate to the newly created database (carsystemdb).
-  Click on the "SQL" tab.

-   Paste the following SQL code into the SQL query box:

```sql
CREATE TABLE Cars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    manufacturer VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    color VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    photo LONGBLOB
);
```
- Click the "Go" button to execute the SQL query and create the Cars table.

7. Verify Database and Table Creation: You can now see the carsystemdb database and the Cars table listed in phpMyAdmin.
8. Connection Configuration:

- Update your PHP script (e.g., config.php) with the following connection parameters:

```php
<?php
// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server name if it's different
$username = "root";
$password = "";
$database = "carsystemdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```
- Save the file and ensure it is included in your PHP scripts that require database connectivity.


Now your MySQL database for the Car Management System is set up and ready to use. You can start integrating it into your PHP application.



