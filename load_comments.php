<?php
// Database configuration
$servername = "118.139.178.119";
$username = "ghost";
$password = "sv}_or2sbO#N";
$dbname = "cine_nest";

// Create connection with error handling
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array("error" => "Internal server error"));
    exit();
}

// Get movie name from query parameter with security and error handling
if (!isset($_GET['movie_name']) || empty(trim($_GET['movie_name']))) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array("error" => "Invalid or missing movie name"));
    $conn->close();
    exit();
}

$movieName = trim($_GET['movie_name']);

// Prepare the SQL statement to prevent SQL injection
$sql = $conn->prepare("SELECT name, comment, date FROM comments WHERE movie_name = ? ORDER BY date DESC");
if ($sql === false) {
    error_log("SQL preparation failed: " . $conn->error);
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array("error" => "Internal server error"));
    $conn->close();
    exit();
}

// Bind parameters and execute the query with error handling
$sql->bind_param("s", $movieName);
if (!$sql->execute()) {
    error_log("SQL execution failed: " . $sql->error);
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array("error" => "Internal server error"));
    $sql->close();
    $conn->close();
    exit();
}

// Fetch the results and handle any errors
$result = $sql->get_result();
if ($result === false) {
    error_log("Fetching result failed: " . $sql->error);
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array("error" => "Internal server error"));
    $sql->close();
    $conn->close();
    exit();
}

$comments = array();
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

// Send the comments as a JSON response
header('Content-Type: application/json');
echo json_encode($comments);

// Close the statement and connection
$sql->close();
$conn->close();
?>
