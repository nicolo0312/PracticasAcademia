<?php
include "./vendor/autoload.php";

$conn= new MongoDB\Client("mongodb://127.00.1");

$collection = (new MongoDB\Client)->test->users;
$collection= $conn->nicolo->usuario;

// $insertOneResult = $collection->insertOne([
//     'username' => 'nicolo',
//     'email' => 'admin@example.com',
//     'name' => 'Admin User',
// ]);

//printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

//var_dump($insertOneResult->getInsertedId());

//$argumento= array('mensaje'=> 'este es un mensaje');

//$insertOneResult=$collection->insertOne($argumento);

$deleteResult = $collection->deleteOne(['mensaje' => 'este es un mensaje']);

printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());


