<?php
// Database configuration
$servername = "118.139.178.119";
$username = "ghost";
$password = "sv}_or2sbO#N";
$dbname = "cine_nest";    // Change this to your database name

// Create connection with error handling
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500); // Internal Server Error
    die(json_encode(array("error" => "Connection failed: " . $conn->connect_error)));
}

// Set time zone to India Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Sanitize and validate input data
$name = isset($_POST['name']) ? trim($_POST['name']) : null;
$comment = isset($_POST['comment']) ? trim($_POST['comment']) : null;
$movie_name = isset($_POST['movie_name']) ? trim($_POST['movie_name']) : null;
$date = date('Y-m-d H:i:s'); // Current date and time in IST

if (empty($name) || empty($comment) || empty($movie_name)) {
    http_response_code(400); // Bad Request
    die(json_encode(array("error" => "All fields are required.")));
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO comments (name, comment, movie_name, date) VALUES (?, ?, ?, ?)");
if (!$stmt) {
    http_response_code(500); // Internal Server Error
    die(json_encode(array("error" => "Failed to prepare statement: " . $conn->error)));
}

$stmt->bind_param("ssss", $name, $comment, $movie_name, $date);

// Execute the statement
if ($stmt->execute()) {
    echo json_encode(array("success" => "Comment added successfully"));
} else {
    http_response_code(500); // Internal Server Error
    echo json_encode(array("error" => "Failed to execute statement: " . $stmt->error));
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
