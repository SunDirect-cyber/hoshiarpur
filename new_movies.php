<?php
// Your TMDb API key
$apiKey = "5dbb1be116bbec1789279eecd9222819";

// Initialize cURL
$curl = curl_init();

// Endpoint to fetch popular movies
$apiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey";

curl_setopt_array($curl, [
    CURLOPT_URL => $apiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// Associative array to map movie titles to Terabox video links, age ratings, and durations
$videoLinks = [
    "Deadpool & Wolverine" => [
        "video_url" => "https://1024terabox.com/sharing/embed?surl=1q9dErE61JQZe0hFW-MwSA&resolution=1080&autoplay=true&mute=false&uk=4400155505010&fid=192969038263428&slid=",
        "age_rating" => "PG-13",
        "duration" => "120 min"
    ],
  "Borderlands" => [
    "video_url" => "https://1024terabox.com/sharing/embed?surl=mQmyBNRLGHfgbtyC7RtUdA&resolution=720&autoplay=true&mute=false&uk=4400155505010&fid=927046090347776&slid=" ,
    "age_rating" => "R",
    "duration" => "120 minutes"
],

    "" => [
        "video_url" => "",
        "age_rating" => "",
        "duration" => ""
    ],
    // Add more mappings here for each movie
];

// File to store movie data
$movieDataFile = 'movie_data2.json';

// Decode existing data or initialize an empty array if file doesn't exist
$storedMovies = file_exists($movieDataFile) ? json_decode(file_get_contents($movieDataFile), true) ?? [] : [];

// Handle API response and store movie data
if ($err) {
    echo "<div class='bg-red-600 text-white p-4 rounded-lg mb-4 flex items-center'><i class='fas fa-exclamation-circle text-2xl mr-2'></i><strong>Error:</strong> $err</div>";
} else {
    $moviesData = json_decode($response, true);

    if (!empty($moviesData['results'])) {
        foreach ($moviesData['results'] as $movie) {
            $movieName = $movie['title'];
            $releaseDate = date('d-m-Y', strtotime($movie['release_date']));
            $posterPath = "https://image.tmdb.org/t/p/w500" . $movie['poster_path'];
            $rating = $movie['vote_average'];
            $overview = $movie['overview'];

            $videoUrl = $videoLinks[$movieName]['video_url'] ?? "#";
            $ageRating = $videoLinks[$movieName]['age_rating'] ?? "Not Rated";
            $duration = $videoLinks[$movieName]['duration'] ?? "Unknown";

            $description = strlen($overview) > 250 ? $overview : str_pad($overview, 250, " Further details about the movie...");

            $movieArray = [
                "name" => $movieName,
                "video_url" => $videoUrl,
                "release_date" => $releaseDate,
                "quality" => "HD",
                "age_rating" => $ageRating,
                "duration" => $duration,
                "synopsis" => $overview,
                "description" => $description,
                "image_url" => $posterPath,
                "rating" => $rating,
                "timestamp" => date('c') // ISO 8601 timestamp
            ];

            $storedMovies[$movieName] = $movieArray;
        }

        file_put_contents($movieDataFile, json_encode($storedMovies, JSON_PRETTY_PRINT));
    }
}
?>
<?php
// Redirect to coming.php
header("Location: coming.php");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-5513442153177853">
    <meta name="monetag" content="822f6949b47906e3f2c504565d101647">
    <title>New Movies - CineAura</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <link rel="icon" href="g.ico" type="image/x-icon">
      <link rel="shortcut icon" href="g.ico" type="image/x-icon">


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5513442153177853"
     crossorigin="anonymous"></script>
     
     <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
     
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X56SVDEYBK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X56SVDEYBK');
</script>
     
</head>
<body>
    
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-5513442153177853">
</amp-auto-ads>
    
     <!-- Background Audio -->
    <audio autoplay loop>
        <source src="https://cdn.pixabay.com/audio/2023/11/24/audio_9fa575c6db.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    
    <!-- Page Content -->
    <div class="container mx-auto mt-8 p-4">
        <h1 class="text-5xl font-extrabold text-center mb-10 text-white">Popular New Movies</h1>

        <?php
        if ($err) {
            echo "<div class='bg-red-600 text-white p-4 rounded-lg mb-4 flex items-center'><i class='fas fa-exclamation-circle text-2xl mr-2'></i><strong>Error:</strong> $err</div>";
        } else {
            if (!empty($storedMovies)) {
                echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6'>";
                foreach ($storedMovies as $movie) {
                    $encodedMovieName = urlencode($movie['name']);
                    echo "<a href='movie1.php?name=$encodedMovieName' class='movie-card'>";
                    echo "<img src='{$movie['image_url']}' alt='{$movie['name']}' class='w-full movie-poster'>";
                    echo "<div class='p-6'>";
                    echo "<h2 class='text-2xl movie-title mb-3'>{$movie['name']}</h2>";
                    echo "<p class='text-lg movie-release-date mb-2'><i class='fas fa-calendar-alt mr-2'></i><strong>Release Date:</strong> {$movie['release_date']}</p>";
                    echo "<p class='text-gray-700 movie-overview mb-2'><strong>Overview:</strong> {$movie['synopsis']}</p>";
                    echo "<p class='flex items-center text-lg movie-rating'><i class='fas fa-star mr-2'></i><strong>Rating:</strong> {$movie['rating']}/10</p>";
                    echo "</div>";
                    echo "</a>";
                }
                echo "</div>";
            } else {
                echo "<p class='text-gray-700 text-center'>No movies found.</p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include "footer.php" ?>