<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Determine if the number is even or odd
$parityMessage = ($randomNumber % 2 == 0) ? "even" : "odd";

// Define an array with at least 5 elements
$array = ["titan", "machine spirit", "forge", "engine", "cogitator"];

// Pick a random element from the array
$randomElement = $array[array_rand($array)];

// Create an associative array to hold the response data
$response = [
    "random_number" => $randomNumber,
    "parity" => $parityMessage,
    "random_element" => $randomElement
];

// Set the content type to JSON
header('Content-Type: application/json');

// Return the response as JSON
echo json_encode($response);
?>
