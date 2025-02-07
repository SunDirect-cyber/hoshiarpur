<?php
header('Content-Type: application/xml');

function generate_url($loc, $lastmod, $changefreq, $priority) {
    return '
    <url>
        <loc>' . htmlspecialchars($loc) . '</loc>
        <lastmod>' . $lastmod . '</lastmod>
        <changefreq>' . $changefreq . '</changefreq>
        <priority>' . $priority . '</priority>
    </url>';
}

$base_url = "https://cineaura.in/";
$files = [
    // List of files
    'episode.php',
    'episodes_data.json',
    'footer.php',
    'get_seasons.php',
    'header.php',
    'home.php',
    'index.php',
    'indianhub.php',
    'load_comments.php',
    'movie.php',
    'movie_data.json',
    'movie_data1.json',
    'movies.php',
    'new_movies.php',
    'privacy.php',
    'search.php',
    'search1.php',
    'search2.php',
    'search3.php',
    'series.php',
    'series_data.json',
    'series_data1.json',
    'submit_comment.php',
    'terms.php',
    'webseries.php'
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
/* echo '<?xml-stylesheet type="text/xsl" href="sitemap.xsl"?>'; */
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';


foreach ($files as $file) {
    $lastmod = date('Y-m-d', filemtime($file));
    $changefreq = "monthly";
    $priority = "0.5";

    if (strpos($file, 'index.php') !== false || strpos($file, 'home.php') !== false) {
        $priority = "1.0";
        $changefreq = "daily";
    } elseif (strpos($file, '.php') !== false) {
        $priority = "0.7";
    } elseif (strpos($file, '.json') !== false || strpos($file, '.txt') !== false) {
        $priority = "0.3";
    }

    $loc = $base_url . $file;
    echo generate_url($loc, $lastmod, $changefreq, $priority);
}

echo '</urlset>';
?>
