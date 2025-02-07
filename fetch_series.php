<?php
$apiKey = "5dbb1be116bbec1789279eecd9222819";
$endpoint = "https://api.themoviedb.org/3/tv/popular?api_key=$apiKey&language=en-US&page=1";

// Fetch popular series data
$response = file_get_contents($endpoint);
if ($response === FALSE) {
    die("Error fetching data from TMDb");
}

$data = json_decode($response, true);

// Store series data in JSON file
$series_data = [];
foreach ($data['results'] as $series) {
    $series_data[] = [
        "name" => $series['name'],
        "release_date" => $series['first_air_date'],
        "quality" => "HD",
        "age_rating" => $series['vote_average'] >= 7 ? "PG-13" : "R",
        "duration" => "N/A",
        "synopsis" => $series['overview'],
        "description" => $series['overview'],
        "image_url" => "https://image.tmdb.org/t/p/w500" . $series['poster_path'],
        "rating" => $series['vote_average'],
        "timestamp" => time()
    ];
}

file_put_contents('series_data3.json', json_encode($series_data, JSON_PRETTY_PRINT));
echo "Series data fetched and stored successfully.";
?>
