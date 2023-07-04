<?php
// MongoDB connection parameters
$host = 'localhost';
$port = 27017;
$database = 'mydatabase';

// Connect to MongoDB server
$connection = new MongoDB\Driver\Manager("mongodb://$host:$port");

// Check if the connection was successful
if ($connection) {
    return 'Connected to MongoDB successfully.';
} else {
    return 'Failed to connect to MongoDB.';
    exit;
}
?>
