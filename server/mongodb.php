<?php
require 'vendor/autoload.php';


try {
    // Create MongoDB client
    $mongoClient = new MongoDB\Client("mongodb+srv://PartlyDev:Devo9009@cluster0.tdb09cf.mongodb.net/");
    $mongoDatabaseName = 'mydb';
    $collection = 'users';
    // Select the database and collection
    $mongoDatabase = $mongoClient->selectDatabase($mongoDatabaseName);
    $mongoCollection = $mongoDatabase->selectCollection($collection);

} 
 catch (Exception $e) {
    echo "An error occurred. Error: " . $e->getMessage();
}
?>
