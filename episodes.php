
<?php
// Sanitize and validate input
$series_name = isset($_GET['series']) ? htmlspecialchars(trim($_GET['series'])) : 'Unknown Series';
$season_name = isset($_GET['season']) ? htmlspecialchars(trim($_GET['season'])) : 'Unknown Season';

// Check if the JSON file exists
$json_file = 'episodes_data1.json';
if (!file_exists($json_file)) {
    die("Data file not found");
}

// Load and decode the JSON file
$json = file_get_contents($json_file);
$data = json_decode($json, true);

// Check if the JSON is valid
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error decoding JSON: " . json_last_error_msg());
}

// Check if the series and season exist in the JSON data
if (isset($data[$series_name]['seasons'][$season_name])) {
    $episodes = $data[$series_name]['seasons'][$season_name]['episodes'];
} else {
    die("Season not found or no episodes available");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Watch <?php echo htmlspecialchars($series_name); ?> - <?php echo htmlspecialchars($season_name); ?>. Stream the latest episodes with high-quality video.">
    <meta name="keywords" content="<?php echo htmlspecialchars($series_name); ?> episodes, <?php echo htmlspecialchars($season_name); ?>, watch <?php echo htmlspecialchars($series_name); ?> online, stream episodes, full episodes, HD streaming, series online">
    <meta name="robots" content="index, follow">
    <meta name="google-adsense-account" content="ca-pub-5513442153177853">
    <meta name="monetag" content="822f6949b47906e3f2c504565d101647">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="g.ico" type="image/x-icon">
    <link rel="shortcut icon" href="g.ico" type="image/x-icon">
    <title><?php echo htmlspecialchars($series_name . ' - ' . $season_name); ?> - Full Episodes Streaming</title>

    <!-- Open Graph meta tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($series_name . ' - ' . $season_name); ?> - Full Episodes Streaming">
    <meta property="og:description" content="Watch <?php echo htmlspecialchars($series_name); ?> - <?php echo htmlspecialchars($season_name); ?>. Stream the latest episodes with high-quality video.">
    <meta property="og:image" content="https://cineaura.in/wh.jpeg"> <!-- Replace with actual image URL -->
    <meta property="og:url" content="https://www.cineaura.in/episodes.php">
    <meta property="og:type" content="video.other">

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($series_name . ' - ' . $season_name); ?> - Full Episodes Streaming">
    <meta name="twitter:description" content="Stream the latest episodes of <?php echo htmlspecialchars($series_name); ?> - <?php echo htmlspecialchars($season_name); ?> in high quality.">
    <meta name="twitter:image" content="https://cineaura.in/wh.jpeg"> <!-- Replace with actual image URL -->

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TVSeries",
        "name": "<?php echo htmlspecialchars($series_name); ?>",
        "description": "Watch <?php echo htmlspecialchars($series_name); ?> - <?php echo htmlspecialchars($season_name); ?>. Stream the latest episodes with high-quality video.",
        "url": "https://www.cineaura.in/episodes.php", <!-- Dynamic URL -->
        "image": "https://cineaura.in/wh.jpeg" <!-- Replace with actual image URL -->
    }
    </script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
     
    <style>
        body {
            background-color: #1c1c1e;
            color: #f5f5f7;
        }
        .episode-card {
            transition: all 0.3s ease-in-out;
        }
        .episode-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
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

<div class="container mx-auto mt-8 sm:mt-10 px-4">
    <h1 class="text-3xl sm:text-4xl font-extrabold text-center mb-8 sm:mb-12 text-white">
        <?php echo htmlspecialchars($series_name . ' - ' . $season_name); ?> - Full Episodes
    </h1>

    <!-- SEO-friendly introduction to increase word count -->
    <p class="text-center text-lg text-gray-300 mb-8 px-4 leading-relaxed">
        Welcome to the official streaming page for <?php echo htmlspecialchars($series_name); ?>, season <?php echo htmlspecialchars($season_name); ?>. Enjoy watching every episode of this thrilling series. Each episode is available in high-quality streaming, ensuring you can watch your favorite moments without any interruptions. Whether you're catching up on missed episodes or rewatching your favorite season, <?php echo htmlspecialchars($series_name); ?> is sure to keep you entertained.
    </p>

    <!-- Grid of episodes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
        <?php
        // Iterate over the episodes and display them with vibrant gradients
        $gradients = [
            'from-pink-500 via-red-500 to-yellow-500',
            'from-blue-500 via-green-500 to-teal-500',
            'from-purple-500 via-indigo-500 to-blue-500',
            'from-red-500 via-orange-500 to-yellow-500'
        ];
        $i = 0;
        foreach ($episodes as $episode) {
            $gradient = $gradients[$i % count($gradients)];
            echo '
            <a href="movie.php?name=' . urlencode($episode['name']) . '&video_url=' . urlencode($episode['video_url']) . '&release_date=' . urlencode($episode['release_date']) . '&quality=' . urlencode($episode['quality']) . '&age_rating=' . urlencode($episode['age_rating']) . '&duration=' . urlencode($episode['duration']) . '&synopsis=' . urlencode($episode['synopsis']) . '&description=' . urlencode($episode['description']) . '" class="episode-card bg-gradient-to-br ' . htmlspecialchars($gradient) . ' rounded-lg overflow-hidden shadow-lg transform hover:scale-105 hover:shadow-xl cursor-pointer mb-4 md:mb-6">
                <div class="p-4 sm:p-6">
                    <div class="text-base sm:text-lg font-semibold text-white mb-1 sm:mb-2">
                        <i class="fas fa-play-circle"></i> ' . htmlspecialchars($episode['name']) . '
                    </div>
                    <p class="text-sm sm:text-base text-gray-100">
                        <i class="fas fa-film"></i> Watch Now - Full HD Streaming
                    </p>
                </div>
            </a>';
            $i++;
        }
        ?>
    </div>

    <!-- Extra SEO-friendly content -->
    <div class="mt-10 text-gray-400">
        <h2 class="text-2xl font-semibold text-white mb-4">About <?php echo htmlspecialchars($series_name); ?> - <?php echo htmlspecialchars($season_name); ?></h2>
        <p class="mb-4">
            <?php echo htmlspecialchars($series_name); ?> is a critically acclaimed series that has captured the hearts of audiences worldwide. Season <?php echo htmlspecialchars($season_name); ?> continues the saga with even more twists, turns, and drama. The episodes in this season dive deeper into the characters' stories, unveiling new secrets and building up to an unforgettable finale. Don’t miss out on this binge-worthy season that is sure to keep you on the edge of your seat.
        </p>
        <p>
            Streaming is available in high quality, with options for various resolutions to match your device and internet speed. You can watch episodes directly here at CineAura, your number one platform for streaming TV series and movies. Dive into the action now and enjoy uninterrupted streaming of every episode of <?php echo htmlspecialchars($series_name); ?> - <?php echo htmlspecialchars($season_name); ?>.
        </p>
    </div>

</div>
</body>
</html>

<?php include "footer.php"; ?>
