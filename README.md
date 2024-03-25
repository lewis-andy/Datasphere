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



