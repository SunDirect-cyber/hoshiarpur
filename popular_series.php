
<?php
// Load and decode the JSON file
$json_file = 'series_data3.json';
if (!file_exists($json_file)) {
    die("Data file not found");
}

$json = file_get_contents($json_file);
$series_data = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular New Series</title>
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
        .series-card {
            transition: all 0.3s ease-in-out;
        }
        .series-card:hover {
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
    <h1 class="text-3xl sm:text-4xl font-extrabold text-center mb-8 sm:mb-12 text-white">Popular New Series</h1>

    <!-- Grid of series -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
        <?php foreach ($series_data as $series): ?>
        <div class="series-card bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 hover:shadow-xl cursor-pointer mb-4 md:mb-6">
            <a href="series1.php?name=<?php echo urlencode($series['name']); ?>">
                <img src="<?php echo htmlspecialchars($series['image_url']); ?>" alt="<?php echo htmlspecialchars($series['name']); ?>" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-white"><?php echo htmlspecialchars($series['name']); ?></h2>
                    <p class="text-sm text-gray-300"><?php echo htmlspecialchars($series['synopsis']); ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

<?php include "footer.php"; ?>
