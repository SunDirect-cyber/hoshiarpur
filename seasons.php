
<?php
// Sanitize and validate input
$series_name = isset($_GET['series']) ? htmlspecialchars(trim($_GET['series'])) : 'Unknown Series';

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

// Check if the series exists in the JSON data
if (isset($data[$series_name]['seasons'])) {
    $seasons = $data[$series_name]['seasons'];
} else {
    die("Series not found or no seasons available");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover seasons of <?php echo htmlspecialchars($series_name); ?>. Explore detailed information and episodes for each season.">
    <meta name="keywords" content="<?php echo htmlspecialchars($series_name); ?> seasons, explore <?php echo htmlspecialchars($series_name); ?>, watch <?php echo htmlspecialchars($series_name); ?> episodes, series seasons, streaming <?php echo htmlspecialchars($series_name); ?>">
    <meta name="robots" content="index, follow">
    <meta name="google-adsense-account" content="ca-pub-5513442153177853">
    <meta name="monetag" content="822f6949b47906e3f2c504565d101647">

    <title><?php echo htmlspecialchars($series_name); ?> - Seasons Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    
    <style>
        body {
            background-color: #1c1c1e;
            color: #f5f5f7;
        }
        .season-card {
            transition: all 0.3s ease-in-out;
        }
        .season-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
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
    
    
     <!-- Background Audio -->
    <audio autoplay loop>
        <source src="https://cdn.pixabay.com/audio/2023/11/24/audio_9fa575c6db.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

<div class="container mx-auto mt-8 sm:mt-10 px-4">
    <h1 class="text-3xl sm:text-4xl font-extrabold text-center mb-8 sm:mb-12 text-white">
        Seasons of <?php echo htmlspecialchars($series_name); ?>
    </h1>

    <!-- SEO-friendly introduction -->
    <p class="text-center text-lg text-gray-300 mb-8 px-4 leading-relaxed">
        Explore all seasons of <?php echo htmlspecialchars($series_name); ?>. Each season is packed with thrilling episodes that keep you on the edge of your seat. Select a season below to view its episodes and enjoy high-quality streaming directly from CineAura.
    </p>

    <!-- Grid of seasons -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
        <?php
        // Iterate over the seasons and display them with vibrant gradients
        $gradients = [
            'from-pink-500 via-red-500 to-yellow-500',
            'from-blue-500 via-green-500 to-teal-500',
            'from-purple-500 via-indigo-500 to-blue-500',
            'from-red-500 via-orange-500 to-yellow-500'
        ];
        $i = 0;
        foreach ($seasons as $season_name => $season_data) {
            $gradient = $gradients[$i % count($gradients)];
            echo '
            <a href="episodes.php?series=' . urlencode($series_name) . '&season=' . urlencode($season_name) . '" class="season-card bg-gradient-to-br ' . htmlspecialchars($gradient) . ' rounded-lg overflow-hidden shadow-lg transform hover:scale-105 hover:shadow-xl cursor-pointer mb-4 md:mb-6">
                <div class="p-4 sm:p-6">
                    <div class="text-base sm:text-lg font-semibold text-white mb-1 sm:mb-2">
                        <i class="fas fa-calendar-alt"></i> ' . htmlspecialchars($season_name) . '
                    </div>
                    <p class="text-sm sm:text-base text-gray-100">
                        <i class="fas fa-tv"></i> View Episodes
                    </p>
                </div>
            </a>';
            $i++;
        }
        ?>
    </div>

    <!-- Extra SEO-friendly content -->
    <div class="mt-10 text-gray-400">
        <h2 class="text-2xl font-semibold text-white mb-4">About <?php echo htmlspecialchars($series_name); ?></h2>
        <p class="mb-4">
            <?php echo htmlspecialchars($series_name); ?> is a popular series that has captivated audiences with its engaging storylines and memorable characters. Each season introduces new elements and deepens the overall narrative, making it a must-watch for fans. Explore each season to see how the story unfolds and to catch up on any episodes you might have missed.
        </p>
        <p>
            Enjoy streaming all episodes from each season directly here on CineAura. With high-quality video and seamless streaming, you can watch your favorite series anytime, anywhere.
        </p>
    </div>

</div>
</body>
</html>

<?php include "footer.php"; ?>
