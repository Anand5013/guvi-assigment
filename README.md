# User Registration and Login Web App

This is a web application that allows users to register, login, and update their profile information. The frontend is built using HTML, CSS, and JavaScript, while the backend is built using PHP. The user data is stored in a MySQL database, and user sessions are managed using Redis and MongoDB Atlas.

## Features

- User registration
- User login
- Profile page with additional details (age, dob, mobile, address)
- Profile update
- Responsive design using Bootstrap 4
- AJAX form submission
- Use of jQuery for DOM manipulation
- Use of PHP for backend logic
- Use of MySQL for user data storage
- Use of Redis and MongoDB Atlas for session management and validation

## Installation

1. Clone the repository or download the source code.
2. Set up a web server (e.g., Apache) and configure it to serve the htdocs directory.
3. Import the database.sql file to your MySQL database.
4. Update the database credentials in the db_connect.php file.
5. Install Redis and configure it for session management:
 - Install Redis on your server by following the official Redis documentation.
 - Open the redisdb.php file in the server directory.
 - Update the Redis server configuration details in the redisdb.php file, such as the host, port, and any authentication details if required.
6. Connect to MongoDB Atlas and obtain the connection string:
 - Create a MongoDB Atlas account if you don't have one.
 - Create a new cluster or use an existing one.
 - Click on the "Connect" button for your cluster and select "Connect your application."
 - Copy the connection string provided.
7. Update the MongoDB Atlas connection string in the appropriate files:
 - Open the mongodb.php file in the htdocs directory.
 - Replace the placeholder <your_connection_string> with the actual MongoDB Atlas connection string.
8. Access the web application through the configured web server.
9. Visit the website at [http://guvi.infinityfreeapp.com/](http://guvi.infinityfreeapp.com/) to use the application.

## Usage

1. Open the index.html file in your web browser.
2. Click on the "Signup" button to create a new account.
3. Fill in the registration form and click on the "Signup" button.
4. You will be redirected to the login page. Enter your username and password to log in.
5. After successful login, you will be redirected to the profile page.
6. If you haven't logged out and visit the login page again, you will be automatically redirected to the profile page due to the existing session and cookie.
7. If you stay idle on the profile page for about 5 minutes, your session will expire, and you will be automatically logged out for security reasons.
8. To log out manually, you can click on the "Logout" button, which will clear the session and redirect you to the login page.

## File Structure

- htdocs/
  - css/
    - styles.scss
    - styles.css
  - js/  
    - signup.js
    - login.js
    - profile.js
  - index.html
  - login.html
  - profile.html
  - server/
    - db_connect.php
    - redisdb.php
    - mongodb.php
    - getUserData.php
    - signup.php
    - login.php
    - update.php
  
  - README.md



## Technologies Used
- HTML
- SCSS
- CSS
- Bootstrap 4
- JavaScript
- jQuery
- PHP
- MySQL
- Redisdb
- MongoDB
- Composer

## Author
ANAND B


