<?php
// MongoDB connection parameters
$host = 'localhost';
$port = 27017;
$database = 'mydatabase';

try {
    // MongoDB connection parameters
    $host = 'localhost';
    $port = 27017;
    $database = 'admin';

    // Connect to MongoDB server
    $connection = new MongoDB\Driver\Manager("mongodb://$host:$port");
    // Check if the database already exists
  $collectionName = "users"; // Replace 'users' with the name of the collection you want to check
// r start
$command = new MongoDB\Driver\Command([
    'listCollections' => 1,
    'filter' => ['name' => $collectionName],
]);

// Execute the command
$cursor = $connection->executeCommand($database, $command);
$collections = $cursor->toArray();
//echo'<pre>';print_r($collections);die("silly");
// Check if the collection exists
$collectionExists = false;
foreach ($collections as $collection) {
    if ($collection->name === $collectionName) {
        $collectionExists = true;
        break;
    }
}

if (!$collectionExists) {
      $createDatabase = new MongoDB\Driver\Command(["create" => $collectionName]);
$connection->executeCommand('admin', $createDatabase);
             echo 'Database created successfully.';
 
}  
  
} catch (Exception $e) {
    echo 'Connection error: ' . $e->getMessage();
}




?>
