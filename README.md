# Chary Wary Books - Intentionally Vulnerable Web Application

This repository contains a PHP-based web application intentionally built to demonstrate common security vulnerabilities for educational purposes. It is designed to teach and showcase issues like:

- **SQL Injection**
- **Authorization Bypass**
- **Authentication Flaws**
- And many other security vulnerabilities

## Purpose
The primary goal of this project is to help students understand how vulnerabilities work, how they can be exploited, and how to mitigate them effectively.

## Features
- Demonstrates various security vulnerabilities
- Includes a sample database for testing
- Real-world scenarios for exploitation and learning

## Requirements
- PHP 7.4+
- MySQL or MariaDB
- A web server (e.g., Apache, Nginx)

## Setup Instructions
1. Clone this repository:
   ```bash
   git clone https://github.com/kasun-c/Chary-Wary-Books.git

### 2. Set Up the Database
1. Log in to your MySQL server:
    ```bash
    mysql -u root -p
2. Create the `book_store` database:
     ```SQL
     CREATE DATABASE book_store;
3. Import the SQL dump file:
    ```bash
    mysql -u root -p book_store < db/book_store_dump.sql
### 3. Configure the Application
Update the `config.php` file with your database credentials:

    ```php
    <?php
      $link = mysqli_connect("localhost", "root", "your_password", "book_store");
      if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
      }
    ?>


### 4. Host the Application

1.  Move the `src/` folder to your web server's document root:
`sudo mv src/ /var/www/html/bookshop`

2. Update permissions:
`sudo chmod -R 755 /var/www/html/bookshop`

3. Access the application in your browser:
`http://localhost/bookshop/`


## How to Use

1.  SQL Injection Demonstration:
    
    -   Navigate to the book details page (e.g., `view.php?id=1`).
    -   Inject SQL commands into the `id` parameter (e.g., `view.php?id=1' OR '1'='1`).
2.  Authentication Flaws:
    
    -   Test the login system by manipulating login parameters.
3.  Authorization Bypass:
    
    -   Attempt to access restricted pages (e.g., `profile.php`) without proper authentication or by modifying session data.
4.  Experiment:
    
    -   Try various attacks, such as session hijacking or XSS, based on your cybersecurity knowledge.



## Disclaimer

This application is for **educational purposes only**. It is intentionally vulnerable and should never be hosted on a public-facing server. Use this project only in controlled environments, such as virtual machines or local development servers.



## Contributing

Contributions are welcome! If you'd like to add more vulnerabilities or improve the application, please create a pull request or open an issue.




## License

This project is licensed under the **MIT License**.

You are free to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of this software, provided that the following conditions are met:

- You must include the original copyright notice and this permission notice in all copies or substantial portions of the software.



## Author

Created by **Kasun Chathuranga** For educational and cybersecurity training purposes. 
Follow me on X: [@0xKasunC](https://x.com/0xKasunC)


## Contact

For questions or feedback, please contact me  via GitHub issues.
