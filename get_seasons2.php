<?php
// get_seasons.php
header('Content-Type: application/json');

$series_name = isset($_GET['name']) ? $_GET['name'] : 'Unknown Series';

// Load the JSON file
$json = file_get_contents('anime_episodes.json');
$data = json_decode($json, true);

// Check if the series exists in the JSON data
if (isset($data[$series_name])) {
    echo json_encode($data[$series_name]['seasons']);
} else {
    echo json_encode([]);
}
?>
