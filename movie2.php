<!doctypehtml>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width,initial-scale=1"name="viewport">
      <meta content="Watch<?php echo htmlspecialchars($_GET['description']); ?>on CineAura. Enjoy high-quality streaming of your favorite movies and series, including new films, web series, and the latest releases."name="description">
      <meta content="<?php echo htmlspecialchars($_GET['name']); ?>, new films, streaming, new movies, latest movies, web series, series movies, CineAura, top-rated movies, movie releases, new entertainment movies, action romance movies, streaming thrillers"name="keywords">
      <meta content="ca-pub-5513442153177853"name="google-adsense-account">
      <meta content="822f6949b47906e3f2c504565d101647"name="monetag">
      <title><?php echo htmlspecialchars($_GET['name']); ?>- CineAura | Stream Latest Movies and Series</title>
      <link href="g.ico"rel="icon"type="image/x-icon">
      <link href="g.ico"rel="shortcut icon"type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="canonical" href="<?php echo htmlspecialchars($_GET['canoncial']); ?>" />
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5513442153177853"
     crossorigin="anonymous"></script>
   </head>
<body style="background-color: #1a1a1a; color: #f8f9fa; font-family: 'Arial', sans-serif;">    
   <header>
  <nav class="bg-gradient navbar navbar-dark navbar-expand-lg" 
        style="background: linear-gradient(to right, #343a40, #495057, #6c757d); box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <!-- Back Button -->
        <a class="d-flex align-items-center justify-content-center btn btn-light rounded-circle shadow" 
           href="javascript:history.back()" aria-label="Go back">
            <i class="fas fa-arrow-left h-6 fs-4" style="color: #007bff;"></i>
        </a>

        <!-- Logo -->
        <a class="fw-bold ms-4 navbar-brand" href="home.php">
            <span style="background: linear-gradient(to right, #007bff, #495057, #6c757d); 
                         -webkit-background-clip: text; color: transparent;">
               CineAura
            </span>
        </a>

        <!-- Navbar Toggle Button -->
        <button class="navbar-toggler" type="button" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation" 
                data-bs-target="#navbarNav" data-bs-toggle="collapse">
            <i class="fas fa-bars text-white h-8 w-8"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="ms-auto navbar-nav">
                <!-- Movies & Series Section -->
                <li class="dropdown nav-item">
                    <a class="fw-bold dropdown-toggle nav-link" href="#" aria-expanded="false" 
                       data-bs-toggle="dropdown" id="moviesDropdown" role="button">
                       <i class="fas fa-film me-2" style="color: #007bff;"></i> Movies & Series
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="moviesDropdown" style="background: linear-gradient(to right, #343a40, #495057, #6c757d);">
                        <li><a class="text-white dropdown-item" href="watch_latest_online_series">
                            <i class="fas fa-tv me-2"></i> Web Series</a></li>
                        <li><a class="text-white dropdown-item" href="latest_movies">
                            <i class="fas fa-film me-2"></i> Movies</a></li>
                        <li><a class="text-white dropdown-item" href="stream_latest_indian_movies_and_series_online">
                            <i class="fas fa-flag me-2"></i> IndianHub</a></li>
                    </ul>
                </li>

                <!-- Community Section -->
                <li class="dropdown nav-item">
                    <a class="fw-bold dropdown-toggle nav-link" href="#" aria-expanded="false" 
                       data-bs-toggle="dropdown" id="communityDropdown" role="button">
                       <i class="fas fa-users me-2" style="color: #007bff;"></i> Community
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="communityDropdown" style="background: linear-gradient(to right, #343a40, #495057, #6c757d);">
                        <li><a class="text-white dropdown-item" href="https://t.me/+1XArYdMUk4dlMGM1" target="_blank">
                            <i class="fab fa-telegram me-2"></i> Join Telegram</a></li>
                        <li><a class="text-white dropdown-item" href="#">
                            <i class="fab fa-facebook me-2"></i> Facebook</a></li>
                        <li><a class="text-white dropdown-item" href="#">
                            <i class="fab fa-instagram me-2"></i> Instagram</a></li>
                    </ul>
                </li>
            

               <!-- What's New Section -->
<li class="dropdown nav-item">
    <a class="fw-bold dropdown-toggle nav-link" href="#" aria-expanded="false" 
       data-bs-toggle="dropdown" id="whatsNewDropdown" role="button" style="font-family: 'Arial', sans-serif; color: #f8f9fa;">
       <i class="fas fa-star me-2" style="color: #ffc107;"></i> What's New
    </a>
    <ul class="dropdown-menu" aria-labelledby="whatsNewDropdown" style="background: linear-gradient(to right, #343a40, #495057, #6c757d);">
        <li><a class="dropdown-item" href="popular_new_movies" style="color: #f8f9fa; text-decoration: none; transition: text-decoration 0.3s ease;">
            <i class="fas fa-star me-2" style="color: #ffc107;"></i> New Movies</a></li>
    </ul>
</li>

            </ul>
         </div>
      </div>
   </nav>
</header>
  <div id="main-content">
    <h1 class="text-white fw-bold mb-4 display-5 mb-md-6 text-center" style="background:linear-gradient(to right,#34d399,#3b82f6,#8b5cf6);-webkit-background-clip:text;color:transparent">
        Watch <span class="movie-title"><?php echo htmlspecialchars($_GET['name']); ?></span> - New Movies and Series on CineAura
    </h1>
</div>

<style>
    #main-content {
        padding: 20px;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1.2;
        text-align: center;
        color: #333;
        background: linear-gradient(to right, #34d399, #3b82f6, #8b5cf6);
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 20px;
    }

    .movie-title {
        color: #3b82f6; /* You can customize this color to fit your theme */
        font-weight: bold;
    }
</style>
<?php
// Decode and sanitize video URL parameters
$video_url = base64_decode($_GET['video_url'] ?? '');
$video_720url = base64_decode($_GET['video_720url'] ?? '');
$video_1080url = base64_decode($_GET['video_1080url'] ?? '');
$video_1560url = base64_decode($_GET['video_1560url'] ?? '');
$video_1440url = base64_decode($_GET['video_1440url'] ?? '');
$video_2160url = base64_decode($_GET['video_2160url'] ?? '');
$video_840url = base64_decode($_GET['video_840url'] ?? '');

// Determine available qualities
$qualities = [];
if ($video_url) $qualities[480] = htmlspecialchars($video_url);
if ($video_720url) $qualities[720] = htmlspecialchars($video_720url);
if ($video_1080url) $qualities[1080] = htmlspecialchars($video_1080url);
if ($video_1560url) $qualities[1560] = htmlspecialchars($video_1560url);
if ($video_1440url) $qualities[1440] = htmlspecialchars($video_1440url);
if ($video_2160url) $qualities[2160] = htmlspecialchars($video_2160url);
if ($video_840url) $qualities[840] = htmlspecialchars($video_840url);
?>

<!-- Modern UI Dependencies -->
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

<style>
    :root {
        --primary-color: #3498db;
        --hover-color: #2980b9;
        --background-dark: rgba(0, 0, 0, 0.85);
        --text-light: #ffffff;
        --border-radius: 12px;
        --transition-speed: 0.3s;
    }

    .movie-player-container {
        position: relative;
        max-width: 1200px;
        margin: 2rem auto;
        background: var(--background-dark);
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
    }

    .plyr {
        --plyr-color-main: var(--primary-color);
        --plyr-video-controls-background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
        --plyr-menu-background: var(--background-dark);
        --plyr-menu-border-radius: var(--border-radius);
    }

    .plyr--video {
        border-radius: var(--border-radius);
        overflow: hidden;
    }

    /* Custom Quality Button */
    .quality-control {
        position: relative;
        display: inline-flex;
        align-items: center;
        padding: 8px 16px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 6px;
        color: var(--text-light);
        font-weight: 500;
        cursor: pointer;
        transition: all var(--transition-speed);
    }

    .quality-control:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .quality-control i {
        margin-right: 8px;
        font-size: 1.1em;
    }

    /* Quality Menu */
    .quality-menu {
        position: absolute;
        bottom: 100%;
        left: 0;
        min-width: 160px;
        margin-bottom: 8px;
        background: var(--background-dark);
        border-radius: var(--border-radius);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transform: translateY(10px);
        transition: all var(--transition-speed);
        pointer-events: none;
    }

    .quality-menu.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: all;
    }

    .quality-menu button {
        width: 100%;
        padding: 12px 16px;
        color: var(--text-light);
        background: transparent;
        border: none;
        text-align: left;
        cursor: pointer;
        transition: background var(--transition-speed);
    }

    .quality-menu button:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    /* Loading Animation */
    .loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--background-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .loading-spinner {
        width: 40px;
        height: 40px;
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top-color: var(--primary-color);
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .movie-player-container {
            margin: 1rem;
            border-radius: calc(var(--border-radius) / 2);
        }

        .quality-control {
            padding: 6px 12px;
        }
    }
</style>

<div class="movie-player-container">
    <div class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>
    
    <video id="moviePlayer" class="plyr" preload="none" controls>
        <?php if ($video_url): ?>
            <source src="<?php echo $qualities[480] ?? ''; ?>" type="video/mp4">
        <?php endif; ?>
        <p>Your browser does not support the video tag.</p>
    </video>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const playerElement = document.getElementById('moviePlayer');
    const qualityOptions = {
        480: "<?php echo $qualities[480] ?? ''; ?>",
        720: "<?php echo $qualities[720] ?? ''; ?>",
        1080: "<?php echo $qualities[1080] ?? ''; ?>",
        1440: "<?php echo $qualities[1440] ?? ''; ?>",
        2160: "<?php echo $qualities[2160] ?? ''; ?>",
        840: "<?php echo $qualities[840] ?? ''; ?>",
        1560: "<?php echo $qualities[1560] ?? ''; ?>"
    };

    // Initialize Plyr with custom options
    const player = new Plyr(playerElement, {
        controls: [
            'play-large',
            'rewind',
            'play',
            'fast-forward',
            'progress',
            'current-time',
            'duration',
            'mute',
            'volume',
            'captions',
            'settings',
            'pip',
            'airplay',
            'fullscreen'
        ],
        settings: ['captions', 'speed'],
        speed: { selected: 1, options: [0.5, 0.75, 1, 1.25, 1.5, 2] },
        tooltips: { controls: true, seek: true },
        keyboard: { focused: true, global: true }
    });

    // Load preferred quality
    const preferredQuality = localStorage.getItem('preferredQuality');
    if (preferredQuality && qualityOptions[preferredQuality]) {
        playerElement.src = qualityOptions[preferredQuality];
    } else {
        playerElement.src = qualityOptions[480];
    }

    // Create custom quality button
    const qualityControl = document.createElement('button');
    qualityControl.className = 'quality-control';
    qualityControl.innerHTML = '<i class="fas fa-cog"></i> Quality';

    const qualityMenu = document.createElement('div');
    qualityMenu.className = 'quality-menu';

    // Add quality options
    Object.entries(qualityOptions).forEach(([quality, url]) => {
        if (url) {
            const option = document.createElement('button');
            option.textContent = `${quality}p`;
            option.addEventListener('click', () => {
                const currentTime = player.currentTime;
                playerElement.src = url;
                player.currentTime = currentTime;
                player.play();
                localStorage.setItem('preferredQuality', quality);
                qualityMenu.classList.remove('active');
            });
            qualityMenu.appendChild(option);
        }
    });

    // Toggle quality menu
    qualityControl.addEventListener('click', (e) => {
        e.stopPropagation();
        qualityMenu.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', () => {
        qualityMenu.classList.remove('active');
    });

    // Add quality control to player
    player.elements.controls.appendChild(qualityControl);
    qualityControl.appendChild(qualityMenu);

    // Hide loading overlay when ready
    player.on('ready', () => {
        document.querySelector('.loading-overlay').style.display = 'none';
    });

    // Prevent right-click
    playerElement.addEventListener('contextmenu', (e) => e.preventDefault());
});
</script>
<?php 
// Helper functions remain the same as before
function getFileSize($url) {
    $headers = @get_headers($url, 1);
    if ($headers !== false && isset($headers['Content-Length'])) {
        $size = is_array($headers['Content-Length']) ? end($headers['Content-Length']) : $headers['Content-Length'];
        if ($size > 0) return $size;
    }
    
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HEADER => TRUE,
        CURLOPT_NOBODY => TRUE,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_MAXREDIRS => 5,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_USERAGENT => 'Mozilla/5.0'
    ]);
    $result = curl_exec($ch);
    $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
    curl_close($ch);
    
    if ($size > 0) {
        return $size;
    }
    
    return false;
}

function formatSize($size) {
    $units = ['B', 'KB', 'MB', 'GB'];
    $power = $size > 0 ? floor(log($size, 1024)) : 0;
    return number_format($size / pow(1024, $power), 2) . ' ' . $units[$power];
}

function getCachedFileSize($url, $cache_duration = 3600) {
    $cache_dir = __DIR__ . '/cache';
    if (!file_exists($cache_dir)) {
        mkdir($cache_dir, 0755, true);
    }
    
    $cache_file = $cache_dir . '/filesize_' . md5($url);
    if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $cache_duration) {
        $cached_data = @json_decode(file_get_contents($cache_file), true);
        if ($cached_data && isset($cached_data['size'])) {
            return $cached_data['size'];
        }
    }
    
    $size = getFileSize($url);
    if ($size !== false) {
        $cache_data = ['size' => $size, 'url' => $url];
        @file_put_contents($cache_file, json_encode($cache_data));
        return $size;
    }
    return false;
}

function logSizeCheck($resolution, $url, $size) {
    $log_file = __DIR__ . '/size_check.log';
    $log_entry = date('Y-m-d H:i:s') . " - Resolution: {$resolution}p, URL: {$url}, Size: " . ($size === false ? 'failed' : formatSize($size)) . "\n";
    @file_put_contents($log_file, $log_entry, FILE_APPEND);
}
?>

<div class="download-options mt-4">
    <h3 class="text-white fw-bold mb-3">Download Options</h3>
    <ul class="list-unstyled">
        <?php
        $resolutions = [
            '480' => $video_url,
            '720' => $video_720url,
            '840' => $video_840url,
            '1080' => $video_1080url,
            '1440' => $video_1440url,
            '1560' => $video_1560url,
            '2160' => $video_2160url
        ];
        
        $sizes = [];
        foreach ($resolutions as $resolution => $url) {
            if (!empty($url)) {
                $size = getCachedFileSize($url);
                $sizes[$resolution] = $size;
                logSizeCheck($resolution, $url, $size);
            }
        }
        
        foreach ($resolutions as $resolution => $url) {
            if (!empty($url)) {
                $size = $sizes[$resolution];
                $size_text = $size ? formatSize($size) : 'Size unknown';
                ?>
                <li class="mb-2">
                    <a href="<?php echo $url; ?>" 
                       data-size="<?php echo $size ?: ''; ?>"
                       class="text-success d-flex justify-content-between align-items-center download-link">
                        <span>Download <?php echo $resolution; ?>p</span>
                        <span class="badge bg-secondary"><?php echo $size_text; ?></span>
                    </a>
                </li>
                <?php
            }
        }
        
        if (array_filter($resolutions) === []) {
            echo '<p class="text-white">No download options available for this movie.</p>';
        }
        ?>
    </ul>
</div>

<style>
.download-options {
    background-color: #1e1e1e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.download-options h3 {
    color: #fff;
}

.list-unstyled {
    padding: 0;
    list-style: none;
}

.list-unstyled li {
    margin-bottom: 10px;
}

.list-unstyled a {
    text-decoration: none;
    color: #34d399;
    padding: 8px 12px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.list-unstyled a:hover {
    background-color: rgba(52, 211, 153, 0.1);
}

.badge {
    background-color: #6c757d;
    color: #fff;
}

.download-progress {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.9);
    color: white;
    padding: 20px;
    border-radius: 10px;
    z-index: 9999;
    min-width: 300px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.progress-bar {
    background: #2d2d2d;
    height: 20px;
    border-radius: 10px;
    margin: 15px 0;
    overflow: hidden;
}

.progress-fill {
    background: linear-gradient(90deg, #34d399, #3b82f6);
    height: 100%;
    width: 0%;
    transition: width 0.3s ease;
}

.progress-text {
    text-align: center;
    font-size: 14px;
    margin-top: 10px;
}

.download-controls {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.control-button {
    background: #34d399;
    border: none;
    color: white;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.control-button:hover {
    background: #2bb583;
}

.control-button:disabled {
    background: #6c757d;
    cursor: not-allowed;
}

@media (max-width: 576px) {
    .list-unstyled a {
        font-size: 14px;
        flex-direction: column;
        align-items: flex-start;
    }
    
    .badge {
        margin-top: 5px;
    }
    
    .download-progress {
        width: 90%;
        min-width: auto;
    }
}
</style>

<script>
function formatBytes(bytes, decimals = 2) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const dm = decimals < 0 ? 0 : decimals;
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}

document.addEventListener('DOMContentLoaded', function() {
    const downloadLinks = document.querySelectorAll('.download-link');
    let activeXHR = null;
    let isPaused = false;
    
    downloadLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Cancel any existing download
            if (activeXHR) {
                activeXHR.abort();
                activeXHR = null;
            }
            
            const url = this.href;
            const resolution = this.querySelector('span').textContent.match(/\d+/)[0];
            const totalSize = this.dataset.size;
            
            // Create progress container
            const progressContainer = document.createElement('div');
            progressContainer.className = 'download-progress';
            progressContainer.innerHTML = `
                <div>Downloading ${resolution}p Video</div>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <div class="progress-text">Starting download...</div>
                <div class="download-controls">
                    <button class="control-button pause-button">Pause</button>
                    <button class="control-button cancel-button">Cancel</button>
                </div>
            `;
            document.body.appendChild(progressContainer);
            
            // Set up control buttons
            const pauseButton = progressContainer.querySelector('.pause-button');
            const cancelButton = progressContainer.querySelector('.cancel-button');
            
            pauseButton.addEventListener('click', () => {
                if (isPaused) {
                    startDownload();
                    pauseButton.textContent = 'Pause';
                } else {
                    if (activeXHR) {
                        activeXHR.abort();
                        activeXHR = null;
                    }
                    pauseButton.textContent = 'Resume';
                }
                isPaused = !isPaused;
            });
            
            cancelButton.addEventListener('click', () => {
                if (activeXHR) {
                    activeXHR.abort();
                    activeXHR = null;
                }
                progressContainer.remove();
            });
            
            function startDownload() {
                activeXHR = new XMLHttpRequest();
                activeXHR.open('GET', url, true);
                activeXHR.responseType = 'blob';
                
                activeXHR.onprogress = function(event) {
                    if (event.lengthComputable) {
                        const percentComplete = (event.loaded / event.total) * 100;
                        const progressFill = progressContainer.querySelector('.progress-fill');
                        const progressText = progressContainer.querySelector('.progress-text');
                        
                        progressFill.style.width = percentComplete + '%';
                        
                        const downloaded = formatBytes(event.loaded);
                        const total = formatBytes(event.total);
                        const speed = formatBytes(event.loaded / ((Date.now() - startTime) / 1000)) + '/s';
                        
                        progressText.textContent = `Downloaded: ${downloaded} of ${total} (${speed})`;
                    }
                };
                
                activeXHR.onload = function() {
                    if (this.status === 200) {
                        const blob = new Blob([this.response], { type: 'application/octet-stream' });
                        const downloadUrl = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        
                        const pageTitle = document.title || 'video';
                        const sanitizedTitle = pageTitle.replace(/[^a-z0-9-_\s]/gi, '').trim();
                        
                        a.style.display = 'none';
                        a.href = downloadUrl;
                        a.download = `${sanitizedTitle}_${resolution}p.mkv`;
                        
                        document.body.appendChild(a);
                        a.click();
                        
                        window.URL.revokeObjectURL(downloadUrl);
                        document.body.removeChild(a);
                        
                        progressContainer.innerHTML = '<div class="text-center">Download Complete!</div>';
                        setTimeout(() => {
                            progressContainer.remove();
                        }, 2000);
                    }
                };
                
                activeXHR.onerror = function() {
                    console.error('Download failed');
                    progressContainer.innerHTML = 'Download failed. Starting direct download...';
                    setTimeout(() => {
                        progressContainer.remove();
                        window.location.href = url;
                    }, 2000);
                };
                
                const startTime = Date.now();
                activeXHR.send();
            }
            
            startDownload();
        });
    });
});
</script>


<div class="movie-details mt-5 p-4 rounded shadow-lg">
    <h2 class="fw-bold mb-4 h4 text-center" style="background: linear-gradient(to right, #facc15, #f87171, #ec4899); -webkit-background-clip: text; color: transparent;">
        <i class="me-2 fas fa-film"></i> Movie or Series Details
    </h2>
    <div class="mb-3">
        <p class="d-flex align-items-center"><i class="me-2 fas fa-calendar-alt text-warning"></i> <strong class="text-warning">Release Date:</strong> <?php echo htmlspecialchars($_GET['release_date']); ?></p>
        <p class="d-flex align-items-center"><i class="me-2 fas fa-tachometer-alt text-success"></i> <strong class="text-success">Quality:</strong> <?php echo htmlspecialchars($_GET['quality']); ?></p>
        <p class="d-flex align-items-center"><i class="me-2 fas fa-user-shield text-info"></i> <strong class="text-info">Rating:</strong> <?php echo htmlspecialchars($_GET['age_rating']); ?></p>
        <p class="d-flex align-items-center"><i class="me-2 fas fa-clock text-primary"></i> <strong class="text-primary">Duration:</strong> <?php echo htmlspecialchars($_GET['duration']); ?></p>
        <p class="d-flex align-items-center"><i class="me-2 fas fa-star text-warning"></i> <strong class="text-warning">Genre:</strong> <?php echo htmlspecialchars($_GET['genre']); ?></p>
        <p class="d-flex align-items-center"><i class="me-2 fas fa-info-circle text-danger"></i> <strong class="text-danger">Synopsis:</strong> <?php echo htmlspecialchars($_GET['synopsis']); ?></p>
    </div>
</div>

<style>
    .movie-details {
        background-color: #343a40;
        color: #fff;
    }

    .movie-details h2 {
        margin-bottom: 20px;
    }

    .movie-details p {
        margin: 0;
        display: flex;
        align-items: center;
    }

    .movie-details i {
        margin-right: 8px;
    }

    .movie-details strong {
        margin-right: 8px;
    }
</style>

<div class="movie-details mt-4 p-4 rounded shadow-lg bg-secondary text-white">
    <div class="movie-synopsis mb-4">
        <h3 class="fw-bold h5 d-flex align-items-center mb-3" style="background:linear-gradient(to right,#60a5fa,#a78bfa,#ec4899);-webkit-background-clip:text;color:transparent;">
            <i class="me-2 fas fa-book-open"></i> Movie Synopsis
        </h3>
        <p class="lead"><?php echo htmlspecialchars($_GET['synopsis']); ?></p>
    </div>
    <div class="additional-info mt-4">
        <h4 class="fw-bold h6 mb-2">Why You Should Watch:</h4>
        <p><?php echo htmlspecialchars($_GET['name']); ?> explores themes of love, adventure, and self-discovery, making it a must-watch for movie enthusiasts.</p>
        <p>Don't miss out on the chance to stream this incredible film on CineAura today!</p>
    </div>
</div>

<div class="movie-description mt-4 p-4 rounded shadow-lg bg-dark text-white">
    <h3 class="fw-bold h5 mb-3" style="background:linear-gradient(to right,#34d399,#fbbf24,#f87171);-webkit-background-clip:text;color:transparent;">
        <i class="me-2 fas fa-info-circle"></i> Movie Description
    </h3>
    <p><?php echo htmlspecialchars($_GET['description']); ?></p>
    <div class="additional-insights mt-4">
        <h4 class="fw-bold h6 mb-2">What to Expect:</h4>
        <p>Dive into the captivating world of <?php echo htmlspecialchars($_GET['name']); ?>, where you’ll experience thrilling moments, powerful performances, and an engaging storyline.</p>
        <p>Perfect for fans of horror and suspense, this film is bound to keep you entertained!</p>
    </div>
</div>

<!-- Smooth inline CSS -->
<style>
    .movie-details, .movie-description {
        background-color: #343a40;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .movie-details h3, .movie-description h3 {
        margin-bottom: 15px;
    }

    .movie-synopsis p, .additional-info p, .additional-insights p {
        margin: 0;
        color: #ddd;
    }

    .movie-details i, .movie-description i {
        margin-right: 8px;
    }

    .fw-bold {
        font-weight: 700;
    }

    .h5 {
        font-size: 1.25rem;
    }

    .h6 {
        font-size: 1rem;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
    }
</style>


<div class="comment-box mt-4 p-4 rounded shadow-lg bg-dark">
    <h3 class="text-white fw-bold mb-4 d-flex align-items-center h5">
        <i class="me-2 fas text-warning fa-comments"></i> Leave a Comment
    </h3>
    <form class="mb-3" id="commentForm">
        <input name="movie_name" type="hidden" value="<?php echo htmlspecialchars($_GET['name']); ?>">
        <input name="name" class="text-white bg-secondary border-0 form-control mb-3" placeholder="Your Name" required>
        <textarea class="text-white bg-secondary border-0 form-control mb-3" name="comment" placeholder="Your Comment" required rows="4"></textarea>
        <button class="d-flex align-items-center justify-content-center btn btn-primary w-100" type="submit">
            <i class="me-2 fas fa-paper-plane"></i> Submit
        </button>
    </form>
</div>

<h2 class="text-white fw-bold mb-4 d-flex align-items-center h4 mt-6">
    <i class="me-2 fas text-success fa-comments-alt"></i> Your Comments
</h2>

<div id="commentsList" class="mb-4"></div>

<!-- Smooth inline CSS -->
<style>
    .comment-box, .movie-description, .movie-details {
        background-color: #343a40;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .comment-box h3, .movie-description h3, .movie-details h3 {
        margin-bottom: 15px;
    }

    .comment-box input, .comment-box textarea {
        background-color: #495057;
        border: none;
        color: #fff;
    }

    .comment-box input::placeholder, .comment-box textarea::placeholder {
        color: #ced4da;
    }

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .h5, .h4 {
        font-size: 1.25rem;
        font-weight: 700;
    }

    .h5 {
        font-size: 1.25rem;
    }

    .h4 {
        font-size: 1.5rem;
    }

    .mt-6 {
        margin-top: 3rem;
    }

    .p-4 {
        padding: 1.5rem;
    }
</style>
<footer class="footer">
    <div class="container text-center">
        <div class="footer-description mb-4">
            <h2 class="fw-bold h5">About CineAura</h2>
            <p class="mb-4 small">CineAura is your one-stop destination for streaming the latest movies and TV series. With daily updates and recommendations tailored to your preferences, CineAura offers a seamless and user-friendly platform. Explore top-rated films and indie gems, all hosted by third-party services, in just a few clicks. Join our growing community of movie lovers and stay up-to-date with the latest in entertainment.</p>
        </div>
        <div class="mb-4">
            <h2 class="fw-bold h5">Useful Links</h2>
            <p class="mb-4 small">
                <a class="text-white mx-2" href="home.php">Home</a> | 
                <a class="text-white mx-2" href="contact.php">Contact Us</a> | 
                <a class="text-white mx-2" href="about.php">About</a> | 
                <a class="text-white mx-2" href="faq.php">FAQs</a>
            </p>
        </div>
        <div class="mb-4">
            <h2 class="fw-bold h5">Legal & Privacy</h2>
            <p class="mb-4 small">
                <a class="text-white mx-2" href="privacy">Privacy Policy</a> | 
                <a class="text-white mx-2" href="terms">Terms of Service</a>
            </p>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <a class="text-white me-3" href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a class="text-white me-3" href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a class="text-white me-3" href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a class="text-white me-3" href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        <p class="mb-4 small">©<?php echo htmlspecialchars(date("Y")); ?> CineAura. All rights reserved.</p>
        <p class="mb-4 small">Join CineAura today and explore thousands of movies and series for free! <a class="text-warning" href="register.php">Sign up now</a> to create your watchlist and stay connected with the latest updates.</p>
    </div>
</footer>

<!-- Smooth inline CSS -->
<style>
    .footer {
        margin-top: 40px;
        padding: 20px;
        text-align: center;
        background-color: #2c3e50; /* Neutral dark background color */
        color: #fff;
    }

    .footer h2 {
        color: #ecf0f1; /* Light color for headings */
    }

    .footer p {
        color: #bdc3c7; /* Slightly darker light color for text */
    }

    .footer a {
        color: #3498db; /* Light blue for links */
        transition: color 0.3s ease;
    }

    .footer a:hover {
        color: #2980b9; /* Darker blue on hover */
    }

    .footer .text-warning {
        color: #f1c40f !important; /* Yellow for warning text */
    }

    .fab {
        font-size: 1.25rem;
    }
</style>



     
   </body>
</html>
<script>

document.addEventListener("DOMContentLoaded", function() {
   // Load comments
   loadComments();
   
   // Handle form submission
   document.getElementById('commentForm').addEventListener('submit', function(e) {
       e.preventDefault();
       var formData = new FormData(this);
   
       fetch('submit_comment.php', {
           method: 'GET',
           body: formData
       })
       .then(response => response.text())
       .then(result => {
           loadComments(); // Reload comments after submitting
           document.querySelector('input[name="name"]').value = '';
           document.querySelector('textarea[name="comment"]').value = '';
       })
       .catch(error => console.error('Error:', error));
   });
   
   // Function to load comments
   // Function to load comments
   function loadComments() {
   fetch('load_comments.php?movie_name=' + encodeURIComponent('<?php echo htmlspecialchars($_GET['name']); ?>'))
   .then(response => {
   if (!response.ok) {
       throw new Error('Network response was not ok ' + response.statusText);
   }
   return response.json();
   })
   .then(comments => {
   console.log(comments); // Log the response for debugging
   var commentsList = document.getElementById('commentsList');
   commentsList.innerHTML = ''; // Clear the list first
   if (comments.length > 0) {
       comments.forEach(comment => {
           var commentItem = document.createElement('div');
           commentItem.classList.add('comment-item');
           commentItem.innerHTML = `
               <div class="comment bg-gray-800 p-4 rounded-lg shadow-md mb-4">
                   <div class="flex items-center mb-2">
                       <i class="fas fa-user-circle text-blue-400 mr-3 text-2xl"></i>
                       <p class="name text-white font-semibold text-lg">${comment.name}</p>
                       <p class="date text-gray-400 text-sm ml-auto">${formatDate(comment.date)}</p>
                   </div>
                   <p class="text-gray-300">${comment.comment}</p>
               </div>
           `;
           commentsList.appendChild(commentItem);
       });
   } else {
       commentsList.innerHTML = '<p class="text-white">No comments yet.</p>';
   }
   })
   .catch(error => {
   console.error('Error:', error);
   var commentsList = document.getElementById('commentsList');
   commentsList.innerHTML = '<p class="text-red-500">Failed to load comments. Please try again later.</p>';
   });
   }
   
   
   // Function to format date and time in Indian Standard Time (IST)
   function formatDate(dateString) {
       const date = new Date(dateString);
       const options = {
           year: 'numeric',
           month: 'short',
           day: 'numeric',
           hour: 'numeric',
           minute: 'numeric',
           second: 'numeric',
           timeZone: 'Asia/Kolkata'
       };
       return date.toLocaleDateString('en-IN', options);
   }
   });
</script><script>// Mobile menu toggle
   const toggler = document.getElementById('navbar-toggler');
   const mobileMenu = document.getElementById('mobile-menu');
   
   toggler.addEventListener('click', function() {
       if (mobileMenu.classList.contains('hidden')) {
           mobileMenu.classList.remove('hidden');
       } else {
           mobileMenu.classList.add('hidden');
       }
   });
</script><script>/*!
   * Bootstrap v5.3.2 (https://getbootstrap.com/)
   * Copyright 2011-2023 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   */ !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).bootstrap=t()}(this,function(){"use strict";let e=new Map,t={set(t,i,n){e.has(t)||e.set(t,new Map);let s=e.get(t);s.has(i)||0===s.size?s.set(i,n):console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(s.keys())[0]}.`)},get:(t,i)=>e.has(t)&&e.get(t).get(i)||null,remove(t,i){if(!e.has(t))return;let n=e.get(t);n.delete(i),0===n.size&&e.delete(t)}},i="transitionend",n=e=>(e&&window.CSS&&window.CSS.escape&&(e=e.replace(/#([^\s"#']+)/g,(e,t)=>`#${CSS.escape(t)}`)),e),s=e=>{e.dispatchEvent(new Event(i))},r=e=>!(!e||"object"!=typeof e)&&(void 0!==e.jquery&&(e=e[0]),void 0!==e.nodeType),o=e=>r(e)?e.jquery?e[0]:e:"string"==typeof e&&e.length>0?document.querySelector(n(e)):null,a=e=>{if(!r(e)||0===e.getClientRects().length)return!1;let t="visible"===getComputedStyle(e).getPropertyValue("visibility"),i=e.closest("details:not([open])");if(!i)return t;if(i!==e){let n=e.closest("summary");if(n&&n.parentNode!==i||null===n)return!1}return t},l=e=>!e||e.nodeType!==Node.ELEMENT_NODE||!!e.classList.contains("disabled")||(void 0!==e.disabled?e.disabled:e.hasAttribute("disabled")&&"false"!==e.getAttribute("disabled")),c=e=>{if(!document.documentElement.attachShadow)return null;if("function"==typeof e.getRootNode){let t=e.getRootNode();return t instanceof ShadowRoot?t:null}return e instanceof ShadowRoot?e:e.parentNode?c(e.parentNode):null},h=()=>{},d=e=>{e.offsetHeight},u=()=>window.jQuery&&!document.body.hasAttribute("data-bs-no-jquery")?window.jQuery:null,f=[],p=()=>"rtl"===document.documentElement.dir,g=e=>{var t;t=()=>{let t=u();if(t){let i=e.NAME,n=t.fn[i];t.fn[i]=e.jQueryInterface,t.fn[i].Constructor=e,t.fn[i].noConflict=()=>(t.fn[i]=n,e.jQueryInterface)}},"loading"===document.readyState?(f.length||document.addEventListener("DOMContentLoaded",()=>{for(let e of f)e()}),f.push(t)):t()},m=(e,t=[],i=e)=>"function"==typeof e?e(...t):i,v=(e,t,n=!0)=>{if(!n)return void m(e);let r=(e=>{if(!e)return 0;let{transitionDuration:t,transitionDelay:i}=window.getComputedStyle(e),n=Number.parseFloat(t),s=Number.parseFloat(i);return n||s?(t=t.split(",")[0],i=i.split(",")[0],1e3*(Number.parseFloat(t)+Number.parseFloat(i))):0})(t)+5,o=!1,a=({target:n})=>{n===t&&(o=!0,t.removeEventListener(i,a),m(e))};t.addEventListener(i,a),setTimeout(()=>{o||s(t)},r)},b=(e,t,i,n)=>{let s=e.length,r=e.indexOf(t);return -1===r?!i&&n?e[s-1]:e[0]:(r+=i?1:-1,n&&(r=(r+s)%s),e[Math.max(0,Math.min(r,s-1))])},y=/[^.]*(?=\..*)\.|.*/,w=/\..*/,$=/::\d+$/,A={},E=1,C={mouseenter:"mouseover",mouseleave:"mouseout"},T=new Set(["click","dblclick","mouseup","mousedown","contextmenu","mousewheel","DOMMouseScroll","mouseover","mouseout","mousemove","selectstart","selectend","keydown","keypress","keyup","orientationchange","touchstart","touchmove","touchend","touchcancel","pointerdown","pointermove","pointerup","pointerleave","pointercancel","gesturestart","gesturechange","gestureend","focus","blur","change","reset","select","submit","focusin","focusout","load","unload","beforeunload","resize","move","DOMContentLoaded","readystatechange","error","abort","scroll"]);function x(e,t){return t&&`${t}::${E++}`||e.uidEvent||E++}function k(e){let t=x(e);return e.uidEvent=t,A[t]=A[t]||{},A[t]}function L(e,t,i=null){return Object.values(e).find(e=>e.callable===t&&e.delegationSelector===i)}function O(e,t,i){let n="string"==typeof t,s=_(e);return T.has(s)||(s=e),[n,n?i:t||i,s]}function D(e,t,i,n,s){var r,o,a,l,c,h;if("string"!=typeof t||!e)return;let[d,u,f]=O(t,i,n);t in C&&(u=(r=u,function(e){if(!e.relatedTarget||e.relatedTarget!==e.delegateTarget&&!e.delegateTarget.contains(e.relatedTarget))return r.call(this,e)}));let p=k(e),g=p[f]||(p[f]={}),m=L(g,u,d?i:null);if(m)return void(m.oneOff=m.oneOff&&s);let v=x(u,t.replace(y,"")),b=d?(o=e,a=i,l=u,function e(t){let i=o.querySelectorAll(a);for(let{target:n}=t;n&&n!==this;n=n.parentNode)for(let s of i)if(s===n)return N(t,{delegateTarget:n}),e.oneOff&&P.off(o,t.type,a,l),l.apply(n,[t])}):(c=e,h=u,function e(t){return N(t,{delegateTarget:c}),e.oneOff&&P.off(c,t.type,h),h.apply(c,[t])});b.delegationSelector=d?i:null,b.callable=u,b.oneOff=s,b.uidEvent=v,g[v]=b,e.addEventListener(f,b,d)}function S(e,t,i,n,s){let r=L(t[i],n,s);r&&(e.removeEventListener(i,r,Boolean(s)),delete t[i][r.uidEvent])}function I(e,t,i,n){let s=t[i]||{};for(let[r,o]of Object.entries(s))r.includes(n)&&S(e,t,i,o.callable,o.delegationSelector)}function _(e){return C[e=e.replace(w,"")]||e}let P={on(e,t,i,n){D(e,t,i,n,!1)},one(e,t,i,n){D(e,t,i,n,!0)},off(e,t,i,n){if("string"!=typeof t||!e)return;let[s,r,o]=O(t,i,n),a=o!==t,l=k(e),c=l[o]||{},h=t.startsWith(".");if(void 0===r){if(h)for(let d of Object.keys(l))I(e,l,d,t.slice(1));for(let[u,f]of Object.entries(c)){let p=u.replace($,"");a&&!t.includes(p)||S(e,l,o,f.callable,f.delegationSelector)}}else{if(!Object.keys(c).length)return;S(e,l,o,r,s?i:null)}},trigger(e,t,i){if("string"!=typeof t||!e)return null;let n=u(),s=null,r=!0,o=!0,a=!1;t!==_(t)&&n&&(s=n.Event(t,i),n(e).trigger(s),r=!s.isPropagationStopped(),o=!s.isImmediatePropagationStopped(),a=s.isDefaultPrevented());let l=N(new Event(t,{bubbles:r,cancelable:!0}),i);return a&&l.preventDefault(),o&&e.dispatchEvent(l),l.defaultPrevented&&s&&s.preventDefault(),l}};function N(e,t={}){for(let[i,n]of Object.entries(t))try{e[i]=n}catch(s){Object.defineProperty(e,i,{configurable:!0,get:()=>n})}return e}function M(e){if("true"===e)return!0;if("false"===e)return!1;if(e===Number(e).toString())return Number(e);if(""===e||"null"===e)return null;if("string"!=typeof e)return e;try{return JSON.parse(decodeURIComponent(e))}catch(t){return e}}function F(e){return e.replace(/[A-Z]/g,e=>`-${e.toLowerCase()}`)}let H={setDataAttribute(e,t,i){e.setAttribute(`data-bs-${F(t)}`,i)},removeDataAttribute(e,t){e.removeAttribute(`data-bs-${F(t)}`)},getDataAttributes(e){if(!e)return{};let t={},i=Object.keys(e.dataset).filter(e=>e.startsWith("bs")&&!e.startsWith("bsConfig"));for(let n of i){let s=n.replace(/^bs/,"");t[s=s.charAt(0).toLowerCase()+s.slice(1,s.length)]=M(e.dataset[n])}return t},getDataAttribute:(e,t)=>M(e.getAttribute(`data-bs-${F(t)}`))};class j{static get Default(){return{}}static get DefaultType(){return{}}static get NAME(){throw Error('You have to implement the static method "NAME", for each component!')}_getConfig(e){return e=this._mergeConfigObj(e),e=this._configAfterMerge(e),this._typeCheckConfig(e),e}_configAfterMerge(e){return e}_mergeConfigObj(e,t){let i=r(t)?H.getDataAttribute(t,"config"):{};return{...this.constructor.Default,..."object"==typeof i?i:{},...r(t)?H.getDataAttributes(t):{},..."object"==typeof e?e:{}}}_typeCheckConfig(e,t=this.constructor.DefaultType){var i;for(let[n,s]of Object.entries(t)){let o=e[n],a=r(o)?"element":null==(i=o)?`${i}`:Object.prototype.toString.call(i).match(/\s([a-z]+)/i)[1].toLowerCase();if(!RegExp(s).test(a))throw TypeError(`${this.constructor.NAME.toUpperCase()}: Option "${n}" provided type "${a}" but expected type "${s}".`)}}}class W extends j{constructor(e,i){super(),(e=o(e))&&(this._element=e,this._config=this._getConfig(i),t.set(this._element,this.constructor.DATA_KEY,this))}dispose(){for(let e of(t.remove(this._element,this.constructor.DATA_KEY),P.off(this._element,this.constructor.EVENT_KEY),Object.getOwnPropertyNames(this)))this[e]=null}_queueCallback(e,t,i=!0){v(e,t,i)}_getConfig(e){return e=this._mergeConfigObj(e,this._element),e=this._configAfterMerge(e),this._typeCheckConfig(e),e}static getInstance(e){return t.get(o(e),this.DATA_KEY)}static getOrCreateInstance(e,t={}){return this.getInstance(e)||new this(e,"object"==typeof t?t:null)}static get VERSION(){return"5.3.2"}static get DATA_KEY(){return`bs.${this.NAME}`}static get EVENT_KEY(){return`.${this.DATA_KEY}`}static eventName(e){return`${e}${this.EVENT_KEY}`}}let z=e=>{let t=e.getAttribute("data-bs-target");if(!t||"#"===t){let i=e.getAttribute("href");if(!i||!i.includes("#")&&!i.startsWith("."))return null;i.includes("#")&&!i.startsWith("#")&&(i=`#${i.split("#")[1]}`),t=i&&"#"!==i?n(i.trim()):null}return t},B={find:(e,t=document.documentElement)=>[].concat(...Element.prototype.querySelectorAll.call(t,e)),findOne:(e,t=document.documentElement)=>Element.prototype.querySelector.call(t,e),children:(e,t)=>[].concat(...e.children).filter(e=>e.matches(t)),parents(e,t){let i=[],n=e.parentNode.closest(t);for(;n;)i.push(n),n=n.parentNode.closest(t);return i},prev(e,t){let i=e.previousElementSibling;for(;i;){if(i.matches(t))return[i];i=i.previousElementSibling}return[]},next(e,t){let i=e.nextElementSibling;for(;i;){if(i.matches(t))return[i];i=i.nextElementSibling}return[]},focusableChildren(e){let t=["a","button","input","textarea","select","details","[tabindex]",'[contenteditable="true"]'].map(e=>`${e}:not([tabindex^="-"])`).join(",");return this.find(t,e).filter(e=>!l(e)&&a(e))},getSelectorFromElement(e){let t=z(e);return t&&B.findOne(t)?t:null},getElementFromSelector(e){let t=z(e);return t?B.findOne(t):null},getMultipleElementsFromSelector(e){let t=z(e);return t?B.find(t):[]}},q=(e,t="hide")=>{let i=`click.dismiss${e.EVENT_KEY}`,n=e.NAME;P.on(document,i,`[data-bs-dismiss="${n}"]`,function(i){if(["A","AREA"].includes(this.tagName)&&i.preventDefault(),l(this))return;let s=B.getElementFromSelector(this)||this.closest(`.${n}`);e.getOrCreateInstance(s)[t]()})},R=".bs.alert",V=`close${R}`,K=`closed${R}`;class Q extends W{static get NAME(){return"alert"}close(){if(P.trigger(this._element,V).defaultPrevented)return;this._element.classList.remove("show");let e=this._element.classList.contains("fade");this._queueCallback(()=>this._destroyElement(),this._element,e)}_destroyElement(){this._element.remove(),P.trigger(this._element,K),this.dispose()}static jQueryInterface(e){return this.each(function(){let t=Q.getOrCreateInstance(this);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e](this)}})}}q(Q,"close"),g(Q);let X='[data-bs-toggle="button"]';class Y extends W{static get NAME(){return"button"}toggle(){this._element.setAttribute("aria-pressed",this._element.classList.toggle("active"))}static jQueryInterface(e){return this.each(function(){let t=Y.getOrCreateInstance(this);"toggle"===e&&t[e]()})}}P.on(document,"click.bs.button.data-api",X,e=>{e.preventDefault();let t=e.target.closest(X);Y.getOrCreateInstance(t).toggle()}),g(Y);let U=".bs.swipe",G=`touchstart${U}`,Z=`touchmove${U}`,J=`touchend${U}`,ee=`pointerdown${U}`,et=`pointerup${U}`,ei={endCallback:null,leftCallback:null,rightCallback:null},en={endCallback:"(function|null)",leftCallback:"(function|null)",rightCallback:"(function|null)"};class es extends j{constructor(e,t){super(),this._element=e,e&&es.isSupported()&&(this._config=this._getConfig(t),this._deltaX=0,this._supportPointerEvents=Boolean(window.PointerEvent),this._initEvents())}static get Default(){return ei}static get DefaultType(){return en}static get NAME(){return"swipe"}dispose(){P.off(this._element,U)}_start(e){this._supportPointerEvents?this._eventIsPointerPenTouch(e)&&(this._deltaX=e.clientX):this._deltaX=e.touches[0].clientX}_end(e){this._eventIsPointerPenTouch(e)&&(this._deltaX=e.clientX-this._deltaX),this._handleSwipe(),m(this._config.endCallback)}_move(e){this._deltaX=e.touches&&e.touches.length>1?0:e.touches[0].clientX-this._deltaX}_handleSwipe(){let e=Math.abs(this._deltaX);if(e<=40)return;let t=e/this._deltaX;this._deltaX=0,t&&m(t>0?this._config.rightCallback:this._config.leftCallback)}_initEvents(){this._supportPointerEvents?(P.on(this._element,ee,e=>this._start(e)),P.on(this._element,et,e=>this._end(e)),this._element.classList.add("pointer-event")):(P.on(this._element,G,e=>this._start(e)),P.on(this._element,Z,e=>this._move(e)),P.on(this._element,J,e=>this._end(e)))}_eventIsPointerPenTouch(e){return this._supportPointerEvents&&("pen"===e.pointerType||"touch"===e.pointerType)}static isSupported(){return"ontouchstart"in document.documentElement||navigator.maxTouchPoints>0}}let er=".bs.carousel",eo=".data-api",ea="next",el="prev",ec="left",eh="right",ed=`slide${er}`,eu=`slid${er}`,ef=`keydown${er}`,ep=`mouseenter${er}`,eg=`mouseleave${er}`,em=`dragstart${er}`,e8=`load${er}${eo}`,ev=`click${er}${eo}`,eb="carousel",ey="active",ew=".active",e$=".carousel-item",eA=ew+e$,eE={ArrowLeft:eh,ArrowRight:ec},eC={interval:5e3,keyboard:!0,pause:"hover",ride:!1,touch:!0,wrap:!0},eT={interval:"(number|boolean)",keyboard:"boolean",pause:"(string|boolean)",ride:"(boolean|string)",touch:"boolean",wrap:"boolean"};class ex extends W{constructor(e,t){super(e,t),this._interval=null,this._activeElement=null,this._isSliding=!1,this.touchTimeout=null,this._swipeHelper=null,this._indicatorsElement=B.findOne(".carousel-indicators",this._element),this._addEventListeners(),this._config.ride===eb&&this.cycle()}static get Default(){return eC}static get DefaultType(){return eT}static get NAME(){return"carousel"}next(){this._slide(ea)}nextWhenVisible(){!document.hidden&&a(this._element)&&this.next()}prev(){this._slide(el)}pause(){this._isSliding&&s(this._element),this._clearInterval()}cycle(){this._clearInterval(),this._updateInterval(),this._interval=setInterval(()=>this.nextWhenVisible(),this._config.interval)}_maybeEnableCycle(){this._config.ride&&(this._isSliding?P.one(this._element,eu,()=>this.cycle()):this.cycle())}to(e){let t=this._getItems();if(e>t.length-1||e<0)return;if(this._isSliding)return void P.one(this._element,eu,()=>this.to(e));let i=this._getItemIndex(this._getActive());i!==e&&this._slide(e>i?ea:el,t[e])}dispose(){this._swipeHelper&&this._swipeHelper.dispose(),super.dispose()}_configAfterMerge(e){return e.defaultInterval=e.interval,e}_addEventListeners(){this._config.keyboard&&P.on(this._element,ef,e=>this._keydown(e)),"hover"===this._config.pause&&(P.on(this._element,ep,()=>this.pause()),P.on(this._element,eg,()=>this._maybeEnableCycle())),this._config.touch&&es.isSupported()&&this._addTouchEventListeners()}_addTouchEventListeners(){for(let e of B.find(".carousel-item img",this._element))P.on(e,em,e=>e.preventDefault());this._swipeHelper=new es(this._element,{leftCallback:()=>this._slide(this._directionToOrder(ec)),rightCallback:()=>this._slide(this._directionToOrder(eh)),endCallback:()=>{"hover"===this._config.pause&&(this.pause(),this.touchTimeout&&clearTimeout(this.touchTimeout),this.touchTimeout=setTimeout(()=>this._maybeEnableCycle(),500+this._config.interval))}})}_keydown(e){if(/input|textarea/i.test(e.target.tagName))return;let t=eE[e.key];t&&(e.preventDefault(),this._slide(this._directionToOrder(t)))}_getItemIndex(e){return this._getItems().indexOf(e)}_setActiveIndicatorElement(e){if(!this._indicatorsElement)return;let t=B.findOne(ew,this._indicatorsElement);t.classList.remove(ey),t.removeAttribute("aria-current");let i=B.findOne(`[data-bs-slide-to="${e}"]`,this._indicatorsElement);i&&(i.classList.add(ey),i.setAttribute("aria-current","true"))}_updateInterval(){let e=this._activeElement||this._getActive();if(!e)return;let t=Number.parseInt(e.getAttribute("data-bs-interval"),10);this._config.interval=t||this._config.defaultInterval}_slide(e,t=null){if(this._isSliding)return;let i=this._getActive(),n=e===ea,s=t||b(this._getItems(),i,n,this._config.wrap);if(s===i)return;let r=this._getItemIndex(s),o=t=>P.trigger(this._element,t,{relatedTarget:s,direction:this._orderToDirection(e),from:this._getItemIndex(i),to:r});if(o(ed).defaultPrevented||!i||!s)return;let a=Boolean(this._interval);this.pause(),this._isSliding=!0,this._setActiveIndicatorElement(r),this._activeElement=s;let l=n?"carousel-item-start":"carousel-item-end",c=n?"carousel-item-next":"carousel-item-prev";s.classList.add(c),d(s),i.classList.add(l),s.classList.add(l),this._queueCallback(()=>{s.classList.remove(l,c),s.classList.add(ey),i.classList.remove(ey,c,l),this._isSliding=!1,o(eu)},i,this._isAnimated()),a&&this.cycle()}_isAnimated(){return this._element.classList.contains("slide")}_getActive(){return B.findOne(eA,this._element)}_getItems(){return B.find(e$,this._element)}_clearInterval(){this._interval&&(clearInterval(this._interval),this._interval=null)}_directionToOrder(e){return p()?e===ec?el:ea:e===ec?ea:el}_orderToDirection(e){return p()?e===el?ec:eh:e===el?eh:ec}static jQueryInterface(e){return this.each(function(){let t=ex.getOrCreateInstance(this,e);if("number"!=typeof e){if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e]()}}else t.to(e)})}}P.on(document,ev,"[data-bs-slide], [data-bs-slide-to]",function(e){let t=B.getElementFromSelector(this);if(!t||!t.classList.contains(eb))return;e.preventDefault();let i=ex.getOrCreateInstance(t),n=this.getAttribute("data-bs-slide-to");return n?(i.to(n),void i._maybeEnableCycle()):"next"===H.getDataAttribute(this,"slide")?(i.next(),void i._maybeEnableCycle()):(i.prev(),void i._maybeEnableCycle())}),P.on(window,e8,()=>{let e=B.find('[data-bs-ride="carousel"]');for(let t of e)ex.getOrCreateInstance(t)}),g(ex);let ek=".bs.collapse",eL=`show${ek}`,eO=`shown${ek}`,eD=`hide${ek}`,e9=`hidden${ek}`,eS=`click${ek}.data-api`,eI="show",e_="collapse",eP="collapsing",eN=`:scope .${e_} .${e_}`,eM='[data-bs-toggle="collapse"]',eF={parent:null,toggle:!0},eH={parent:"(null|element)",toggle:"boolean"};class ej extends W{constructor(e,t){super(e,t),this._isTransitioning=!1,this._triggerArray=[];let i=B.find(eM);for(let n of i){let s=B.getSelectorFromElement(n),r=B.find(s).filter(e=>e===this._element);null!==s&&r.length&&this._triggerArray.push(n)}this._initializeChildren(),this._config.parent||this._addAriaAndCollapsedClass(this._triggerArray,this._isShown()),this._config.toggle&&this.toggle()}static get Default(){return eF}static get DefaultType(){return eH}static get NAME(){return"collapse"}toggle(){this._isShown()?this.hide():this.show()}show(){if(this._isTransitioning||this._isShown())return;let e=[];if(this._config.parent&&(e=this._getFirstLevelChildren(".collapse.show, .collapse.collapsing").filter(e=>e!==this._element).map(e=>ej.getOrCreateInstance(e,{toggle:!1}))),e.length&&e[0]._isTransitioning||P.trigger(this._element,eL).defaultPrevented)return;for(let t of e)t.hide();let i=this._getDimension();this._element.classList.remove(e_),this._element.classList.add(eP),this._element.style[i]=0,this._addAriaAndCollapsedClass(this._triggerArray,!0),this._isTransitioning=!0;let n=`scroll${i[0].toUpperCase()+i.slice(1)}`;this._queueCallback(()=>{this._isTransitioning=!1,this._element.classList.remove(eP),this._element.classList.add(e_,eI),this._element.style[i]="",P.trigger(this._element,eO)},this._element,!0),this._element.style[i]=`${this._element[n]}px`}hide(){if(this._isTransitioning||!this._isShown()||P.trigger(this._element,eD).defaultPrevented)return;let e=this._getDimension();for(let t of(this._element.style[e]=`${this._element.getBoundingClientRect()[e]}px`,d(this._element),this._element.classList.add(eP),this._element.classList.remove(e_,eI),this._triggerArray)){let i=B.getElementFromSelector(t);i&&!this._isShown(i)&&this._addAriaAndCollapsedClass([t],!1)}this._isTransitioning=!0,this._element.style[e]="",this._queueCallback(()=>{this._isTransitioning=!1,this._element.classList.remove(eP),this._element.classList.add(e_),P.trigger(this._element,e9)},this._element,!0)}_isShown(e=this._element){return e.classList.contains(eI)}_configAfterMerge(e){return e.toggle=Boolean(e.toggle),e.parent=o(e.parent),e}_getDimension(){return this._element.classList.contains("collapse-horizontal")?"width":"height"}_initializeChildren(){if(!this._config.parent)return;let e=this._getFirstLevelChildren(eM);for(let t of e){let i=B.getElementFromSelector(t);i&&this._addAriaAndCollapsedClass([t],this._isShown(i))}}_getFirstLevelChildren(e){let t=B.find(eN,this._config.parent);return B.find(e,this._config.parent).filter(e=>!t.includes(e))}_addAriaAndCollapsedClass(e,t){if(e.length)for(let i of e)i.classList.toggle("collapsed",!t),i.setAttribute("aria-expanded",t)}static jQueryInterface(e){let t={};return"string"==typeof e&&/show|hide/.test(e)&&(t.toggle=!1),this.each(function(){let i=ej.getOrCreateInstance(this,t);if("string"==typeof e){if(void 0===i[e])throw TypeError(`No method named "${e}"`);i[e]()}})}}P.on(document,eS,eM,function(e){for(let t of(("A"===e.target.tagName||e.delegateTarget&&"A"===e.delegateTarget.tagName)&&e.preventDefault(),B.getMultipleElementsFromSelector(this)))ej.getOrCreateInstance(t,{toggle:!1}).toggle()}),g(ej);var eW="top",ez="bottom",eB="right",eq="left",eR="auto",eV=[eW,ez,eB,eq],e0="start",eK="clippingParents",eQ="viewport",eX="popper",eY="reference",eU=eV.reduce(function(e,t){return e.concat([t+"-"+e0,t+"-end"])},[]),e1=[].concat(eV,[eR]).reduce(function(e,t){return e.concat([t,t+"-"+e0,t+"-end"])},[]),e3="beforeRead",e4="read",eG="afterRead",e2="beforeMain",eZ="main",e6="afterMain",e7="beforeWrite",eJ="write",e5="afterWrite",te=[e3,e4,eG,e2,eZ,e6,e7,eJ,e5];function tt(e){return e?(e.nodeName||"").toLowerCase():null}function ti(e){if(null==e)return window;if("[object Window]"!==e.toString()){var t=e.ownerDocument;return t&&t.defaultView||window}return e}function tn(e){return e instanceof ti(e).Element||e instanceof Element}function ts(e){return e instanceof ti(e).HTMLElement||e instanceof HTMLElement}function tr(e){return"undefined"!=typeof ShadowRoot&&(e instanceof ti(e).ShadowRoot||e instanceof ShadowRoot)}let to={name:"applyStyles",enabled:!0,phase:"write",fn:function(e){var t=e.state;Object.keys(t.elements).forEach(function(e){var i=t.styles[e]||{},n=t.attributes[e]||{},s=t.elements[e];ts(s)&&tt(s)&&(Object.assign(s.style,i),Object.keys(n).forEach(function(e){var t=n[e];!1===t?s.removeAttribute(e):s.setAttribute(e,!0===t?"":t)}))})},effect:function(e){var t=e.state,i={popper:{position:t.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(t.elements.popper.style,i.popper),t.styles=i,t.elements.arrow&&Object.assign(t.elements.arrow.style,i.arrow),function(){Object.keys(t.elements).forEach(function(e){var n=t.elements[e],s=t.attributes[e]||{},r=Object.keys(t.styles.hasOwnProperty(e)?t.styles[e]:i[e]).reduce(function(e,t){return e[t]="",e},{});ts(n)&&tt(n)&&(Object.assign(n.style,r),Object.keys(s).forEach(function(e){n.removeAttribute(e)}))})}},requires:["computeStyles"]};function ta(e){return e.split("-")[0]}var tl=Math.max,tc=Math.min,th=Math.round;function td(){var e=navigator.userAgentData;return null!=e&&e.brands&&Array.isArray(e.brands)?e.brands.map(function(e){return e.brand+"/"+e.version}).join(" "):navigator.userAgent}function tu(){return!/^((?!chrome|android).)*safari/i.test(td())}function tf(e,t,i){void 0===t&&(t=!1),void 0===i&&(i=!1);var n=e.getBoundingClientRect(),s=1,r=1;t&&ts(e)&&(s=e.offsetWidth>0&&th(n.width)/e.offsetWidth||1,r=e.offsetHeight>0&&th(n.height)/e.offsetHeight||1);var o=(tn(e)?ti(e):window).visualViewport,a=!tu()&&i,l=(n.left+(a&&o?o.offsetLeft:0))/s,c=(n.top+(a&&o?o.offsetTop:0))/r,h=n.width/s,d=n.height/r;return{width:h,height:d,top:c,right:l+h,bottom:c+d,left:l,x:l,y:c}}function tp(e){var t=tf(e),i=e.offsetWidth,n=e.offsetHeight;return 1>=Math.abs(t.width-i)&&(i=t.width),1>=Math.abs(t.height-n)&&(n=t.height),{x:e.offsetLeft,y:e.offsetTop,width:i,height:n}}function tg(e,t){var i=t.getRootNode&&t.getRootNode();if(e.contains(t))return!0;if(i&&tr(i)){var n=t;do{if(n&&e.isSameNode(n))return!0;n=n.parentNode||n.host}while(n)}return!1}function tm(e){return ti(e).getComputedStyle(e)}function t8(e){return["table","td","th"].indexOf(tt(e))>=0}function tv(e){return((tn(e)?e.ownerDocument:e.document)||window.document).documentElement}function tb(e){return"html"===tt(e)?e:e.assignedSlot||e.parentNode||(tr(e)?e.host:null)||tv(e)}function ty(e){return ts(e)&&"fixed"!==tm(e).position?e.offsetParent:null}function tw(e){for(var t=ti(e),i=ty(e);i&&t8(i)&&"static"===tm(i).position;)i=ty(i);return i&&("html"===tt(i)||"body"===tt(i)&&"static"===tm(i).position)?t:i||function(e){var t=/firefox/i.test(td());if(/Trident/i.test(td())&&ts(e)&&"fixed"===tm(e).position)return null;var i=tb(e);for(tr(i)&&(i=i.host);ts(i)&&0>["html","body"].indexOf(tt(i));){var n=tm(i);if("none"!==n.transform||"none"!==n.perspective||"paint"===n.contain||-1!==["transform","perspective"].indexOf(n.willChange)||t&&"filter"===n.willChange||t&&n.filter&&"none"!==n.filter)return i;i=i.parentNode}return null}(e)||t}function t$(e){return["top","bottom"].indexOf(e)>=0?"x":"y"}function tA(e,t,i){return tl(e,tc(t,i))}function tE(e){return Object.assign({},{top:0,right:0,bottom:0,left:0},e)}function tC(e,t){return t.reduce(function(t,i){return t[i]=e,t},{})}let tT={name:"arrow",enabled:!0,phase:"main",fn:function(e){var t,i=e.state,n=e.name,s=e.options,r=i.elements.arrow,o=i.modifiersData.popperOffsets,a=ta(i.placement),l=t$(a),c=[eq,eB].indexOf(a)>=0?"height":"width";if(r&&o){var h,d,u=(h=s.padding,d=i,tE("number"!=typeof(h="function"==typeof h?h(Object.assign({},d.rects,{placement:d.placement})):h)?h:tC(h,eV))),f=tp(r),p=i.rects.reference[c]+i.rects.reference[l]-o[l]-i.rects.popper[c],g=o[l]-i.rects.reference[l],m=tw(r),v=m?"y"===l?m.clientHeight||0:m.clientWidth||0:0,b=u["y"===l?eW:eq],y=v-f[c]-u["y"===l?ez:eB],w=v/2-f[c]/2+(p/2-g/2),$=tA(b,w,y),A=l;i.modifiersData[n]=((t={})[A]=$,t.centerOffset=$-w,t)}},effect:function(e){var t=e.state,i=e.options.element,n=void 0===i?"[data-popper-arrow]":i;null!=n&&("string"!=typeof n||(n=t.elements.popper.querySelector(n)))&&tg(t.elements.popper,n)&&(t.elements.arrow=n)},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]};function tx(e){return e.split("-")[1]}var tk={top:"auto",right:"auto",bottom:"auto",left:"auto"};function tL(e){var t,i=e.popper,n=e.popperRect,s=e.placement,r=e.variation,o=e.offsets,a=e.position,l=e.gpuAcceleration,c=e.adaptive,h=e.roundOffsets,d=e.isFixed,u=o.x,f=void 0===u?0:u,p=o.y,g=void 0===p?0:p,m="function"==typeof h?h({x:f,y:g}):{x:f,y:g};f=m.x,g=m.y;var v=o.hasOwnProperty("x"),b=o.hasOwnProperty("y"),y=eq,w=eW,$=window;if(c){var A=tw(i),E="clientHeight",C="clientWidth";A===ti(i)&&"static"!==tm(A=tv(i)).position&&"absolute"===a&&(E="scrollHeight",C="scrollWidth"),(s===eW||(s===eq||s===eB)&&"end"===r)&&(w=ez,g-=(d&&A===$&&$.visualViewport?$.visualViewport.height:A[E])-n.height,g*=l?1:-1),s!==eq&&(s!==eW&&s!==ez||"end"!==r)||(y=eB,f-=(d&&A===$&&$.visualViewport?$.visualViewport.width:A[C])-n.width,f*=l?1:-1)}var T,x,k,L,O,D,S=Object.assign({position:a},c&&tk),I=!0===h?(T={x:f,y:g},x=ti(i),k=T.x,L=T.y,{x:th(k*(O=x.devicePixelRatio||1))/O||0,y:th(L*O)/O||0}):{x:f,y:g};return f=I.x,g=I.y,l?Object.assign({},S,((D={})[w]=b?"0":"",D[y]=v?"0":"",D.transform=1>=($.devicePixelRatio||1)?"translate("+f+"px, "+g+"px)":"translate3d("+f+"px, "+g+"px, 0)",D)):Object.assign({},S,((t={})[w]=b?g+"px":"",t[y]=v?f+"px":"",t.transform="",t))}let tO={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(e){var t=e.state,i=e.options,n=i.gpuAcceleration,s=i.adaptive,r=i.roundOffsets,o=void 0===r||r,a={placement:ta(t.placement),variation:tx(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:void 0===n||n,isFixed:"fixed"===t.options.strategy};null!=t.modifiersData.popperOffsets&&(t.styles.popper=Object.assign({},t.styles.popper,tL(Object.assign({},a,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:void 0===s||s,roundOffsets:o})))),null!=t.modifiersData.arrow&&(t.styles.arrow=Object.assign({},t.styles.arrow,tL(Object.assign({},a,{offsets:t.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:o})))),t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-placement":t.placement})},data:{}};var tD={passive:!0};let t9={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(e){var t=e.state,i=e.instance,n=e.options,s=n.scroll,r=void 0===s||s,o=n.resize,a=void 0===o||o,l=ti(t.elements.popper),c=[].concat(t.scrollParents.reference,t.scrollParents.popper);return r&&c.forEach(function(e){e.addEventListener("scroll",i.update,tD)}),a&&l.addEventListener("resize",i.update,tD),function(){r&&c.forEach(function(e){e.removeEventListener("scroll",i.update,tD)}),a&&l.removeEventListener("resize",i.update,tD)}},data:{}};var tS={left:"right",right:"left",bottom:"top",top:"bottom"};function tI(e){return e.replace(/left|right|bottom|top/g,function(e){return tS[e]})}var t_={start:"end",end:"start"};function tP(e){return e.replace(/start|end/g,function(e){return t_[e]})}function tN(e){var t=ti(e);return{scrollLeft:t.pageXOffset,scrollTop:t.pageYOffset}}function tM(e){return tf(tv(e)).left+tN(e).scrollLeft}function tF(e){var t=tm(e),i=t.overflow,n=t.overflowX,s=t.overflowY;return/auto|scroll|overlay|hidden/.test(i+s+n)}function tH(e,t){void 0===t&&(t=[]);var i,n=function e(t){return["html","body","#document"].indexOf(tt(t))>=0?t.ownerDocument.body:ts(t)&&tF(t)?t:e(tb(t))}(e),s=n===(null==(i=e.ownerDocument)?void 0:i.body),r=ti(n),o=s?[r].concat(r.visualViewport||[],tF(n)?n:[]):n,a=t.concat(o);return s?a:a.concat(tH(tb(o)))}function tj(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function tW(e,t,i){var n,s,r,o,a,l,c,h,d,u,f,p;return t===eQ?tj(function(e,t){var i=ti(e),n=tv(e),s=i.visualViewport,r=n.clientWidth,o=n.clientHeight,a=0,l=0;if(s){r=s.width,o=s.height;var c=tu();(c||!c&&"fixed"===t)&&(a=s.offsetLeft,l=s.offsetTop)}return{width:r,height:o,x:a+tM(e),y:l}}(e,i)):tn(t)?(n=t,(r=tf(n,!1,"fixed"===(s=i))).top=r.top+n.clientTop,r.left=r.left+n.clientLeft,r.bottom=r.top+n.clientHeight,r.right=r.left+n.clientWidth,r.width=n.clientWidth,r.height=n.clientHeight,r.x=r.left,r.y=r.top,r):tj((o=tv(e),l=tv(o),c=tN(o),h=null==(a=o.ownerDocument)?void 0:a.body,d=tl(l.scrollWidth,l.clientWidth,h?h.scrollWidth:0,h?h.clientWidth:0),u=tl(l.scrollHeight,l.clientHeight,h?h.scrollHeight:0,h?h.clientHeight:0),f=-c.scrollLeft+tM(o),p=-c.scrollTop,"rtl"===tm(h||l).direction&&(f+=tl(l.clientWidth,h?h.clientWidth:0)-d),{width:d,height:u,x:f,y:p}))}function tz(e){var t,i=e.reference,n=e.element,s=e.placement,r=s?ta(s):null,o=s?tx(s):null,a=i.x+i.width/2-n.width/2,l=i.y+i.height/2-n.height/2;switch(r){case eW:t={x:a,y:i.y-n.height};break;case ez:t={x:a,y:i.y+i.height};break;case eB:t={x:i.x+i.width,y:l};break;case eq:t={x:i.x-n.width,y:l};break;default:t={x:i.x,y:i.y}}var c=r?t$(r):null;if(null!=c){var h="y"===c?"height":"width";switch(o){case e0:t[c]=t[c]-(i[h]/2-n[h]/2);break;case"end":t[c]=t[c]+(i[h]/2-n[h]/2)}}return t}function tB(e,t){void 0===t&&(t={});var i,n,s,r,o,a,l,c,h,d,u=t,f=u.placement,p=void 0===f?e.placement:f,g=u.strategy,m=void 0===g?e.strategy:g,v=u.boundary,b=u.rootBoundary,y=u.elementContext,w=void 0===y?eX:y,$=u.altBoundary,A=u.padding,E=void 0===A?0:A,C=tE("number"!=typeof E?E:tC(E,eV)),T=e.rects.popper,x=e.elements[void 0!==$&&$?w===eX?eY:eX:w],k=(i=tn(x)?x:x.contextElement||tv(e.elements.popper),n=void 0===v?eK:v,s=void 0===b?eQ:b,r=m,h=(c=[].concat("clippingParents"===n?(o=i,a=tH(tb(o)),l=["absolute","fixed"].indexOf(tm(o).position)>=0&&ts(o)?tw(o):o,tn(l)?a.filter(function(e){return tn(e)&&tg(e,l)&&"body"!==tt(e)}):[]):[].concat(n),[s]))[0],(d=c.reduce(function(e,t){var n=tW(i,t,r);return e.top=tl(n.top,e.top),e.right=tc(n.right,e.right),e.bottom=tc(n.bottom,e.bottom),e.left=tl(n.left,e.left),e},tW(i,h,r))).width=d.right-d.left,d.height=d.bottom-d.top,d.x=d.left,d.y=d.top,d),L=tf(e.elements.reference),O=tz({reference:L,element:T,strategy:"absolute",placement:p}),D=tj(Object.assign({},T,O)),S=w===eX?D:L,I={top:k.top-S.top+C.top,bottom:S.bottom-k.bottom+C.bottom,left:k.left-S.left+C.left,right:S.right-k.right+C.right},_=e.modifiersData.offset;if(w===eX&&_){var P=_[p];Object.keys(I).forEach(function(e){var t=[eB,ez].indexOf(e)>=0?1:-1,i=[eW,ez].indexOf(e)>=0?"y":"x";I[e]+=P[i]*t})}return I}let tq={name:"flip",enabled:!0,phase:"main",fn:function(e){var t=e.state,i=e.options,n=e.name;if(!t.modifiersData[n]._skip){for(var s=i.mainAxis,r=void 0===s||s,o=i.altAxis,a=void 0===o||o,l=i.fallbackPlacements,c=i.padding,h=i.boundary,d=i.rootBoundary,u=i.altBoundary,f=i.flipVariations,p=void 0===f||f,g=i.allowedAutoPlacements,m=t.options.placement,v=ta(m),b=l||(v!==m&&p?function(e){if(ta(e)===eR)return[];var t=tI(e);return[tP(e),t,tP(t)]}(m):[tI(m)]),y=[m].concat(b).reduce(function(e,i){var n,s,r,o,a,l,u,f,m,v,b,y,w,$;return e.concat(ta(i)===eR?(n=t,s={placement:i,boundary:h,rootBoundary:d,padding:c,flipVariations:p,allowedAutoPlacements:g},o=(r=s).placement,a=r.boundary,l=r.rootBoundary,u=r.padding,f=r.flipVariations,v=void 0===(m=r.allowedAutoPlacements)?e1:m,0===(w=(y=(b=tx(o))?f?eU:eU.filter(function(e){return tx(e)===b}):eV).filter(function(e){return v.indexOf(e)>=0})).length&&(w=y),Object.keys($=w.reduce(function(e,t){return e[t]=tB(n,{placement:t,boundary:a,rootBoundary:l,padding:u})[ta(t)],e},{})).sort(function(e,t){return $[e]-$[t]})):i)},[]),w=t.rects.reference,$=t.rects.popper,A=new Map,E=!0,C=y[0],T=0;T<y.length;T++){var x=y[T],k=ta(x),L=tx(x)===e0,O=[eW,ez].indexOf(k)>=0,D=O?"width":"height",S=tB(t,{placement:x,boundary:h,rootBoundary:d,altBoundary:u,padding:c}),I=O?L?eB:eq:L?ez:eW;w[D]>$[D]&&(I=tI(I));var _=tI(I),P=[];if(r&&P.push(S[k]<=0),a&&P.push(S[I]<=0,S[_]<=0),P.every(function(e){return e})){C=x,E=!1;break}A.set(x,P)}if(E)for(var N=function(e){var t=y.find(function(t){var i=A.get(t);if(i)return i.slice(0,e).every(function(e){return e})});if(t)return C=t,"break"},M=p?3:1;M>0&&"break"!==N(M);M--);t.placement!==C&&(t.modifiersData[n]._skip=!0,t.placement=C,t.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}};function tR(e,t,i){return void 0===i&&(i={x:0,y:0}),{top:e.top-t.height-i.y,right:e.right-t.width+i.x,bottom:e.bottom-t.height+i.y,left:e.left-t.width-i.x}}function tV(e){return[eW,eB,ez,eq].some(function(t){return e[t]>=0})}let t0={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(e){var t=e.state,i=e.name,n=t.rects.reference,s=t.rects.popper,r=t.modifiersData.preventOverflow,o=tB(t,{elementContext:"reference"}),a=tB(t,{altBoundary:!0}),l=tR(o,n),c=tR(a,s,r),h=tV(l),d=tV(c);t.modifiersData[i]={referenceClippingOffsets:l,popperEscapeOffsets:c,isReferenceHidden:h,hasPopperEscaped:d},t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-reference-hidden":h,"data-popper-escaped":d})}},tK={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(e){var t=e.state,i=e.options,n=e.name,s=i.offset,r=void 0===s?[0,0]:s,o=e1.reduce(function(e,i){var n,s,o,a,l,c,h,d;return e[i]=(n=i,s=t.rects,o=r,l=[eq,eW].indexOf(a=ta(n))>=0?-1:1,h=(c="function"==typeof o?o(Object.assign({},s,{placement:n})):o)[0],d=c[1],h=h||0,d=(d||0)*l,[eq,eB].indexOf(a)>=0?{x:d,y:h}:{x:h,y:d}),e},{}),a=o[t.placement],l=a.x,c=a.y;null!=t.modifiersData.popperOffsets&&(t.modifiersData.popperOffsets.x+=l,t.modifiersData.popperOffsets.y+=c),t.modifiersData[n]=o}},tQ={name:"popperOffsets",enabled:!0,phase:"read",fn:function(e){var t=e.state,i=e.name;t.modifiersData[i]=tz({reference:t.rects.reference,element:t.rects.popper,strategy:"absolute",placement:t.placement})},data:{}},tX={name:"preventOverflow",enabled:!0,phase:"main",fn:function(e){var t=e.state,i=e.options,n=e.name,s=i.mainAxis,r=i.altAxis,o=i.boundary,a=i.rootBoundary,l=i.altBoundary,c=i.padding,h=i.tether,d=void 0===h||h,u=i.tetherOffset,f=void 0===u?0:u,p=tB(t,{boundary:o,rootBoundary:a,padding:c,altBoundary:l}),g=ta(t.placement),m=tx(t.placement),v=!m,b=t$(g),y="x"===b?"y":"x",w=t.modifiersData.popperOffsets,$=t.rects.reference,A=t.rects.popper,E="function"==typeof f?f(Object.assign({},t.rects,{placement:t.placement})):f,C="number"==typeof E?{mainAxis:E,altAxis:E}:Object.assign({mainAxis:0,altAxis:0},E),T=t.modifiersData.offset?t.modifiersData.offset[t.placement]:null,x={x:0,y:0};if(w){if(void 0===s||s){var k,L="y"===b?eW:eq,O="y"===b?ez:eB,D="y"===b?"height":"width",S=w[b],I=S+p[L],_=S-p[O],P=d?-A[D]/2:0,N=m===e0?$[D]:A[D],M=m===e0?-A[D]:-$[D],F=t.elements.arrow,H=d&&F?tp(F):{width:0,height:0},j=t.modifiersData["arrow#persistent"]?t.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0},W=j[L],z=j[O],B=tA(0,$[D],H[D]),q=v?$[D]/2-P-B-W-C.mainAxis:N-B-W-C.mainAxis,R=v?-$[D]/2+P+B+z+C.mainAxis:M+B+z+C.mainAxis,V=t.elements.arrow&&tw(t.elements.arrow),K=V?"y"===b?V.clientTop||0:V.clientLeft||0:0,Q=null!=(k=null==T?void 0:T[b])?k:0,X=tA(d?tc(I,S+q-Q-K):I,S,d?tl(_,S+R-Q):_);w[b]=X,x[b]=X-S}if(void 0!==r&&r){var Y,U,G,Z,J,ee=w[y],et="y"===y?"height":"width",ei=ee+p["x"===b?eW:eq],en=ee-p["x"===b?ez:eB],es=-1!==[eW,eq].indexOf(g),er=null!=(J=null==T?void 0:T[y])?J:0,eo=es?ei:ee-$[et]-A[et]-er+C.altAxis,ea=es?ee+$[et]+A[et]-er-C.altAxis:en,el=d&&es?(Y=eo,U=ee,G=ea,(Z=tA(Y,U,G))>G?G:Z):tA(d?eo:ei,ee,d?ea:en);w[y]=el,x[y]=el-ee}t.modifiersData[n]=x}},requiresIfExists:["offset"]};var tY={placement:"bottom",modifiers:[],strategy:"absolute"};function tU(){for(var e=arguments.length,t=Array(e),i=0;i<e;i++)t[i]=arguments[i];return!t.some(function(e){return!(e&&"function"==typeof e.getBoundingClientRect)})}function t1(e){void 0===e&&(e={});var t=e,i=t.defaultModifiers,n=void 0===i?[]:i,s=t.defaultOptions,r=void 0===s?tY:s;return function(e,t,i){void 0===i&&(i=r);var s,o,a={placement:"bottom",orderedModifiers:[],options:Object.assign({},tY,r),modifiersData:{},elements:{reference:e,popper:t},attributes:{},styles:{}},l=[],c=!1,h={state:a,setOptions:function(i){var s,o,c,u,f,p,g="function"==typeof i?i(a.options):i;d(),a.options=Object.assign({},r,a.options,g),a.scrollParents={reference:tn(e)?tH(e):e.contextElement?tH(e.contextElement):[],popper:tH(t)};var m,v,b=(p=(o=s=Object.keys(v=(m=[].concat(n,a.options.modifiers)).reduce(function(e,t){var i=e[t.name];return e[t.name]=i?Object.assign({},i,t,{options:Object.assign({},i.options,t.options),data:Object.assign({},i.data,t.data)}):t,e},{})).map(function(e){return v[e]}),c=new Map,u=new Set,f=[],o.forEach(function(e){c.set(e.name,e)}),o.forEach(function(e){u.has(e.name)||function e(t){u.add(t.name),[].concat(t.requires||[],t.requiresIfExists||[]).forEach(function(t){if(!u.has(t)){var i=c.get(t);i&&e(i)}}),f.push(t)}(e)}),f),te.reduce(function(e,t){return e.concat(p.filter(function(e){return e.phase===t}))},[]));return a.orderedModifiers=b.filter(function(e){return e.enabled}),a.orderedModifiers.forEach(function(e){var t=e.name,i=e.options,n=e.effect;if("function"==typeof n){var s=n({state:a,name:t,instance:h,options:void 0===i?{}:i});l.push(s||function(){})}}),h.update()},forceUpdate:function(){if(!c){var e,t,i,n,s,r,o,l,d,u,f,p,g,m,v,b=a.elements,y=b.reference,w=b.popper;if(tU(y,w)){a.rects={reference:(e=y,t=tw(w),i="fixed"===a.options.strategy,u=ts(t),f=ts(t)&&(r=th((s=(n=t).getBoundingClientRect()).width)/n.offsetWidth||1,o=th(s.height)/n.offsetHeight||1,1!==r||1!==o),p=tv(t),g=tf(e,f,i),m={scrollLeft:0,scrollTop:0},v={x:0,y:0},(u||!u&&!i)&&(("body"!==tt(t)||tF(p))&&(m=(l=t)!==ti(l)&&ts(l)?{scrollLeft:(d=l).scrollLeft,scrollTop:d.scrollTop}:tN(l)),ts(t)?((v=tf(t,!0)).x+=t.clientLeft,v.y+=t.clientTop):p&&(v.x=tM(p))),{x:g.left+m.scrollLeft-v.x,y:g.top+m.scrollTop-v.y,width:g.width,height:g.height}),popper:tp(w)},a.reset=!1,a.placement=a.options.placement,a.orderedModifiers.forEach(function(e){return a.modifiersData[e.name]=Object.assign({},e.data)});for(var $=0;$<a.orderedModifiers.length;$++)if(!0!==a.reset){var A=a.orderedModifiers[$],E=A.fn,C=A.options,T=void 0===C?{}:C,x=A.name;"function"==typeof E&&(a=E({state:a,options:T,name:x,instance:h})||a)}else a.reset=!1,$=-1}}},update:(s=function(){return new Promise(function(e){h.forceUpdate(),e(a)})},function(){return o||(o=new Promise(function(e){Promise.resolve().then(function(){o=void 0,e(s())})})),o}),destroy:function(){d(),c=!0}};if(!tU(e,t))return h;function d(){l.forEach(function(e){return e()}),l=[]}return h.setOptions(i).then(function(e){!c&&i.onFirstUpdate&&i.onFirstUpdate(e)}),h}}var t3=t1(),t4=t1({defaultModifiers:[t9,tQ,tO,to]}),tG=t1({defaultModifiers:[t9,tQ,tO,to,tK,tq,tX,tT,t0]});let t2=Object.freeze(Object.defineProperty({__proto__:null,afterMain:e6,afterRead:eG,afterWrite:e5,applyStyles:to,arrow:tT,auto:eR,basePlacements:eV,beforeMain:e2,beforeRead:e3,beforeWrite:e7,bottom:ez,clippingParents:eK,computeStyles:tO,createPopper:tG,createPopperBase:t3,createPopperLite:t4,detectOverflow:tB,end:"end",eventListeners:t9,flip:tq,hide:t0,left:eq,main:eZ,modifierPhases:te,offset:tK,placements:e1,popper:eX,popperGenerator:t1,popperOffsets:tQ,preventOverflow:tX,read:e4,reference:eY,right:eB,start:e0,top:eW,variationPlacements:eU,viewport:eQ,write:eJ},Symbol.toStringTag,{value:"Module"})),tZ="dropdown",t6=".bs.dropdown",t7=".data-api",tJ="ArrowDown",t5=`hide${t6}`,ie=`hidden${t6}`,it=`show${t6}`,ii=`shown${t6}`,is=`click${t6}${t7}`,ir=`keydown${t6}${t7}`,io=`keyup${t6}${t7}`,ia="show",il='[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)',ic=`${il}.${ia}`,ih=".dropdown-menu",id=p()?"top-end":"top-start",iu=p()?"top-start":"top-end",ip=p()?"bottom-end":"bottom-start",ig=p()?"bottom-start":"bottom-end",im=p()?"left-start":"right-start",i8=p()?"right-start":"left-start",iv={autoClose:!0,boundary:"clippingParents",display:"dynamic",offset:[0,2],popperConfig:null,reference:"toggle"},ib={autoClose:"(boolean|string)",boundary:"(string|element)",display:"string",offset:"(array|string|function)",popperConfig:"(null|object|function)",reference:"(string|element|object)"};class iy extends W{constructor(e,t){super(e,t),this._popper=null,this._parent=this._element.parentNode,this._menu=B.next(this._element,ih)[0]||B.prev(this._element,ih)[0]||B.findOne(ih,this._parent),this._inNavbar=this._detectNavbar()}static get Default(){return iv}static get DefaultType(){return ib}static get NAME(){return tZ}toggle(){return this._isShown()?this.hide():this.show()}show(){if(l(this._element)||this._isShown())return;let e={relatedTarget:this._element};if(!P.trigger(this._element,it,e).defaultPrevented){if(this._createPopper(),"ontouchstart"in document.documentElement&&!this._parent.closest(".navbar-nav"))for(let t of[].concat(...document.body.children))P.on(t,"mouseover",h);this._element.focus(),this._element.setAttribute("aria-expanded",!0),this._menu.classList.add(ia),this._element.classList.add(ia),P.trigger(this._element,ii,e)}}hide(){if(l(this._element)||!this._isShown())return;let e={relatedTarget:this._element};this._completeHide(e)}dispose(){this._popper&&this._popper.destroy(),super.dispose()}update(){this._inNavbar=this._detectNavbar(),this._popper&&this._popper.update()}_completeHide(e){if(!P.trigger(this._element,t5,e).defaultPrevented){if("ontouchstart"in document.documentElement)for(let t of[].concat(...document.body.children))P.off(t,"mouseover",h);this._popper&&this._popper.destroy(),this._menu.classList.remove(ia),this._element.classList.remove(ia),this._element.setAttribute("aria-expanded","false"),H.removeDataAttribute(this._menu,"popper"),P.trigger(this._element,ie,e)}}_getConfig(e){if("object"==typeof(e=super._getConfig(e)).reference&&!r(e.reference)&&"function"!=typeof e.reference.getBoundingClientRect)throw TypeError(`${tZ.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`);return e}_createPopper(){if(void 0===t2)throw TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");let e=this._element;"parent"===this._config.reference?e=this._parent:r(this._config.reference)?e=o(this._config.reference):"object"==typeof this._config.reference&&(e=this._config.reference);let t=this._getPopperConfig();this._popper=tG(e,this._menu,t)}_isShown(){return this._menu.classList.contains(ia)}_getPlacement(){let e=this._parent;if(e.classList.contains("dropend"))return im;if(e.classList.contains("dropstart"))return i8;if(e.classList.contains("dropup-center"))return"top";if(e.classList.contains("dropdown-center"))return"bottom";let t="end"===getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();return e.classList.contains("dropup")?t?iu:id:t?ig:ip}_detectNavbar(){return null!==this._element.closest(".navbar")}_getOffset(){let{offset:e}=this._config;return"string"==typeof e?e.split(",").map(e=>Number.parseInt(e,10)):"function"==typeof e?t=>e(t,this._element):e}_getPopperConfig(){let e={placement:this._getPlacement(),modifiers:[{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"offset",options:{offset:this._getOffset()}}]};return(this._inNavbar||"static"===this._config.display)&&(H.setDataAttribute(this._menu,"popper","static"),e.modifiers=[{name:"applyStyles",enabled:!1}]),{...e,...m(this._config.popperConfig,[e])}}_selectMenuItem({key:e,target:t}){let i=B.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",this._menu).filter(e=>a(e));i.length&&b(i,t,e===tJ,!i.includes(t)).focus()}static jQueryInterface(e){return this.each(function(){let t=iy.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e]()}})}static clearMenus(e){if(2===e.button||"keyup"===e.type&&"Tab"!==e.key)return;let t=B.find(ic);for(let i of t){let n=iy.getInstance(i);if(!n||!1===n._config.autoClose)continue;let s=e.composedPath(),r=s.includes(n._menu);if(s.includes(n._element)||"inside"===n._config.autoClose&&!r||"outside"===n._config.autoClose&&r||n._menu.contains(e.target)&&("keyup"===e.type&&"Tab"===e.key||/input|select|option|textarea|form/i.test(e.target.tagName)))continue;let o={relatedTarget:n._element};"click"===e.type&&(o.clickEvent=e),n._completeHide(o)}}static dataApiKeydownHandler(e){let t=/input|textarea/i.test(e.target.tagName),i="Escape"===e.key,n=["ArrowUp",tJ].includes(e.key);if(!n&&!i||t&&!i)return;e.preventDefault();let s=this.matches(il)?this:B.prev(this,il)[0]||B.next(this,il)[0]||B.findOne(il,e.delegateTarget.parentNode),r=iy.getOrCreateInstance(s);if(n)return e.stopPropagation(),r.show(),void r._selectMenuItem(e);r._isShown()&&(e.stopPropagation(),r.hide(),s.focus())}}P.on(document,ir,il,iy.dataApiKeydownHandler),P.on(document,ir,ih,iy.dataApiKeydownHandler),P.on(document,is,iy.clearMenus),P.on(document,io,iy.clearMenus),P.on(document,is,il,function(e){e.preventDefault(),iy.getOrCreateInstance(this).toggle()}),g(iy);let iw="backdrop",i$="show",iA=`mousedown.bs.${iw}`,iE={className:"modal-backdrop",clickCallback:null,isAnimated:!1,isVisible:!0,rootElement:"body"},iC={className:"string",clickCallback:"(function|null)",isAnimated:"boolean",isVisible:"boolean",rootElement:"(element|string)"};class iT extends j{constructor(e){super(),this._config=this._getConfig(e),this._isAppended=!1,this._element=null}static get Default(){return iE}static get DefaultType(){return iC}static get NAME(){return iw}show(e){if(!this._config.isVisible)return void m(e);this._append();let t=this._getElement();this._config.isAnimated&&d(t),t.classList.add(i$),this._emulateAnimation(()=>{m(e)})}hide(e){this._config.isVisible?(this._getElement().classList.remove(i$),this._emulateAnimation(()=>{this.dispose(),m(e)})):m(e)}dispose(){this._isAppended&&(P.off(this._element,iA),this._element.remove(),this._isAppended=!1)}_getElement(){if(!this._element){let e=document.createElement("div");e.className=this._config.className,this._config.isAnimated&&e.classList.add("fade"),this._element=e}return this._element}_configAfterMerge(e){return e.rootElement=o(e.rootElement),e}_append(){if(this._isAppended)return;let e=this._getElement();this._config.rootElement.append(e),P.on(e,iA,()=>{m(this._config.clickCallback)}),this._isAppended=!0}_emulateAnimation(e){v(e,this._getElement(),this._config.isAnimated)}}let ix=".bs.focustrap",ik=`focusin${ix}`,iL=`keydown.tab${ix}`,iO="backward",iD={autofocus:!0,trapElement:null},i9={autofocus:"boolean",trapElement:"element"};class iS extends j{constructor(e){super(),this._config=this._getConfig(e),this._isActive=!1,this._lastTabNavDirection=null}static get Default(){return iD}static get DefaultType(){return i9}static get NAME(){return"focustrap"}activate(){this._isActive||(this._config.autofocus&&this._config.trapElement.focus(),P.off(document,ix),P.on(document,ik,e=>this._handleFocusin(e)),P.on(document,iL,e=>this._handleKeydown(e)),this._isActive=!0)}deactivate(){this._isActive&&(this._isActive=!1,P.off(document,ix))}_handleFocusin(e){let{trapElement:t}=this._config;if(e.target===document||e.target===t||t.contains(e.target))return;let i=B.focusableChildren(t);0===i.length?t.focus():this._lastTabNavDirection===iO?i[i.length-1].focus():i[0].focus()}_handleKeydown(e){"Tab"===e.key&&(this._lastTabNavDirection=e.shiftKey?iO:"forward")}}let iI=".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",i_=".sticky-top",iP="padding-right",iN="margin-right";class iM{constructor(){this._element=document.body}getWidth(){let e=document.documentElement.clientWidth;return Math.abs(window.innerWidth-e)}hide(){let e=this.getWidth();this._disableOverFlow(),this._setElementAttributes(this._element,iP,t=>t+e),this._setElementAttributes(iI,iP,t=>t+e),this._setElementAttributes(i_,iN,t=>t-e)}reset(){this._resetElementAttributes(this._element,"overflow"),this._resetElementAttributes(this._element,iP),this._resetElementAttributes(iI,iP),this._resetElementAttributes(i_,iN)}isOverflowing(){return this.getWidth()>0}_disableOverFlow(){this._saveInitialAttribute(this._element,"overflow"),this._element.style.overflow="hidden"}_setElementAttributes(e,t,i){let n=this.getWidth();this._applyManipulationCallback(e,e=>{if(e!==this._element&&window.innerWidth>e.clientWidth+n)return;this._saveInitialAttribute(e,t);let s=window.getComputedStyle(e).getPropertyValue(t);e.style.setProperty(t,`${i(Number.parseFloat(s))}px`)})}_saveInitialAttribute(e,t){let i=e.style.getPropertyValue(t);i&&H.setDataAttribute(e,t,i)}_resetElementAttributes(e,t){this._applyManipulationCallback(e,e=>{let i=H.getDataAttribute(e,t);null!==i?(H.removeDataAttribute(e,t),e.style.setProperty(t,i)):e.style.removeProperty(t)})}_applyManipulationCallback(e,t){if(r(e))t(e);else for(let i of B.find(e,this._element))t(i)}}let iF=".bs.modal",iH=`hide${iF}`,ij=`hidePrevented${iF}`,iW=`hidden${iF}`,iz=`show${iF}`,iB=`shown${iF}`,iq=`resize${iF}`,iR=`click.dismiss${iF}`,iV=`mousedown.dismiss${iF}`,i0=`keydown.dismiss${iF}`,iK=`click${iF}.data-api`,iQ="modal-open",iX="show",iY="modal-static",iU={backdrop:!0,focus:!0,keyboard:!0},i1={backdrop:"(boolean|string)",focus:"boolean",keyboard:"boolean"};class i3 extends W{constructor(e,t){super(e,t),this._dialog=B.findOne(".modal-dialog",this._element),this._backdrop=this._initializeBackDrop(),this._focustrap=this._initializeFocusTrap(),this._isShown=!1,this._isTransitioning=!1,this._scrollBar=new iM,this._addEventListeners()}static get Default(){return iU}static get DefaultType(){return i1}static get NAME(){return"modal"}toggle(e){return this._isShown?this.hide():this.show(e)}show(e){this._isShown||this._isTransitioning||P.trigger(this._element,iz,{relatedTarget:e}).defaultPrevented||(this._isShown=!0,this._isTransitioning=!0,this._scrollBar.hide(),document.body.classList.add(iQ),this._adjustDialog(),this._backdrop.show(()=>this._showElement(e)))}hide(){this._isShown&&!this._isTransitioning&&(P.trigger(this._element,iH).defaultPrevented||(this._isShown=!1,this._isTransitioning=!0,this._focustrap.deactivate(),this._element.classList.remove(iX),this._queueCallback(()=>this._hideModal(),this._element,this._isAnimated())))}dispose(){P.off(window,iF),P.off(this._dialog,iF),this._backdrop.dispose(),this._focustrap.deactivate(),super.dispose()}handleUpdate(){this._adjustDialog()}_initializeBackDrop(){return new iT({isVisible:Boolean(this._config.backdrop),isAnimated:this._isAnimated()})}_initializeFocusTrap(){return new iS({trapElement:this._element})}_showElement(e){document.body.contains(this._element)||document.body.append(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.scrollTop=0;let t=B.findOne(".modal-body",this._dialog);t&&(t.scrollTop=0),d(this._element),this._element.classList.add(iX),this._queueCallback(()=>{this._config.focus&&this._focustrap.activate(),this._isTransitioning=!1,P.trigger(this._element,iB,{relatedTarget:e})},this._dialog,this._isAnimated())}_addEventListeners(){P.on(this._element,i0,e=>{"Escape"===e.key&&(this._config.keyboard?this.hide():this._triggerBackdropTransition())}),P.on(window,iq,()=>{this._isShown&&!this._isTransitioning&&this._adjustDialog()}),P.on(this._element,iV,e=>{P.one(this._element,iR,t=>{this._element===e.target&&this._element===t.target&&("static"!==this._config.backdrop?this._config.backdrop&&this.hide():this._triggerBackdropTransition())})})}_hideModal(){this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._isTransitioning=!1,this._backdrop.hide(()=>{document.body.classList.remove(iQ),this._resetAdjustments(),this._scrollBar.reset(),P.trigger(this._element,iW)})}_isAnimated(){return this._element.classList.contains("fade")}_triggerBackdropTransition(){if(P.trigger(this._element,ij).defaultPrevented)return;let e=this._element.scrollHeight>document.documentElement.clientHeight,t=this._element.style.overflowY;"hidden"===t||this._element.classList.contains(iY)||(e||(this._element.style.overflowY="hidden"),this._element.classList.add(iY),this._queueCallback(()=>{this._element.classList.remove(iY),this._queueCallback(()=>{this._element.style.overflowY=t},this._dialog)},this._dialog),this._element.focus())}_adjustDialog(){let e=this._element.scrollHeight>document.documentElement.clientHeight,t=this._scrollBar.getWidth(),i=t>0;if(i&&!e){let n=p()?"paddingLeft":"paddingRight";this._element.style[n]=`${t}px`}if(!i&&e){let s=p()?"paddingRight":"paddingLeft";this._element.style[s]=`${t}px`}}_resetAdjustments(){this._element.style.paddingLeft="",this._element.style.paddingRight=""}static jQueryInterface(e,t){return this.each(function(){let i=i3.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===i[e])throw TypeError(`No method named "${e}"`);i[e](t)}})}}P.on(document,iK,'[data-bs-toggle="modal"]',function(e){let t=B.getElementFromSelector(this);["A","AREA"].includes(this.tagName)&&e.preventDefault(),P.one(t,iz,e=>{e.defaultPrevented||P.one(t,iW,()=>{a(this)&&this.focus()})});let i=B.findOne(".modal.show");i&&i3.getInstance(i).hide(),i3.getOrCreateInstance(t).toggle(this)}),q(i3),g(i3);let i4=".bs.offcanvas",iG=".data-api",i2=`load${i4}${iG}`,iZ="show",i6="showing",i7="hiding",iJ=".offcanvas.show",i5=`show${i4}`,ne=`shown${i4}`,nt=`hide${i4}`,ni=`hidePrevented${i4}`,nn=`hidden${i4}`,ns=`resize${i4}`,nr=`click${i4}${iG}`,no=`keydown.dismiss${i4}`,na={backdrop:!0,keyboard:!0,scroll:!1},nl={backdrop:"(boolean|string)",keyboard:"boolean",scroll:"boolean"};class nc extends W{constructor(e,t){super(e,t),this._isShown=!1,this._backdrop=this._initializeBackDrop(),this._focustrap=this._initializeFocusTrap(),this._addEventListeners()}static get Default(){return na}static get DefaultType(){return nl}static get NAME(){return"offcanvas"}toggle(e){return this._isShown?this.hide():this.show(e)}show(e){this._isShown||P.trigger(this._element,i5,{relatedTarget:e}).defaultPrevented||(this._isShown=!0,this._backdrop.show(),this._config.scroll||(new iM).hide(),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.classList.add(i6),this._queueCallback(()=>{this._config.scroll&&!this._config.backdrop||this._focustrap.activate(),this._element.classList.add(iZ),this._element.classList.remove(i6),P.trigger(this._element,ne,{relatedTarget:e})},this._element,!0))}hide(){this._isShown&&(P.trigger(this._element,nt).defaultPrevented||(this._focustrap.deactivate(),this._element.blur(),this._isShown=!1,this._element.classList.add(i7),this._backdrop.hide(),this._queueCallback(()=>{this._element.classList.remove(iZ,i7),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._config.scroll||(new iM).reset(),P.trigger(this._element,nn)},this._element,!0)))}dispose(){this._backdrop.dispose(),this._focustrap.deactivate(),super.dispose()}_initializeBackDrop(){let e=Boolean(this._config.backdrop);return new iT({className:"offcanvas-backdrop",isVisible:e,isAnimated:!0,rootElement:this._element.parentNode,clickCallback:e?()=>{"static"!==this._config.backdrop?this.hide():P.trigger(this._element,ni)}:null})}_initializeFocusTrap(){return new iS({trapElement:this._element})}_addEventListeners(){P.on(this._element,no,e=>{"Escape"===e.key&&(this._config.keyboard?this.hide():P.trigger(this._element,ni))})}static jQueryInterface(e){return this.each(function(){let t=nc.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e](this)}})}}P.on(document,nr,'[data-bs-toggle="offcanvas"]',function(e){let t=B.getElementFromSelector(this);if(["A","AREA"].includes(this.tagName)&&e.preventDefault(),l(this))return;P.one(t,nn,()=>{a(this)&&this.focus()});let i=B.findOne(iJ);i&&i!==t&&nc.getInstance(i).hide(),nc.getOrCreateInstance(t).toggle(this)}),P.on(window,i2,()=>{for(let e of B.find(iJ))nc.getOrCreateInstance(e).show()}),P.on(window,ns,()=>{for(let e of B.find("[aria-modal][class*=show][class*=offcanvas-]"))"fixed"!==getComputedStyle(e).position&&nc.getOrCreateInstance(e).hide()}),q(nc),g(nc);let nh={"*":["class","dir","id","lang","role",/^aria-[\w-]*$/i],a:["target","href","title","rel"],area:[],b:[],br:[],col:[],code:[],div:[],em:[],hr:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],i:[],img:["src","srcset","alt","title","width","height"],li:[],ol:[],p:[],pre:[],s:[],small:[],span:[],sub:[],sup:[],strong:[],u:[],ul:[]},nd=new Set(["background","cite","href","itemtype","longdesc","GETer","src","xlink:href"]),nu=/^(?!javascript:)(?:[a-z0-9+.-]+:|[^&:/?#]*(?:[/?#]|$))/i,nf=(e,t)=>{let i=e.nodeName.toLowerCase();return t.includes(i)?!nd.has(i)||Boolean(nu.test(e.nodeValue)):t.filter(e=>e instanceof RegExp).some(e=>e.test(i))},np={allowList:nh,content:{},extraClass:"",html:!1,sanitize:!0,sanitizeFn:null,template:"<div></div>"},ng={allowList:"object",content:"object",extraClass:"(string|function)",html:"boolean",sanitize:"boolean",sanitizeFn:"(null|function)",template:"string"},nm={entry:"(string|element|function|null)",selector:"(string|element)"};class n8 extends j{constructor(e){super(),this._config=this._getConfig(e)}static get Default(){return np}static get DefaultType(){return ng}static get NAME(){return"TemplateFactory"}getContent(){return Object.values(this._config.content).map(e=>this._resolvePossibleFunction(e)).filter(Boolean)}hasContent(){return this.getContent().length>0}changeContent(e){return this._checkContent(e),this._config.content={...this._config.content,...e},this}toHtml(){let e=document.createElement("div");for(let[t,i]of(e.innerHTML=this._maybeSanitize(this._config.template),Object.entries(this._config.content)))this._setContent(e,i,t);let n=e.children[0],s=this._resolvePossibleFunction(this._config.extraClass);return s&&n.classList.add(...s.split(" ")),n}_typeCheckConfig(e){super._typeCheckConfig(e),this._checkContent(e.content)}_checkContent(e){for(let[t,i]of Object.entries(e))super._typeCheckConfig({selector:t,entry:i},nm)}_setContent(e,t,i){let n=B.findOne(i,e);n&&((t=this._resolvePossibleFunction(t))?r(t)?this._putElementInTemplate(o(t),n):this._config.html?n.innerHTML=this._maybeSanitize(t):n.textContent=t:n.remove())}_maybeSanitize(e){return this._config.sanitize?function(e,t,i){if(!e.length)return e;if(i&&"function"==typeof i)return i(e);let n=(new window.DOMParser).parseFromString(e,"text/html"),s=[].concat(...n.body.querySelectorAll("*"));for(let r of s){let o=r.nodeName.toLowerCase();if(!Object.keys(t).includes(o)){r.remove();continue}let a=[].concat(...r.attributes),l=[].concat(t["*"]||[],t[o]||[]);for(let c of a)nf(c,l)||r.removeAttribute(c.nodeName)}return n.body.innerHTML}(e,this._config.allowList,this._config.sanitizeFn):e}_resolvePossibleFunction(e){return m(e,[this])}_putElementInTemplate(e,t){if(this._config.html)return t.innerHTML="",void t.append(e);t.textContent=e.textContent}}let nv=new Set(["sanitize","allowList","sanitizeFn"]),nb="fade",ny="show",nw=".modal",n$="hide.bs.modal",nA="hover",nE="focus",nC={AUTO:"auto",TOP:"top",RIGHT:p()?"left":"right",BOTTOM:"bottom",LEFT:p()?"right":"left"},nT={allowList:nh,animation:!0,boundary:"clippingParents",container:!1,customClass:"",delay:0,fallbackPlacements:["top","right","bottom","left"],html:!1,offset:[0,6],placement:"top",popperConfig:null,sanitize:!0,sanitizeFn:null,selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',title:"",trigger:"hover focus"},nx={allowList:"object",animation:"boolean",boundary:"(string|element)",container:"(string|element|boolean)",customClass:"(string|function)",delay:"(number|object)",fallbackPlacements:"array",html:"boolean",offset:"(array|string|function)",placement:"(string|function)",popperConfig:"(null|object|function)",sanitize:"boolean",sanitizeFn:"(null|function)",selector:"(string|boolean)",template:"string",title:"(string|element|function)",trigger:"string"};class nk extends W{constructor(e,t){if(void 0===t2)throw TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");super(e,t),this._isEnabled=!0,this._timeout=0,this._isHovered=null,this._activeTrigger={},this._popper=null,this._templateFactory=null,this._newContent=null,this.tip=null,this._setListeners(),this._config.selector||this._fixTitle()}static get Default(){return nT}static get DefaultType(){return nx}static get NAME(){return"tooltip"}enable(){this._isEnabled=!0}disable(){this._isEnabled=!1}toggleEnabled(){this._isEnabled=!this._isEnabled}toggle(){this._isEnabled&&(this._activeTrigger.click=!this._activeTrigger.click,this._isShown()?this._leave():this._enter())}dispose(){clearTimeout(this._timeout),P.off(this._element.closest(nw),n$,this._hideModalHandler),this._element.getAttribute("data-bs-original-title")&&this._element.setAttribute("title",this._element.getAttribute("data-bs-original-title")),this._disposePopper(),super.dispose()}show(){if("none"===this._element.style.display)throw Error("Please use show on visible elements");if(!this._isWithContent()||!this._isEnabled)return;let e=P.trigger(this._element,this.constructor.eventName("show")),t=(c(this._element)||this._element.ownerDocument.documentElement).contains(this._element);if(e.defaultPrevented||!t)return;this._disposePopper();let i=this._getTipElement();this._element.setAttribute("aria-describedby",i.getAttribute("id"));let{container:n}=this._config;if(this._element.ownerDocument.documentElement.contains(this.tip)||(n.append(i),P.trigger(this._element,this.constructor.eventName("inserted"))),this._popper=this._createPopper(i),i.classList.add(ny),"ontouchstart"in document.documentElement)for(let s of[].concat(...document.body.children))P.on(s,"mouseover",h);this._queueCallback(()=>{P.trigger(this._element,this.constructor.eventName("shown")),!1===this._isHovered&&this._leave(),this._isHovered=!1},this.tip,this._isAnimated())}hide(){if(this._isShown()&&!P.trigger(this._element,this.constructor.eventName("hide")).defaultPrevented){if(this._getTipElement().classList.remove(ny),"ontouchstart"in document.documentElement)for(let e of[].concat(...document.body.children))P.off(e,"mouseover",h);this._activeTrigger.click=!1,this._activeTrigger[nE]=!1,this._activeTrigger[nA]=!1,this._isHovered=null,this._queueCallback(()=>{this._isWithActiveTrigger()||(this._isHovered||this._disposePopper(),this._element.removeAttribute("aria-describedby"),P.trigger(this._element,this.constructor.eventName("hidden")))},this.tip,this._isAnimated())}}update(){this._popper&&this._popper.update()}_isWithContent(){return Boolean(this._getTitle())}_getTipElement(){return this.tip||(this.tip=this._createTipElement(this._newContent||this._getContentForTemplate())),this.tip}_createTipElement(e){let t=this._getTemplateFactory(e).toHtml();if(!t)return null;t.classList.remove(nb,ny),t.classList.add(`bs-${this.constructor.NAME}-auto`);let i=(e=>{do e+=Math.floor(1e6*Math.random());while(document.getElementById(e));return e})(this.constructor.NAME).toString();return t.setAttribute("id",i),this._isAnimated()&&t.classList.add(nb),t}setContent(e){this._newContent=e,this._isShown()&&(this._disposePopper(),this.show())}_getTemplateFactory(e){return this._templateFactory?this._templateFactory.changeContent(e):this._templateFactory=new n8({...this._config,content:e,extraClass:this._resolvePossibleFunction(this._config.customClass)}),this._templateFactory}_getContentForTemplate(){return{".tooltip-inner":this._getTitle()}}_getTitle(){return this._resolvePossibleFunction(this._config.title)||this._element.getAttribute("data-bs-original-title")}_initializeOnDelegatedTarget(e){return this.constructor.getOrCreateInstance(e.delegateTarget,this._getDelegateConfig())}_isAnimated(){return this._config.animation||this.tip&&this.tip.classList.contains(nb)}_isShown(){return this.tip&&this.tip.classList.contains(ny)}_createPopper(e){let t=m(this._config.placement,[this,e,this._element]),i=nC[t.toUpperCase()];return tG(this._element,e,this._getPopperConfig(i))}_getOffset(){let{offset:e}=this._config;return"string"==typeof e?e.split(",").map(e=>Number.parseInt(e,10)):"function"==typeof e?t=>e(t,this._element):e}_resolvePossibleFunction(e){return m(e,[this._element])}_getPopperConfig(e){let t={placement:e,modifiers:[{name:"flip",options:{fallbackPlacements:this._config.fallbackPlacements}},{name:"offset",options:{offset:this._getOffset()}},{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"arrow",options:{element:`.${this.constructor.NAME}-arrow`}},{name:"preSetPlacement",enabled:!0,phase:"beforeMain",fn:e=>{this._getTipElement().setAttribute("data-popper-placement",e.state.placement)}}]};return{...t,...m(this._config.popperConfig,[t])}}_setListeners(){let e=this._config.trigger.split(" ");for(let t of e)if("click"===t)P.on(this._element,this.constructor.eventName("click"),this._config.selector,e=>{this._initializeOnDelegatedTarget(e).toggle()});else if("manual"!==t){let i=t===nA?this.constructor.eventName("mouseenter"):this.constructor.eventName("focusin"),n=t===nA?this.constructor.eventName("mouseleave"):this.constructor.eventName("focusout");P.on(this._element,i,this._config.selector,e=>{let t=this._initializeOnDelegatedTarget(e);t._activeTrigger["focusin"===e.type?nE:nA]=!0,t._enter()}),P.on(this._element,n,this._config.selector,e=>{let t=this._initializeOnDelegatedTarget(e);t._activeTrigger["focusout"===e.type?nE:nA]=t._element.contains(e.relatedTarget),t._leave()})}this._hideModalHandler=()=>{this._element&&this.hide()},P.on(this._element.closest(nw),n$,this._hideModalHandler)}_fixTitle(){let e=this._element.getAttribute("title");e&&(this._element.getAttribute("aria-label")||this._element.textContent.trim()||this._element.setAttribute("aria-label",e),this._element.setAttribute("data-bs-original-title",e),this._element.removeAttribute("title"))}_enter(){this._isShown()||this._isHovered?this._isHovered=!0:(this._isHovered=!0,this._setTimeout(()=>{this._isHovered&&this.show()},this._config.delay.show))}_leave(){this._isWithActiveTrigger()||(this._isHovered=!1,this._setTimeout(()=>{this._isHovered||this.hide()},this._config.delay.hide))}_setTimeout(e,t){clearTimeout(this._timeout),this._timeout=setTimeout(e,t)}_isWithActiveTrigger(){return Object.values(this._activeTrigger).includes(!0)}_getConfig(e){let t=H.getDataAttributes(this._element);for(let i of Object.keys(t))nv.has(i)&&delete t[i];return e={...t,..."object"==typeof e&&e?e:{}},e=this._mergeConfigObj(e),e=this._configAfterMerge(e),this._typeCheckConfig(e),e}_configAfterMerge(e){return e.container=!1===e.container?document.body:o(e.container),"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),"number"==typeof e.title&&(e.title=e.title.toString()),"number"==typeof e.content&&(e.content=e.content.toString()),e}_getDelegateConfig(){let e={};for(let[t,i]of Object.entries(this._config))this.constructor.Default[t]!==i&&(e[t]=i);return e.selector=!1,e.trigger="manual",e}_disposePopper(){this._popper&&(this._popper.destroy(),this._popper=null),this.tip&&(this.tip.remove(),this.tip=null)}static jQueryInterface(e){return this.each(function(){let t=nk.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e]()}})}}g(nk);let nL={...nk.Default,content:"",offset:[0,8],placement:"right",template:'<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',trigger:"click"},nO={...nk.DefaultType,content:"(null|string|element|function)"};class nD extends nk{static get Default(){return nL}static get DefaultType(){return nO}static get NAME(){return"popover"}_isWithContent(){return this._getTitle()||this._getContent()}_getContentForTemplate(){return{".popover-header":this._getTitle(),".popover-body":this._getContent()}}_getContent(){return this._resolvePossibleFunction(this._config.content)}static jQueryInterface(e){return this.each(function(){let t=nD.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e]()}})}}g(nD);let n9=".bs.scrollspy",nS=`activate${n9}`,nI=`click${n9}`,n_=`load${n9}.data-api`,nP="active",nN="[href]",nM=".nav-link",nF=`${nM}, .nav-item > ${nM}, .list-group-item`,nH={offset:null,rootMargin:"0px 0px -25%",smoothScroll:!1,target:null,threshold:[.1,.5,1]},nj={offset:"(number|null)",rootMargin:"string",smoothScroll:"boolean",target:"element",threshold:"array"};class nW extends W{constructor(e,t){super(e,t),this._targetLinks=new Map,this._observableSections=new Map,this._rootElement="visible"===getComputedStyle(this._element).overflowY?null:this._element,this._activeTarget=null,this._observer=null,this._previousScrollData={visibleEntryTop:0,parentScrollTop:0},this.refresh()}static get Default(){return nH}static get DefaultType(){return nj}static get NAME(){return"scrollspy"}refresh(){for(let e of(this._initializeTargetsAndObservables(),this._maybeEnableSmoothScroll(),this._observer?this._observer.disconnect():this._observer=this._getNewObserver(),this._observableSections.values()))this._observer.observe(e)}dispose(){this._observer.disconnect(),super.dispose()}_configAfterMerge(e){return e.target=o(e.target)||document.body,e.rootMargin=e.offset?`${e.offset}px 0px -30%`:e.rootMargin,"string"==typeof e.threshold&&(e.threshold=e.threshold.split(",").map(e=>Number.parseFloat(e))),e}_maybeEnableSmoothScroll(){this._config.smoothScroll&&(P.off(this._config.target,nI),P.on(this._config.target,nI,nN,e=>{let t=this._observableSections.get(e.target.hash);if(t){e.preventDefault();let i=this._rootElement||window,n=t.offsetTop-this._element.offsetTop;if(i.scrollTo)return void i.scrollTo({top:n,behavior:"smooth"});i.scrollTop=n}}))}_getNewObserver(){let e={root:this._rootElement,threshold:this._config.threshold,rootMargin:this._config.rootMargin};return new IntersectionObserver(e=>this._observerCallback(e),e)}_observerCallback(e){let t=e=>this._targetLinks.get(`#${e.target.id}`),i=e=>{this._previousScrollData.visibleEntryTop=e.target.offsetTop,this._process(t(e))},n=(this._rootElement||document.documentElement).scrollTop,s=n>=this._previousScrollData.parentScrollTop;for(let r of(this._previousScrollData.parentScrollTop=n,e)){if(!r.isIntersecting){this._activeTarget=null,this._clearActiveClass(t(r));continue}let o=r.target.offsetTop>=this._previousScrollData.visibleEntryTop;if(s&&o){if(i(r),!n)return}else s||o||i(r)}}_initializeTargetsAndObservables(){this._targetLinks=new Map,this._observableSections=new Map;let e=B.find(nN,this._config.target);for(let t of e){if(!t.hash||l(t))continue;let i=B.findOne(decodeURI(t.hash),this._element);a(i)&&(this._targetLinks.set(decodeURI(t.hash),t),this._observableSections.set(t.hash,i))}}_process(e){this._activeTarget!==e&&(this._clearActiveClass(this._config.target),this._activeTarget=e,e.classList.add(nP),this._activateParents(e),P.trigger(this._element,nS,{relatedTarget:e}))}_activateParents(e){if(e.classList.contains("dropdown-item"))B.findOne(".dropdown-toggle",e.closest(".dropdown")).classList.add(nP);else for(let t of B.parents(e,".nav, .list-group"))for(let i of B.prev(t,nF))i.classList.add(nP)}_clearActiveClass(e){e.classList.remove(nP);let t=B.find(`${nN}.${nP}`,e);for(let i of t)i.classList.remove(nP)}static jQueryInterface(e){return this.each(function(){let t=nW.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e]()}})}}P.on(window,n_,()=>{for(let e of B.find('[data-bs-spy="scroll"]'))nW.getOrCreateInstance(e)}),g(nW);let nz=".bs.tab",nB=`hide${nz}`,nq=`hidden${nz}`,nR=`show${nz}`,nV=`shown${nz}`,n0=`click${nz}`,nK=`keydown${nz}`,nQ=`load${nz}`,nX="ArrowRight",nY="ArrowDown",nU="Home",n1="active",n3="fade",n4="show",nG=".dropdown-toggle",n2=`:not(${nG})`,nZ='[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',n6=`.nav-link${n2}, .list-group-item${n2}, [role="tab"]${n2}, ${nZ}`,n7=`.${n1}[data-bs-toggle="tab"], .${n1}[data-bs-toggle="pill"], .${n1}[data-bs-toggle="list"]`;class nJ extends W{constructor(e){super(e),this._parent=this._element.closest('.list-group, .nav, [role="tablist"]'),this._parent&&(this._setInitialAttributes(this._parent,this._getChildren()),P.on(this._element,nK,e=>this._keydown(e)))}static get NAME(){return"tab"}show(){let e=this._element;if(this._elemIsActive(e))return;let t=this._getActiveElem(),i=t?P.trigger(t,nB,{relatedTarget:e}):null;P.trigger(e,nR,{relatedTarget:t}).defaultPrevented||i&&i.defaultPrevented||(this._deactivate(t,e),this._activate(e,t))}_activate(e,t){e&&(e.classList.add(n1),this._activate(B.getElementFromSelector(e)),this._queueCallback(()=>{"tab"===e.getAttribute("role")?(e.removeAttribute("tabindex"),e.setAttribute("aria-selected",!0),this._toggleDropDown(e,!0),P.trigger(e,nV,{relatedTarget:t})):e.classList.add(n4)},e,e.classList.contains(n3)))}_deactivate(e,t){e&&(e.classList.remove(n1),e.blur(),this._deactivate(B.getElementFromSelector(e)),this._queueCallback(()=>{"tab"===e.getAttribute("role")?(e.setAttribute("aria-selected",!1),e.setAttribute("tabindex","-1"),this._toggleDropDown(e,!1),P.trigger(e,nq,{relatedTarget:t})):e.classList.remove(n4)},e,e.classList.contains(n3)))}_keydown(e){if(!["ArrowLeft",nX,"ArrowUp",nY,nU,"End"].includes(e.key))return;e.stopPropagation(),e.preventDefault();let t=this._getChildren().filter(e=>!l(e)),i;if([nU,"End"].includes(e.key))i=t[e.key===nU?0:t.length-1];else{let n=[nX,nY].includes(e.key);i=b(t,e.target,n,!0)}i&&(i.focus({preventScroll:!0}),nJ.getOrCreateInstance(i).show())}_getChildren(){return B.find(n6,this._parent)}_getActiveElem(){return this._getChildren().find(e=>this._elemIsActive(e))||null}_setInitialAttributes(e,t){for(let i of(this._setAttributeIfNotExists(e,"role","tablist"),t))this._setInitialAttributesOnChild(i)}_setInitialAttributesOnChild(e){e=this._getInnerElement(e);let t=this._elemIsActive(e),i=this._getOuterElement(e);e.setAttribute("aria-selected",t),i!==e&&this._setAttributeIfNotExists(i,"role","presentation"),t||e.setAttribute("tabindex","-1"),this._setAttributeIfNotExists(e,"role","tab"),this._setInitialAttributesOnTargetPanel(e)}_setInitialAttributesOnTargetPanel(e){let t=B.getElementFromSelector(e);t&&(this._setAttributeIfNotExists(t,"role","tabpanel"),e.id&&this._setAttributeIfNotExists(t,"aria-labelledby",`${e.id}`))}_toggleDropDown(e,t){let i=this._getOuterElement(e);if(!i.classList.contains("dropdown"))return;let n=(e,n)=>{let s=B.findOne(e,i);s&&s.classList.toggle(n,t)};n(nG,n1),n(".dropdown-menu",n4),i.setAttribute("aria-expanded",t)}_setAttributeIfNotExists(e,t,i){e.hasAttribute(t)||e.setAttribute(t,i)}_elemIsActive(e){return e.classList.contains(n1)}_getInnerElement(e){return e.matches(n6)?e:B.findOne(n6,e)}_getOuterElement(e){return e.closest(".nav-item, .list-group-item")||e}static jQueryInterface(e){return this.each(function(){let t=nJ.getOrCreateInstance(this);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e]()}})}}P.on(document,n0,nZ,function(e){["A","AREA"].includes(this.tagName)&&e.preventDefault(),l(this)||nJ.getOrCreateInstance(this).show()}),P.on(window,nQ,()=>{for(let e of B.find(n7))nJ.getOrCreateInstance(e)}),g(nJ);let n5=".bs.toast",se=`mouseover${n5}`,st=`mouseout${n5}`,si=`focusin${n5}`,sn=`focusout${n5}`,ss=`hide${n5}`,sr=`hidden${n5}`,so=`show${n5}`,sa=`shown${n5}`,sl="hide",sc="show",sh="showing",sd={animation:"boolean",autohide:"boolean",delay:"number"},su={animation:!0,autohide:!0,delay:5e3};class sf extends W{constructor(e,t){super(e,t),this._timeout=null,this._hasMouseInteraction=!1,this._hasKeyboardInteraction=!1,this._setListeners()}static get Default(){return su}static get DefaultType(){return sd}static get NAME(){return"toast"}show(){P.trigger(this._element,so).defaultPrevented||(this._clearTimeout(),this._config.animation&&this._element.classList.add("fade"),this._element.classList.remove(sl),d(this._element),this._element.classList.add(sc,sh),this._queueCallback(()=>{this._element.classList.remove(sh),P.trigger(this._element,sa),this._maybeScheduleHide()},this._element,this._config.animation))}hide(){this.isShown()&&(P.trigger(this._element,ss).defaultPrevented||(this._element.classList.add(sh),this._queueCallback(()=>{this._element.classList.add(sl),this._element.classList.remove(sh,sc),P.trigger(this._element,sr)},this._element,this._config.animation)))}dispose(){this._clearTimeout(),this.isShown()&&this._element.classList.remove(sc),super.dispose()}isShown(){return this._element.classList.contains(sc)}_maybeScheduleHide(){this._config.autohide&&(this._hasMouseInteraction||this._hasKeyboardInteraction||(this._timeout=setTimeout(()=>{this.hide()},this._config.delay)))}_onInteraction(e,t){switch(e.type){case"mouseover":case"mouseout":this._hasMouseInteraction=t;break;case"focusin":case"focusout":this._hasKeyboardInteraction=t}if(t)return void this._clearTimeout();let i=e.relatedTarget;this._element===i||this._element.contains(i)||this._maybeScheduleHide()}_setListeners(){P.on(this._element,se,e=>this._onInteraction(e,!0)),P.on(this._element,st,e=>this._onInteraction(e,!1)),P.on(this._element,si,e=>this._onInteraction(e,!0)),P.on(this._element,sn,e=>this._onInteraction(e,!1))}_clearTimeout(){clearTimeout(this._timeout),this._timeout=null}static jQueryInterface(e){return this.each(function(){let t=sf.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e](this)}})}}return q(sf),g(sf),{Alert:Q,Button:Y,Carousel:ex,Collapse:ej,Dropdown:iy,Modal:i3,Offcanvas:nc,Popover:nD,ScrollSpy:nW,Tab:nJ,Toast:sf,Tooltip:nk}});
</script>