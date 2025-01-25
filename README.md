# PHP Login System

Welcome to the Dynamic User Identification Login System) project! This is a simple PHP-based login system that allows users to log in with their username and password. It includes basic functionality to redirect users based on their role (Student, Staff, or Guest) after a successful login.

## Features

- **User Authentication:** Allows users to log in with their credentials (username and password).
- **Role-Based Redirection:** Redirects users to different pages based on their role (Student, Staff, Guest).
- **Simple Form Interface:** Provides an intuitive form to input credentials.
- **Database Connectivity:** Integrates with a MySQL database to check user credentials and roles.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP (>= 7.4)
- MySQL or MariaDB
- A web server (Apache, Nginx, etc.)
- A connection file (`connection.php`) for MySQL connectivity

## How to Set Up

1. **Clone this repository:**

    ```bash
    git clone https://github.com/Biruk2580/php_auth.git
    
    ```

2. **Set up the database:**

    Create a MySQL database and import the necessary schema to store user information and roles. Make sure your `account` table includes `username`, `password`, and `role`.

3. **Configure the database connection:**

    In the `connection.php` file, update the database credentials (host, username, password, and database name) to match your environment.

4. **Deploy the code:**

    Place the files in the appropriate folder for your web server (e.g., `htdocs` for XAMPP).

5. **Test the login page:**

    Open your web browser and go to the `login.php` page. Enter a valid username and password to see the system in action.

## How It Works

1. The login page (`login.php`) takes the user's input (username and password).
2. The form sends a `POST` request to the server.
3. The PHP script processes the form data, connects to the database, and checks the credentials.
4. If the credentials are valid, the user is redirected based on their role:
    - **Student** → Redirects to the `Student/index.php` page.
    - **Staff** → Redirects to the `Staff/index.php` page.
    - **Guest** → Redirects to the `Guest/index.php` page.
5. If the credentials are incorrect, an error message is displayed.

## Code Overview

- **login.php:** The HTML form where users enter their credentials.
- **connection.php:** The PHP file that connects to the MySQL database.
- **PHP Logic:** After the user submits the form, the PHP code checks the credentials against the database and redirects the user accordingly.
