<?php
$movieDataFile = 'movie_data2.json';

if (!file_exists($movieDataFile)) {
    die("Movie data file not found.");
}

$movies = json_decode(file_get_contents($movieDataFile), true);

$movieName = $_GET['name'] ?? '';
$movie = $movies[$movieName] ?? null;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($movie['name']); ?> -CineAura</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
     
    <style>
        body {
            background: #f3f4f6;
            color: #111827;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .movie-detail-card {
            background-color: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
        }
        .movie-detail-card img {
            border-radius: 15px;
            max-width: 100%;
            height: auto;
        }
        .movie-detail-card a {
            transition: background-color 0.3s ease;
        }
        .movie-detail-card a:hover {
            background-color: #2563eb;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        .modal-content {
            background: #1f2937;
            padding: 20px;
            border-radius: 12px;
            max-width: 90%;
            width: 100%;
            position: relative;
        }
        .modal iframe {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 8px;
            
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #374151;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .modal-header h2 {
            color: #f3f4f6;
            font-size: 1.5rem;
        }
        .modal-header .close-btn {
            color: #f3f4f6;
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s;
        }
        .modal-header .close-btn:hover {
            color: #ef4444;
        }
        .watch-btn {
            background-color: #3b82f6;
            transition: background-color 0.3s;
        }
        .watch-btn:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-5513442153177853">
</amp-auto-ads>

 
    <div class="movie-detail-card">
        <h1 class="text-4xl font-bold text-blue-700 mb-4"><?php echo htmlspecialchars($movie['name']); ?></h1>
        <img src="<?php echo htmlspecialchars($movie['image_url']); ?>" alt="<?php echo htmlspecialchars($movie['name']); ?>" class="mb-4">
        <div class="flex items-center mb-4">
            <i class="fas fa-calendar-day text-gray-500 mr-2"></i>
            <p><strong>Release Date:</strong> <?php echo htmlspecialchars($movie['release_date']); ?></p>
        </div>
        <div class="flex items-center mb-4">
            <i class="fas fa-star text-yellow-500 mr-2"></i>
            <p><strong>Rating:</strong> <?php echo htmlspecialchars($movie['rating']); ?>/10</p>
        </div>
        <div class="flex items-center mb-4">
            <i class="fas fa-certificate text-green-500 mr-2"></i>
            <p><strong>Age Rating:</strong> <?php echo htmlspecialchars($movie['age_rating']); ?></p>
        </div>
        <div class="flex items-center mb-4">
            <i class="fas fa-clock text-red-500 mr-2"></i>
            <p><strong>Duration:</strong> <?php echo htmlspecialchars($movie['duration']); ?></p>
        </div>
        <div class="flex items-center mb-4">
            <i class="fas fa-video text-purple-500 mr-2"></i>
            <p><strong>Quality:</strong> <?php echo htmlspecialchars($movie['quality']); ?></p>
        </div>
        <div class="mb-4">
            <p><strong>Synopsis:</strong> <?php echo htmlspecialchars($movie['synopsis']); ?></p>
        </div>
        <div class="mb-4">
            <p><strong>Description:</strong> <?php echo htmlspecialchars($movie['description']); ?></p>
        </div>
        <button id="openModal" class="watch-btn hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg inline-flex items-center">
            <i class="fas fa-play mr-2"></i> Watch Now
        </button>
    </div>

    <!-- Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-xl font-semibold"><?php echo htmlspecialchars($movie['name']); ?> - Watch</h2>
                <span id="closeModal" class="close-btn">
                    <i class="fas fa-times"></i>
                </span>
            </div>
            <iframe src="<?php echo htmlspecialchars($movie['video_url']); ?>"allowfullscreen ></iframe>
        </div>
    </div>

    <script>
        document.getElementById('openModal').onclick = function() {
            document.getElementById('videoModal').style.display = 'flex';
        };
        document.getElementById('closeModal').onclick = function() {
            document.getElementById('videoModal').style.display = 'none';
        };
        window.onclick = function(event) {
            if (event.target === document.getElementById('videoModal')) {
                document.getElementById('videoModal').style.display = 'none';
            }
        };
    </script>
</body>
</html>
<?php include "footer.php" ?>