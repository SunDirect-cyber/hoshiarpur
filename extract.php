<?php

$api_key = '5dbb1be116bbec1789279eecd9222819';
$url = 'https://api.themoviedb.org/3/movie/1393614-suspicion?api_key=' . $api_key;

$response = file_get_contents($url);
$data = json_decode($response, true);

print_r($data);

?>
