<?php
 require 'db_connect.php';
 require 'mongodb.php';
 echo 'Request method: ' . $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    // validate input data
    if (empty($username) || empty($password) || empty($email)) {
        echo 'Please fill all fields';
    } else {
        
        // prepare SQL statement
        
        $stmt = $conn->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $username, $password, $email);
        
        /*
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $email);
        */
        // execute SQL statement
        $mysqlInsert = $stmt->execute();
        
        // store user data in MongoDB collection
        
        $user_data = array('username' => $username, 'email' => $email);
        $mongoInsert = $mongoCollection->insertOne($user_data);
        
        if ($mysqlInsert && $mongoInsert->getInsertedCount() > 0) {
            echo 'Signup successful';
        } else {
            echo 'Signup failed';
        }
        
        $stmt->close();
        $conn->close();
    }
}
?>
