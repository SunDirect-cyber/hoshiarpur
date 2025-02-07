<?php
header('Content-Type: application/json');

// Pagination parameters
$items_per_page = 16;
$current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

// Get search query
$search_query = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';

// Fetch JSON data
$movie_json = file_get_contents('movie_data.json');
$series_json = file_get_contents('series_data.json');
$movie_json1 = file_get_contents('movie_data4.json');
$series_json2 = file_get_contents('series_data4.json');

// Decode JSON data
$movies = json_decode($movie_json, true) ?? [];
$series = json_decode($series_json, true) ?? [];
$movies1 = json_decode($movie_json1, true) ?? [];
$series2 = json_decode($series_json2, true) ?? [];

// Add source flags
foreach ($movies as &$movie) {
    $movie['source'] = 'movie';
}
foreach ($movies1 as &$movie1) {
    $movie1['source'] = 'movie2';
}
foreach ($series as &$ser) {
    $ser['source'] = 'series';
}
foreach ($series2 as &$ser2) {
    $ser2['source'] = 'series2';
}

// Combine all content
$content = array_merge($series, $series2);

// Filter content based on search query
if ($search_query !== '') {
    $filtered_content = array_filter($content, function($item) use ($search_query) {
        return (
            stripos($item['name'] ?? '', $search_query) !== false ||
            stripos($item['synopsis'] ?? '', $search_query) !== false ||
            stripos($item['description'] ?? '', $search_query) !== false
        );
    });
    $filtered_content = array_values($filtered_content); // Reset array keys
} else {
    $filtered_content = $content;
}

// Sort by timestamp
usort($filtered_content, function($a, $b) {
    $aTimestamp = $a['timestamp'] ?? 0;
    $bTimestamp = $b['timestamp'] ?? 0;
    return $bTimestamp <=> $aTimestamp;
});

// Pagination calculations
$total_items = count($filtered_content);
$total_pages = max(1, ceil($total_items / $items_per_page));
$current_page = min($current_page, $total_pages); // Ensure current page doesn't exceed total pages
$start_index = ($current_page - 1) * $items_per_page;

// Get items for current page
$paginated_content = array_slice($filtered_content, $start_index, $items_per_page);

// Generate HTML for content
$html = '';
foreach ($paginated_content as $item) {
    // Determine the appropriate link
    if ($item['source'] === 'movie') {
        $link = 'movie.php';
    } elseif ($item['source'] === 'movie2') {
        $link = 'movie2.php';
    } elseif ($item['source'] === 'series') {
        $link = 'series.php';
    } else {
        $link = 'series2.php';
    }

    // Prepare URL parameters
    $params = http_build_query([
        'name' => $item['name'] ?? 'Unknown',
        'video_url' => base64_encode($item['video_url'] ?? ''),
        'video_720url' => base64_encode($item['video_720url'] ?? ''),
        'video_1080url' => base64_encode($item['video_1080url'] ?? ''),
        'video_1560url' => base64_encode($item['video_1560url'] ?? ''),
        'video_1440url' => base64_encode($item['video_1440url'] ?? ''),
        'video_2160url' => base64_encode($item['video_2160url'] ?? ''),
        'video_840url' => base64_encode($item['video_840url'] ?? ''),
        'release_date' => $item['release_date'] ?? '',
        'quality' => $item['quality'] ?? '',
        'age_rating' => $item['age_rating'] ?? '',
        'duration' => $item['duration'] ?? '',
        'synopsis' => $item['synopsis'] ?? '',
        'description' => $item['description'] ?? ''
    ]);

    $html .= '
    <div class="content-card">
        <a href="' . $link . '?' . $params . '" class="content-link">
            <div class="poster-wrapper">
                <img src="' . htmlspecialchars($item['image_url'] ?? 'default-image.jpg') . '" 
                     class="poster-image" 
                     alt="' . htmlspecialchars($item['name']) . '">
                <div class="title-overlay">
                    <h3 class="content-title">' . htmlspecialchars($item['name']) . '</h3>
                </div>
            </div>
            
            <div class="synopsis-wrapper">
                <p class="synopsis-text">' . htmlspecialchars($item['synopsis'] ?? 'No synopsis available') . '</p>
            </div>

            <div class="meta-info">
                <span class="meta-item">
                    <i class="fas fa-star rating-icon"></i>
                    ' . htmlspecialchars($item['rating'] ?? 'N/A') . '
                </span>
                <span class="meta-item">
                    <i class="fas fa-clock duration-icon"></i>
                    ' . htmlspecialchars($item['duration'] ?? '') . '
                </span>
            </div>
        </a>
    </div>';
}

// Generate pagination HTML
$pagination_html = '';
if ($total_pages > 1) {
    $pagination_html .= '<div class="pagination justify-content-center mt-4">';
    
    // Previous button
    $prev_disabled = $current_page <= 1 ? ' disabled' : '';
    $pagination_html .= '<li class="page-item' . $prev_disabled . '">
        <a class="page-link" href="#" data-page="' . ($current_page - 1) . '" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>';

    // Page numbers
    for ($i = 1; $i <= $total_pages; $i++) {
        $active = $i === $current_page ? ' active' : '';
        $pagination_html .= '<li class="page-item' . $active . '">
            <a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a>
        </li>';
    }

    // Next button
    $next_disabled = $current_page >= $total_pages ? ' disabled' : '';
    $pagination_html .= '<li class="page-item' . $next_disabled . '">
        <a class="page-link" href="#" data-page="' . ($current_page + 1) . '" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>';
    
    $pagination_html .= '</div>';
}

// Return JSON response
echo json_encode([
    'html' => $html,
    'pagination' => $pagination_html,
    'total_items' => $total_items,
    'current_page' => $current_page,
    'total_pages' => $total_pages
]);