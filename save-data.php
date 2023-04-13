<?php
// Get the data from the request body
$data = file_get_contents("php://input");

// Decode the JSON data
$jsonData = json_decode($data);

// Encode the JSON data with pretty formatting
$encodedData = json_encode($jsonData, JSON_PRETTY_PRINT);

// Write the data to the file
$file = fopen("data.json", "w");
fwrite($file, $encodedData);
fclose($file);

// Send a response indicating success
header("Content-Type: application/json");
echo json_encode(array("status" => "success"));
?>

