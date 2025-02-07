
<?php 
$series_name = isset($_GET['name']) ? htmlspecialchars(trim($_GET['name'])) : 'Unknown Series';

// Load series data
$json_file = 'series_data2.json';
if (!file_exists($json_file)) {
    die("Data file not found");
}

$json = file_get_contents($json_file);
$series_data = json_decode($json, true);

$selected_series = array_filter($series_data, function($series) use ($series_name) {
    return $series['name'] === $series_name;
});

if (empty($selected_series)) {
    die("Series not found");
}

$selected_series = array_values($selected_series)[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($selected_series['name']); ?> - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5513442153177853"
     crossorigin="anonymous"></script>
     <link rel="icon" href="g.ico" type="image/x-icon">
     <link rel="shortcut icon" href="g.ico" type="image/x-icon">

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

<div class="container mx-auto mt-8 sm:mt-10 px-4">
    <h1 class="text-3xl sm:text-4xl font-extrabold text-center mb-8 sm:mb-12 text-white"><?php echo htmlspecialchars($selected_series['name']); ?></h1>
    
    <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg mb-6">
        <img src="<?php echo htmlspecialchars($selected_series['image_url']); ?>" alt="<?php echo htmlspecialchars($selected_series['name']); ?>" class="w-full h-64 object-cover">
        <div class="p-4">
            <h2 class="text-2xl font-bold text-white"><?php echo htmlspecialchars($selected_series['name']); ?></h2>
            <p class="text-sm text-gray-300">Release Date: <?php echo htmlspecialchars($selected_series['release_date']); ?></p>
            <p class="text-sm text-gray-300">Rating: <?php echo htmlspecialchars($selected_series['rating']); ?></p>
            <p class="text-sm text-gray-300">Description: <?php echo htmlspecialchars($selected_series['description']); ?></p>
        </div>
    </div>

    <!-- Link to seasons (this assumes you have a seasons endpoint or page) -->
    <a href="seasons.php?series=<?php echo urlencode($selected_series['name']); ?>" class="block text-center text-blue-400 hover:underline">View Seasons</a>
</div>

</body>
</html>

