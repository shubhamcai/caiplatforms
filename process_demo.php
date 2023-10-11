<?php
// Initialize a variable to track the success status
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $company = $_POST["company"];
    $jobRole = $_POST["jobRole"];
    $demoDate = $_POST["demoDate"];
    $demoTime = $_POST["demoTime"];
    $interest = $_POST["interest"];
    $projectDetails = $_POST["projectDetails"];

    // You can now process the data as needed, for example, you can send it to a database, save it to a file, or send it via email.

    // For demonstration purposes, let's assume the data was successfully processed.
    $success = true;
}

// Set the response header to indicate JSON content
header('Content-Type: application/json');

// Prepare a response array
$response = array();

if ($success) {
    // If the data was successfully processed, send a success message
    $response['status'] = 'success';
    $response['message'] = 'Form data was successfully processed.';
} else {
    // If there was an error or if the form hasn't been submitted, send an error message
    $response['status'] = 'error';
    $response['message'] = 'Form data processing failed.';
}

// Encode the response array as JSON and send it
echo json_encode($response);
?>
