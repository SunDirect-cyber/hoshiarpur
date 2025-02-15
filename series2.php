<?php 
$series_name = isset($_GET['name']) ? $_GET['name'] : 'Unknown Series';
$video_url = isset($_GET['video_url']) ? $_GET['video_url'] : '';
$video_720url = isset($_GET['video_720url']) ? $_GET['video_720url'] : '';
$video_1080url = isset($_GET['video_1080url']) ? $_GET['video_1080url'] : '';
$video_1560url = isset($_GET['video_1560url']) ? $_GET['video_1560url'] : '';
$video_2160url = isset($_GET['video_2160url']) ? $_GET['video_2160url'] : '';
$canoncial = isset($_GET['canoncial']) ? $_GET['canoncial'] : '';


$release_date = isset($_GET['release_date']) ? $_GET['release_date'] : 'Unknown Release Date';
$quality = isset($_GET['quality']) ? $_GET['quality'] : 'Unknown Quality';
$age_rating = isset($_GET['age_rating']) ? $_GET['age_rating'] : 'Unknown Age Rating';
$duration = isset($_GET['duration']) ? $_GET['duration'] : 'Unknown Duration';
$synopsis = isset($_GET['synopsis']) ? $_GET['synopsis'] : 'No Synopsis Available';
$description = isset($_GET['description']) ? $_GET['description'] : 'No Description Available';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-5513442153177853">
    <meta name="monetag" content="822f6949b47906e3f2c504565d101647">
     <!-- SEO Meta Tags -->
    <meta name="description" content="Watch <?php echo htmlspecialchars($series_name); ?> - Explore all seasons with episode details and streaming options. Catch up on your favorite shows now!">
    <meta name="keywords" content="Watch <?php echo htmlspecialchars($series_name); ?>, <?php echo htmlspecialchars($series_name); ?> seasons, <?php echo htmlspecialchars($series_name); ?> episodes, online streaming, TV shows, web series, series episodes, full seasons">
        <link rel="canonical" href="https://cineaura.in/series.php?name=Mismatched&release_date=20-November-2020">
      <link rel="icon" href="g.ico" type="image/x-icon">
      <link rel="shortcut icon" href="g.ico" type="image/x-icon">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?php echo htmlspecialchars($series_name); ?> - Seasons</title>
    
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
    

</script>
</head>
<body style="background-color: #1a1a1a; color: #f8f9fa; font-family: 'Arial', sans-serif;">    

<amp-auto-ads type="adsense"
        data-ad-client="ca-pub-5513442153177853">
</amp-auto-ads>

 
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

<div class="bg-gray-900 text-white py-8 px-4 sm:px-6">
    <div class="max-w-3xl mx-auto">
        <!-- Title with Gradient and Larger Mobile Font -->
        <h1 id="series-title" class="text-4xl font-bold text-center mb-6 sm:text-5xl">
            <!-- Series Title goes here -->
        </h1>
        
        <!-- Seasons Section with Dynamic Grid and Better Padding -->
        <div class="mt-8">
            <h2 class="text-3xl font-bold mb-4 text-gradient bg-gradient-to-r from-teal-400 via-green-500 to-blue-600 sm:text-4xl">
                Seasons
            </h2>
            <div id="seasons-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <!-- Seasons will be dynamically added here -->
            </div>
        </div>
        
        <!-- Info Grid with Responsive Layout and Vibrant Icons -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
            <div class="flex items-center">
                <i class="fas fa-calendar-alt text-yellow-400 text-2xl mr-3"></i>
                <p><strong>Release Date:</strong> <span id="release-date" class="text-gray-300"></span></p>
            </div>
            <div class="flex items-center">
                <i class="fas fa-video text-red-400 text-2xl mr-3"></i>
                <p><strong>Quality:</strong> <span id="quality" class="text-gray-300"></span></p>
            </div>
            <div class="flex items-center">
                <i class="fas fa-star text-blue-400 text-2xl mr-3"></i>
                <p><strong>Age Rating:</strong> <span id="age-rating" class="text-gray-300"></span></p>
            </div>
            <div class="flex items-center">
                <i class="fas fa-clock text-green-400 text-2xl mr-3"></i>
                <p><strong>Duration:</strong> <span id="duration" class="text-gray-300"></span></p>
            </div>
        </div>
        
        <!-- Synopsis Section with Vibrant Heading and Improved Padding -->
        <div class="mt-8">
            <div class="flex items-center mb-4">
                <i class="fas fa-info-circle text-purple-400 text-2xl mr-3"></i>
                <h2 class="text-2xl font-semibold sm:text-3xl">Synopsis</h2>
            </div>
            <p id="synopsis" class="text-gray-300 bg-gray-800 p-5 rounded-md shadow-lg leading-relaxed"></p>
        </div>
        
        <!-- Description Section with Consistent Styling -->
        <div class="mt-6">
            <div class="flex items-center mb-4">
                <i class="fas fa-align-left text-indigo-400 text-2xl mr-3"></i>
                <h2 class="text-2xl font-semibold sm:text-3xl">Description</h2>
            </div>
            <p id="description" class="text-gray-300 bg-gray-800 p-5 rounded-md shadow-lg leading-relaxed"></p>
        </div>
    </div>
</div>

<!-- Smooth inline CSS -->
<style>
    .text-gradient {
        background: linear-gradient(to right, #34d399, #3b82f6, #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-gray-300 {
        color: #d1d5db;
    }

    .text-white {
        color: #ffffff;
    }

    .mb-4, .mb-6 {
        margin-bottom: 1rem;
    }

    .mt-6, .mt-8 {
        margin-top: 1.5rem;
    }

    .py-8, .px-4, .sm\:px-6 {
        padding: 2rem 1rem;
    }

    .max-w-3xl {
        max-width: 48rem;
    }

    .bg-gray-900 {
        background-color: #1a202c;
    }

    .bg-gray-800 {
        background-color: #2d3748;
    }

    .shadow-lg {
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .rounded-md {
        border-radius: 0.375rem;
    }

    .leading-relaxed {
        line-height: 1.625;
    }

    .sm\:text-5xl {
        font-size: 3rem;
        line-height: 1.2;
    }

    .text-4xl {
        font-size: 2.25rem;
    }

    .text-3xl {
        font-size: 1.875rem;
    }

    .text-2xl {
        font-size: 1.5rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .font-semibold {
        font-weight: 600;
    }

    .gap-4, .gap-6 {
        gap: 1rem;
    }

    .grid {
        display: grid;
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }

    .sm\:grid-cols-2 {
        @media (min-width: 640px) {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    .lg\:grid-cols-3 {
        @media (min-width: 1024px) {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
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
<script>
    // Mobile menu toggle
    const toggler = document.getElementById('navbar-toggler');
    const mobileMenu = document.getElementById('mobile-menu');

    toggler.addEventListener('click', function() {
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
        }
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fetching series parameters from URL
    var seriesName = new URLSearchParams(window.location.search).get('name');
    var videoUrl = new URLSearchParams(window.location.search).get('video_url');
    var videoUrl1 = new URLSearchParams(window.location.search).get('video_720url');
    var videoUrl2 = new URLSearchParams(window.location.search).get('video_1080url');
    var videoUrl3 = new URLSearchParams(window.location.search).get('video_1560url');
    var videoUrl4 = new URLSearchParams(window.location.search).get('video_2160url');
    var canoncial = new URLSearchParams(window.location.search).get('canoncial');



    var releaseDate = new URLSearchParams(window.location.search).get('release_date');
    var quality = new URLSearchParams(window.location.search).get('quality');
    var ageRating = new URLSearchParams(window.location.search).get('age_rating');
    var duration = new URLSearchParams(window.location.search).get('duration');
    var synopsis = new URLSearchParams(window.location.search).get('synopsis');
    var description = new URLSearchParams(window.location.search).get('description');

    // Update the series details on the page
    document.getElementById('series-title').textContent = seriesName + ' - Seasons';
    document.getElementById('release-date').textContent = releaseDate;
    document.getElementById('quality').textContent = quality;
    document.getElementById('age-rating').textContent = ageRating;
    document.getElementById('duration').textContent = duration;
    document.getElementById('synopsis').textContent = synopsis;
    document.getElementById('description').textContent = description;

   // Fetch seasons data
if (seriesName) {
    fetch('get_seasons1.php?name=' + encodeURIComponent(seriesName))
        .then(response => response.json())
        .then(seasons => {
            var container = document.getElementById('seasons-container');
            var gradients = [
                'from-gray-700 via-gray-800 to-gray-900', // Neutral gradient
                'from-blue-500 via-blue-600 to-blue-700', // Calm blue gradient
                'from-green-500 via-green-600 to-green-700', // Refreshing green gradient
                'from-red-500 via-red-600 to-red-700', // Vibrant red gradient
                'from-purple-500 via-purple-600 to-purple-700' // Soothing purple gradient
            ];

            Object.keys(seasons).forEach((season_name, index) => {
                var season_data = seasons[season_name];
                var gradient = gradients[index % gradients.length];
                var card = document.createElement('a');
                card.href = 'episode.php?series=' + encodeURIComponent(seriesName) + '&season=' + encodeURIComponent(season_name);
                card.className = 'season-card bg-gradient-to-br ' + gradient + ' rounded-lg overflow-hidden shadow-lg transform hover:scale-105 hover:shadow-xl cursor-pointer';
                card.innerHTML = `
                    <div class="p-4 sm:p-6">
                        <div class="text-base sm:text-lg font-semibold text-white mb-1 sm:mb-2">
                            <i class="fas fa-tv"></i> ${season_name}
                        </div>
                        <p class="text-sm sm:text-base text-gray-100">
                            <i class="fas fa-list"></i> ${season_data.episodes.length} Episodes
                        </p>
                    </div>
                `;
                container.appendChild(card);
            });
        })
        .catch(error => console.error('Fetch error:', error));
}


    // Log the video URL for debugging
    console.log('Video URL:', videoUrl);
        console.log('Video URL1:', videoUrl1);
    console.log('Video URL2:', videoUrl2);
    console.log('Video URL3:', videoUrl3);
        console.log('Video URL4:', videoUrl4);
        console.log('Canoncial:', canoncial);


});
</script>
<style>
    .season-card {
    background: #1f2937; /* Neutral dark background for season cards */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.season-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.season-card .text-white {
    color: #f9fafb;
}

.season-card .text-gray-100 {
    color: #d1d5db;
}

.bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
}

.from-gray-700 {
    --tw-gradient-from: #374151;
}

.via-gray-800 {
    --tw-gradient-stops: var(--tw-gradient-from), #1f2937, var(--tw-gradient-to, rgba(31, 41, 55, 0));
}

.to-gray-900 {
    --tw-gradient-to: #111827;
}

.from-blue-500 {
    --tw-gradient-from: #3b82f6;
}

.via-blue-600 {
    --tw-gradient-stops: var(--tw-gradient-from), #2563eb, var(--tw-gradient-to, rgba(37, 99, 235, 0));
}

.to-blue-700 {
    --tw-gradient-to: #1d4ed8;
}

.from-green-500 {
    --tw-gradient-from: #10b981;
}

.via-green-600 {
    --tw-gradient-stops: var(--tw-gradient-from), #059669, var(--tw-gradient-to, rgba(5, 150, 105, 0));
}

.to-green-700 {
    --tw-gradient-to: #047857;
}

.from-red-500 {
    --tw-gradient-from: #ef4444;
}

.via-red-600 {
    --tw-gradient-stops: var(--tw-gradient-from), #dc2626, var(--tw-gradient-to, rgba(220, 38, 38, 0));
}

.to-red-700 {
    --tw-gradient-to: #b91c1c;
}

.from-purple-500 {
    --tw-gradient-from: #a855f7;
}

.via-purple-600 {
    --tw-gradient-stops: var(--tw-gradient-from), #9333ea, var(--tw-gradient-to, rgba(147, 51, 234, 0));
}

.to-purple-700 {
    --tw-gradient-to: #7e22ce;
}

</style>
<script>/*!
  * Bootstrap v5.3.0 (https://getbootstrap.com/)
  * Copyright 2011-2023 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */ !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).bootstrap=t()}(this,function(){"use strict";let e=new Map,t={set(t,i,s){e.has(t)||e.set(t,new Map);let n=e.get(t);n.has(i)||0===n.size?n.set(i,s):console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(n.keys())[0]}.`)},get:(t,i)=>e.has(t)&&e.get(t).get(i)||null,remove(t,i){if(!e.has(t))return;let s=e.get(t);s.delete(i),0===s.size&&e.delete(t)}},i="transitionend",s=e=>(e&&window.CSS&&window.CSS.escape&&(e=e.replace(/#([^\s"#']+)/g,(e,t)=>`#${CSS.escape(t)}`)),e),n=e=>{e.dispatchEvent(new Event(i))},r=e=>!(!e||"object"!=typeof e)&&(void 0!==e.jquery&&(e=e[0]),void 0!==e.nodeType),o=e=>r(e)?e.jquery?e[0]:e:"string"==typeof e&&e.length>0?document.querySelector(s(e)):null,a=e=>{if(!r(e)||0===e.getClientRects().length)return!1;let t="visible"===getComputedStyle(e).getPropertyValue("visibility"),i=e.closest("details:not([open])");if(!i)return t;if(i!==e){let s=e.closest("summary");if(s&&s.parentNode!==i||null===s)return!1}return t},l=e=>!e||e.nodeType!==Node.ELEMENT_NODE||!!e.classList.contains("disabled")||(void 0!==e.disabled?e.disabled:e.hasAttribute("disabled")&&"false"!==e.getAttribute("disabled")),c=e=>{if(!document.documentElement.attachShadow)return null;if("function"==typeof e.getRootNode){let t=e.getRootNode();return t instanceof ShadowRoot?t:null}return e instanceof ShadowRoot?e:e.parentNode?c(e.parentNode):null},h=()=>{},d=e=>{e.offsetHeight},u=()=>window.jQuery&&!document.body.hasAttribute("data-bs-no-jquery")?window.jQuery:null,f=[],p=()=>"rtl"===document.documentElement.dir,g=e=>{var t;t=()=>{let t=u();if(t){let i=e.NAME,s=t.fn[i];t.fn[i]=e.jQueryInterface,t.fn[i].Constructor=e,t.fn[i].noConflict=()=>(t.fn[i]=s,e.jQueryInterface)}},"loading"===document.readyState?(f.length||document.addEventListener("DOMContentLoaded",()=>{for(let e of f)e()}),f.push(t)):t()},m=(e,t=[],i=e)=>"function"==typeof e?e(...t):i,b=(e,t,s=!0)=>{if(!s)return void m(e);let r=(e=>{if(!e)return 0;let{transitionDuration:t,transitionDelay:i}=window.getComputedStyle(e),s=Number.parseFloat(t),n=Number.parseFloat(i);return s||n?(t=t.split(",")[0],i=i.split(",")[0],1e3*(Number.parseFloat(t)+Number.parseFloat(i))):0})(t)+5,o=!1,a=({target:s})=>{s===t&&(o=!0,t.removeEventListener(i,a),m(e))};t.addEventListener(i,a),setTimeout(()=>{o||n(t)},r)},v=(e,t,i,s)=>{let n=e.length,r=e.indexOf(t);return -1===r?!i&&s?e[n-1]:e[0]:(r+=i?1:-1,s&&(r=(r+n)%n),e[Math.max(0,Math.min(r,n-1))])},y=/[^.]*(?=\..*)\.|.*/,w=/\..*/,$=/::\d+$/,A={},E=1,C={mouseenter:"mouseover",mouseleave:"mouseout"},T=new Set(["click","dblclick","mouseup","mousedown","contextmenu","mousewheel","DOMMouseScroll","mouseover","mouseout","mousemove","selectstart","selectend","keydown","keypress","keyup","orientationchange","touchstart","touchmove","touchend","touchcancel","pointerdown","pointermove","pointerup","pointerleave","pointercancel","gesturestart","gesturechange","gestureend","focus","blur","change","reset","select","submit","focusin","focusout","load","unload","beforeunload","resize","move","DOMContentLoaded","readystatechange","error","abort","scroll"]);function x(e,t){return t&&`${t}::${E++}`||e.uidEvent||E++}function k(e){let t=x(e);return e.uidEvent=t,A[t]=A[t]||{},A[t]}function L(e,t,i=null){return Object.values(e).find(e=>e.callable===t&&e.delegationSelector===i)}function O(e,t,i){let s="string"==typeof t,n=P(e);return T.has(n)||(n=e),[s,s?i:t||i,n]}function D(e,t,i,s,n){var r,o,a,l,c,h;if("string"!=typeof t||!e)return;let[d,u,f]=O(t,i,s);t in C&&(u=(r=u,function(e){if(!e.relatedTarget||e.relatedTarget!==e.delegateTarget&&!e.delegateTarget.contains(e.relatedTarget))return r.call(this,e)}));let p=k(e),g=p[f]||(p[f]={}),m=L(g,u,d?i:null);if(m)return void(m.oneOff=m.oneOff&&n);let b=x(u,t.replace(y,"")),v=d?(o=e,a=i,l=u,function e(t){let i=o.querySelectorAll(a);for(let{target:s}=t;s&&s!==this;s=s.parentNode)for(let n of i)if(n===s)return N(t,{delegateTarget:s}),e.oneOff&&_.off(o,t.type,a,l),l.apply(s,[t])}):(c=e,h=u,function e(t){return N(t,{delegateTarget:c}),e.oneOff&&_.off(c,t.type,h),h.apply(c,[t])});v.delegationSelector=d?i:null,v.callable=u,v.oneOff=n,v.uidEvent=b,g[b]=v,e.addEventListener(f,v,d)}function S(e,t,i,s,n){let r=L(t[i],s,n);r&&(e.removeEventListener(i,r,Boolean(n)),delete t[i][r.uidEvent])}function I(e,t,i,s){let n=t[i]||{};for(let[r,o]of Object.entries(n))r.includes(s)&&S(e,t,i,o.callable,o.delegationSelector)}function P(e){return C[e=e.replace(w,"")]||e}let _={on(e,t,i,s){D(e,t,i,s,!1)},one(e,t,i,s){D(e,t,i,s,!0)},off(e,t,i,s){if("string"!=typeof t||!e)return;let[n,r,o]=O(t,i,s),a=o!==t,l=k(e),c=l[o]||{},h=t.startsWith(".");if(void 0===r){if(h)for(let d of Object.keys(l))I(e,l,d,t.slice(1));for(let[u,f]of Object.entries(c)){let p=u.replace($,"");a&&!t.includes(p)||S(e,l,o,f.callable,f.delegationSelector)}}else{if(!Object.keys(c).length)return;S(e,l,o,r,n?i:null)}},trigger(e,t,i){if("string"!=typeof t||!e)return null;let s=u(),n=null,r=!0,o=!0,a=!1;t!==P(t)&&s&&(n=s.Event(t,i),s(e).trigger(n),r=!n.isPropagationStopped(),o=!n.isImmediatePropagationStopped(),a=n.isDefaultPrevented());let l=N(new Event(t,{bubbles:r,cancelable:!0}),i);return a&&l.preventDefault(),o&&e.dispatchEvent(l),l.defaultPrevented&&n&&n.preventDefault(),l}};function N(e,t={}){for(let[i,s]of Object.entries(t))try{e[i]=s}catch(n){Object.defineProperty(e,i,{configurable:!0,get:()=>s})}return e}function M(e){if("true"===e)return!0;if("false"===e)return!1;if(e===Number(e).toString())return Number(e);if(""===e||"null"===e)return null;if("string"!=typeof e)return e;try{return JSON.parse(decodeURIComponent(e))}catch(t){return e}}function F(e){return e.replace(/[A-Z]/g,e=>`-${e.toLowerCase()}`)}let H={setDataAttribute(e,t,i){e.setAttribute(`data-bs-${F(t)}`,i)},removeDataAttribute(e,t){e.removeAttribute(`data-bs-${F(t)}`)},getDataAttributes(e){if(!e)return{};let t={},i=Object.keys(e.dataset).filter(e=>e.startsWith("bs")&&!e.startsWith("bsConfig"));for(let s of i){let n=s.replace(/^bs/,"");t[n=n.charAt(0).toLowerCase()+n.slice(1,n.length)]=M(e.dataset[s])}return t},getDataAttribute:(e,t)=>M(e.getAttribute(`data-bs-${F(t)}`))};class j{static get Default(){return{}}static get DefaultType(){return{}}static get NAME(){throw Error('You have to implement the static method "NAME", for each component!')}_getConfig(e){return e=this._mergeConfigObj(e),e=this._configAfterMerge(e),this._typeCheckConfig(e),e}_configAfterMerge(e){return e}_mergeConfigObj(e,t){let i=r(t)?H.getDataAttribute(t,"config"):{};return{...this.constructor.Default,..."object"==typeof i?i:{},...r(t)?H.getDataAttributes(t):{},..."object"==typeof e?e:{}}}_typeCheckConfig(e,t=this.constructor.DefaultType){var i;for(let[s,n]of Object.entries(t)){let o=e[s],a=r(o)?"element":null==(i=o)?`${i}`:Object.prototype.toString.call(i).match(/\s([a-z]+)/i)[1].toLowerCase();if(!RegExp(n).test(a))throw TypeError(`${this.constructor.NAME.toUpperCase()}: Option "${s}" provided type "${a}" but expected type "${n}".`)}}}class W extends j{constructor(e,i){super(),(e=o(e))&&(this._element=e,this._config=this._getConfig(i),t.set(this._element,this.constructor.DATA_KEY,this))}dispose(){for(let e of(t.remove(this._element,this.constructor.DATA_KEY),_.off(this._element,this.constructor.EVENT_KEY),Object.getOwnPropertyNames(this)))this[e]=null}_queueCallback(e,t,i=!0){b(e,t,i)}_getConfig(e){return e=this._mergeConfigObj(e,this._element),e=this._configAfterMerge(e),this._typeCheckConfig(e),e}static getInstance(e){return t.get(o(e),this.DATA_KEY)}static getOrCreateInstance(e,t={}){return this.getInstance(e)||new this(e,"object"==typeof t?t:null)}static get VERSION(){return"5.3.0"}static get DATA_KEY(){return`bs.${this.NAME}`}static get EVENT_KEY(){return`.${this.DATA_KEY}`}static eventName(e){return`${e}${this.EVENT_KEY}`}}let z=e=>{let t=e.getAttribute("data-bs-target");if(!t||"#"===t){let i=e.getAttribute("href");if(!i||!i.includes("#")&&!i.startsWith("."))return null;i.includes("#")&&!i.startsWith("#")&&(i=`#${i.split("#")[1]}`),t=i&&"#"!==i?i.trim():null}return s(t)},B={find:(e,t=document.documentElement)=>[].concat(...Element.prototype.querySelectorAll.call(t,e)),findOne:(e,t=document.documentElement)=>Element.prototype.querySelector.call(t,e),children:(e,t)=>[].concat(...e.children).filter(e=>e.matches(t)),parents(e,t){let i=[],s=e.parentNode.closest(t);for(;s;)i.push(s),s=s.parentNode.closest(t);return i},prev(e,t){let i=e.previousElementSibling;for(;i;){if(i.matches(t))return[i];i=i.previousElementSibling}return[]},next(e,t){let i=e.nextElementSibling;for(;i;){if(i.matches(t))return[i];i=i.nextElementSibling}return[]},focusableChildren(e){let t=["a","button","input","textarea","select","details","[tabindex]",'[contenteditable="true"]'].map(e=>`${e}:not([tabindex^="-"])`).join(",");return this.find(t,e).filter(e=>!l(e)&&a(e))},getSelectorFromElement(e){let t=z(e);return t&&B.findOne(t)?t:null},getElementFromSelector(e){let t=z(e);return t?B.findOne(t):null},getMultipleElementsFromSelector(e){let t=z(e);return t?B.find(t):[]}},q=(e,t="hide")=>{let i=`click.dismiss${e.EVENT_KEY}`,s=e.NAME;_.on(document,i,`[data-bs-dismiss="${s}"]`,function(i){if(["A","AREA"].includes(this.tagName)&&i.preventDefault(),l(this))return;let n=B.getElementFromSelector(this)||this.closest(`.${s}`);e.getOrCreateInstance(n)[t]()})};class R extends W{static get NAME(){return"alert"}close(){if(_.trigger(this._element,"close.bs.alert").defaultPrevented)return;this._element.classList.remove("show");let e=this._element.classList.contains("fade");this._queueCallback(()=>this._destroyElement(),this._element,e)}_destroyElement(){this._element.remove(),_.trigger(this._element,"closed.bs.alert"),this.dispose()}static jQueryInterface(e){return this.each(function(){let t=R.getOrCreateInstance(this);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e](this)}})}}q(R,"close"),g(R);let V='[data-bs-toggle="button"]';class K extends W{static get NAME(){return"button"}toggle(){this._element.setAttribute("aria-pressed",this._element.classList.toggle("active"))}static jQueryInterface(e){return this.each(function(){let t=K.getOrCreateInstance(this);"toggle"===e&&t[e]()})}}_.on(document,"click.bs.button.data-api",V,e=>{e.preventDefault();let t=e.target.closest(V);K.getOrCreateInstance(t).toggle()}),g(K);let Q={endCallback:null,leftCallback:null,rightCallback:null},X={endCallback:"(function|null)",leftCallback:"(function|null)",rightCallback:"(function|null)"};class Y extends j{constructor(e,t){super(),this._element=e,e&&Y.isSupported()&&(this._config=this._getConfig(t),this._deltaX=0,this._supportPointerEvents=Boolean(window.PointerEvent),this._initEvents())}static get Default(){return Q}static get DefaultType(){return X}static get NAME(){return"swipe"}dispose(){_.off(this._element,".bs.swipe")}_start(e){this._supportPointerEvents?this._eventIsPointerPenTouch(e)&&(this._deltaX=e.clientX):this._deltaX=e.touches[0].clientX}_end(e){this._eventIsPointerPenTouch(e)&&(this._deltaX=e.clientX-this._deltaX),this._handleSwipe(),m(this._config.endCallback)}_move(e){this._deltaX=e.touches&&e.touches.length>1?0:e.touches[0].clientX-this._deltaX}_handleSwipe(){let e=Math.abs(this._deltaX);if(e<=40)return;let t=e/this._deltaX;this._deltaX=0,t&&m(t>0?this._config.rightCallback:this._config.leftCallback)}_initEvents(){this._supportPointerEvents?(_.on(this._element,"pointerdown.bs.swipe",e=>this._start(e)),_.on(this._element,"pointerup.bs.swipe",e=>this._end(e)),this._element.classList.add("pointer-event")):(_.on(this._element,"touchstart.bs.swipe",e=>this._start(e)),_.on(this._element,"touchmove.bs.swipe",e=>this._move(e)),_.on(this._element,"touchend.bs.swipe",e=>this._end(e)))}_eventIsPointerPenTouch(e){return this._supportPointerEvents&&("pen"===e.pointerType||"touch"===e.pointerType)}static isSupported(){return"ontouchstart"in document.documentElement||navigator.maxTouchPoints>0}}let U="next",G="prev",Z="left",J="right",ee="slid.bs.carousel",et="carousel",ei="active",es={ArrowLeft:J,ArrowRight:Z},en={interval:5e3,keyboard:!0,pause:"hover",ride:!1,touch:!0,wrap:!0},er={interval:"(number|boolean)",keyboard:"boolean",pause:"(string|boolean)",ride:"(boolean|string)",touch:"boolean",wrap:"boolean"};class eo extends W{constructor(e,t){super(e,t),this._interval=null,this._activeElement=null,this._isSliding=!1,this.touchTimeout=null,this._swipeHelper=null,this._indicatorsElement=B.findOne(".carousel-indicators",this._element),this._addEventListeners(),this._config.ride===et&&this.cycle()}static get Default(){return en}static get DefaultType(){return er}static get NAME(){return"carousel"}next(){this._slide(U)}nextWhenVisible(){!document.hidden&&a(this._element)&&this.next()}prev(){this._slide(G)}pause(){this._isSliding&&n(this._element),this._clearInterval()}cycle(){this._clearInterval(),this._updateInterval(),this._interval=setInterval(()=>this.nextWhenVisible(),this._config.interval)}_maybeEnableCycle(){this._config.ride&&(this._isSliding?_.one(this._element,ee,()=>this.cycle()):this.cycle())}to(e){let t=this._getItems();if(e>t.length-1||e<0)return;if(this._isSliding)return void _.one(this._element,ee,()=>this.to(e));let i=this._getItemIndex(this._getActive());i!==e&&this._slide(e>i?U:G,t[e])}dispose(){this._swipeHelper&&this._swipeHelper.dispose(),super.dispose()}_configAfterMerge(e){return e.defaultInterval=e.interval,e}_addEventListeners(){this._config.keyboard&&_.on(this._element,"keydown.bs.carousel",e=>this._keydown(e)),"hover"===this._config.pause&&(_.on(this._element,"mouseenter.bs.carousel",()=>this.pause()),_.on(this._element,"mouseleave.bs.carousel",()=>this._maybeEnableCycle())),this._config.touch&&Y.isSupported()&&this._addTouchEventListeners()}_addTouchEventListeners(){for(let e of B.find(".carousel-item img",this._element))_.on(e,"dragstart.bs.carousel",e=>e.preventDefault());this._swipeHelper=new Y(this._element,{leftCallback:()=>this._slide(this._directionToOrder(Z)),rightCallback:()=>this._slide(this._directionToOrder(J)),endCallback:()=>{"hover"===this._config.pause&&(this.pause(),this.touchTimeout&&clearTimeout(this.touchTimeout),this.touchTimeout=setTimeout(()=>this._maybeEnableCycle(),500+this._config.interval))}})}_keydown(e){if(/input|textarea/i.test(e.target.tagName))return;let t=es[e.key];t&&(e.preventDefault(),this._slide(this._directionToOrder(t)))}_getItemIndex(e){return this._getItems().indexOf(e)}_setActiveIndicatorElement(e){if(!this._indicatorsElement)return;let t=B.findOne(".active",this._indicatorsElement);t.classList.remove(ei),t.removeAttribute("aria-current");let i=B.findOne(`[data-bs-slide-to="${e}"]`,this._indicatorsElement);i&&(i.classList.add(ei),i.setAttribute("aria-current","true"))}_updateInterval(){let e=this._activeElement||this._getActive();if(!e)return;let t=Number.parseInt(e.getAttribute("data-bs-interval"),10);this._config.interval=t||this._config.defaultInterval}_slide(e,t=null){if(this._isSliding)return;let i=this._getActive(),s=e===U,n=t||v(this._getItems(),i,s,this._config.wrap);if(n===i)return;let r=this._getItemIndex(n),o=t=>_.trigger(this._element,t,{relatedTarget:n,direction:this._orderToDirection(e),from:this._getItemIndex(i),to:r});if(o("slide.bs.carousel").defaultPrevented||!i||!n)return;let a=Boolean(this._interval);this.pause(),this._isSliding=!0,this._setActiveIndicatorElement(r),this._activeElement=n;let l=s?"carousel-item-start":"carousel-item-end",c=s?"carousel-item-next":"carousel-item-prev";n.classList.add(c),d(n),i.classList.add(l),n.classList.add(l),this._queueCallback(()=>{n.classList.remove(l,c),n.classList.add(ei),i.classList.remove(ei,c,l),this._isSliding=!1,o(ee)},i,this._isAnimated()),a&&this.cycle()}_isAnimated(){return this._element.classList.contains("slide")}_getActive(){return B.findOne(".active.carousel-item",this._element)}_getItems(){return B.find(".carousel-item",this._element)}_clearInterval(){this._interval&&(clearInterval(this._interval),this._interval=null)}_directionToOrder(e){return p()?e===Z?G:U:e===Z?U:G}_orderToDirection(e){return p()?e===G?Z:J:e===G?J:Z}static jQueryInterface(e){return this.each(function(){let t=eo.getOrCreateInstance(this,e);if("number"!=typeof e){if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e]()}}else t.to(e)})}}_.on(document,"click.bs.carousel.data-api","[data-bs-slide], [data-bs-slide-to]",function(e){let t=B.getElementFromSelector(this);if(!t||!t.classList.contains(et))return;e.preventDefault();let i=eo.getOrCreateInstance(t),s=this.getAttribute("data-bs-slide-to");return s?(i.to(s),void i._maybeEnableCycle()):"next"===H.getDataAttribute(this,"slide")?(i.next(),void i._maybeEnableCycle()):(i.prev(),void i._maybeEnableCycle())}),_.on(window,"load.bs.carousel.data-api",()=>{let e=B.find('[data-bs-ride="carousel"]');for(let t of e)eo.getOrCreateInstance(t)}),g(eo);let ea="show",el="collapse",ec="collapsing",eh='[data-bs-toggle="collapse"]',ed={parent:null,toggle:!0},eu={parent:"(null|element)",toggle:"boolean"};class ef extends W{constructor(e,t){super(e,t),this._isTransitioning=!1,this._triggerArray=[];let i=B.find(eh);for(let s of i){let n=B.getSelectorFromElement(s),r=B.find(n).filter(e=>e===this._element);null!==n&&r.length&&this._triggerArray.push(s)}this._initializeChildren(),this._config.parent||this._addAriaAndCollapsedClass(this._triggerArray,this._isShown()),this._config.toggle&&this.toggle()}static get Default(){return ed}static get DefaultType(){return eu}static get NAME(){return"collapse"}toggle(){this._isShown()?this.hide():this.show()}show(){if(this._isTransitioning||this._isShown())return;let e=[];if(this._config.parent&&(e=this._getFirstLevelChildren(".collapse.show, .collapse.collapsing").filter(e=>e!==this._element).map(e=>ef.getOrCreateInstance(e,{toggle:!1}))),e.length&&e[0]._isTransitioning||_.trigger(this._element,"show.bs.collapse").defaultPrevented)return;for(let t of e)t.hide();let i=this._getDimension();this._element.classList.remove(el),this._element.classList.add(ec),this._element.style[i]=0,this._addAriaAndCollapsedClass(this._triggerArray,!0),this._isTransitioning=!0;let s=`scroll${i[0].toUpperCase()+i.slice(1)}`;this._queueCallback(()=>{this._isTransitioning=!1,this._element.classList.remove(ec),this._element.classList.add(el,ea),this._element.style[i]="",_.trigger(this._element,"shown.bs.collapse")},this._element,!0),this._element.style[i]=`${this._element[s]}px`}hide(){if(this._isTransitioning||!this._isShown()||_.trigger(this._element,"hide.bs.collapse").defaultPrevented)return;let e=this._getDimension();for(let t of(this._element.style[e]=`${this._element.getBoundingClientRect()[e]}px`,d(this._element),this._element.classList.add(ec),this._element.classList.remove(el,ea),this._triggerArray)){let i=B.getElementFromSelector(t);i&&!this._isShown(i)&&this._addAriaAndCollapsedClass([t],!1)}this._isTransitioning=!0,this._element.style[e]="",this._queueCallback(()=>{this._isTransitioning=!1,this._element.classList.remove(ec),this._element.classList.add(el),_.trigger(this._element,"hidden.bs.collapse")},this._element,!0)}_isShown(e=this._element){return e.classList.contains(ea)}_configAfterMerge(e){return e.toggle=Boolean(e.toggle),e.parent=o(e.parent),e}_getDimension(){return this._element.classList.contains("collapse-horizontal")?"width":"height"}_initializeChildren(){if(!this._config.parent)return;let e=this._getFirstLevelChildren(eh);for(let t of e){let i=B.getElementFromSelector(t);i&&this._addAriaAndCollapsedClass([t],this._isShown(i))}}_getFirstLevelChildren(e){let t=B.find(":scope .collapse .collapse",this._config.parent);return B.find(e,this._config.parent).filter(e=>!t.includes(e))}_addAriaAndCollapsedClass(e,t){if(e.length)for(let i of e)i.classList.toggle("collapsed",!t),i.setAttribute("aria-expanded",t)}static jQueryInterface(e){let t={};return"string"==typeof e&&/show|hide/.test(e)&&(t.toggle=!1),this.each(function(){let i=ef.getOrCreateInstance(this,t);if("string"==typeof e){if(void 0===i[e])throw TypeError(`No method named "${e}"`);i[e]()}})}}_.on(document,"click.bs.collapse.data-api",eh,function(e){for(let t of(("A"===e.target.tagName||e.delegateTarget&&"A"===e.delegateTarget.tagName)&&e.preventDefault(),B.getMultipleElementsFromSelector(this)))ef.getOrCreateInstance(t,{toggle:!1}).toggle()}),g(ef);var ep="top",eg="bottom",em="right",e8="left",eb="auto",ev=[ep,eg,em,e8],ey="start",ew="clippingParents",e$="viewport",eA="popper",eE="reference",eC=ev.reduce(function(e,t){return e.concat([t+"-"+ey,t+"-end"])},[]),eT=[].concat(ev,[eb]).reduce(function(e,t){return e.concat([t,t+"-"+ey,t+"-end"])},[]),ex="beforeRead",ek="read",eL="afterRead",eO="beforeMain",eD="main",eS="afterMain",eI="beforeWrite",eP="write",e_="afterWrite",eN=[ex,ek,eL,eO,eD,eS,eI,eP,e_];function eM(e){return e?(e.nodeName||"").toLowerCase():null}function eF(e){if(null==e)return window;if("[object Window]"!==e.toString()){var t=e.ownerDocument;return t&&t.defaultView||window}return e}function eH(e){return e instanceof eF(e).Element||e instanceof Element}function ej(e){return e instanceof eF(e).HTMLElement||e instanceof HTMLElement}function e9(e){return"undefined"!=typeof ShadowRoot&&(e instanceof eF(e).ShadowRoot||e instanceof ShadowRoot)}let eW={name:"applyStyles",enabled:!0,phase:"write",fn:function(e){var t=e.state;Object.keys(t.elements).forEach(function(e){var i=t.styles[e]||{},s=t.attributes[e]||{},n=t.elements[e];ej(n)&&eM(n)&&(Object.assign(n.style,i),Object.keys(s).forEach(function(e){var t=s[e];!1===t?n.removeAttribute(e):n.setAttribute(e,!0===t?"":t)}))})},effect:function(e){var t=e.state,i={popper:{position:t.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(t.elements.popper.style,i.popper),t.styles=i,t.elements.arrow&&Object.assign(t.elements.arrow.style,i.arrow),function(){Object.keys(t.elements).forEach(function(e){var s=t.elements[e],n=t.attributes[e]||{},r=Object.keys(t.styles.hasOwnProperty(e)?t.styles[e]:i[e]).reduce(function(e,t){return e[t]="",e},{});ej(s)&&eM(s)&&(Object.assign(s.style,r),Object.keys(n).forEach(function(e){s.removeAttribute(e)}))})}},requires:["computeStyles"]};function ez(e){return e.split("-")[0]}var eB=Math.max,eq=Math.min,eR=Math.round;function eV(){var e=navigator.userAgentData;return null!=e&&e.brands&&Array.isArray(e.brands)?e.brands.map(function(e){return e.brand+"/"+e.version}).join(" "):navigator.userAgent}function e0(){return!/^((?!chrome|android).)*safari/i.test(eV())}function eK(e,t,i){void 0===t&&(t=!1),void 0===i&&(i=!1);var s=e.getBoundingClientRect(),n=1,r=1;t&&ej(e)&&(n=e.offsetWidth>0&&eR(s.width)/e.offsetWidth||1,r=e.offsetHeight>0&&eR(s.height)/e.offsetHeight||1);var o=(eH(e)?eF(e):window).visualViewport,a=!e0()&&i,l=(s.left+(a&&o?o.offsetLeft:0))/n,c=(s.top+(a&&o?o.offsetTop:0))/r,h=s.width/n,d=s.height/r;return{width:h,height:d,top:c,right:l+h,bottom:c+d,left:l,x:l,y:c}}function eQ(e){var t=eK(e),i=e.offsetWidth,s=e.offsetHeight;return 1>=Math.abs(t.width-i)&&(i=t.width),1>=Math.abs(t.height-s)&&(s=t.height),{x:e.offsetLeft,y:e.offsetTop,width:i,height:s}}function eX(e,t){var i=t.getRootNode&&t.getRootNode();if(e.contains(t))return!0;if(i&&e9(i)){var s=t;do{if(s&&e.isSameNode(s))return!0;s=s.parentNode||s.host}while(s)}return!1}function eY(e){return eF(e).getComputedStyle(e)}function eU(e){return["table","td","th"].indexOf(eM(e))>=0}function e1(e){return((eH(e)?e.ownerDocument:e.document)||window.document).documentElement}function e3(e){return"html"===eM(e)?e:e.assignedSlot||e.parentNode||(e9(e)?e.host:null)||e1(e)}function e4(e){return ej(e)&&"fixed"!==eY(e).position?e.offsetParent:null}function eG(e){for(var t=eF(e),i=e4(e);i&&eU(i)&&"static"===eY(i).position;)i=e4(i);return i&&("html"===eM(i)||"body"===eM(i)&&"static"===eY(i).position)?t:i||function(e){var t=/firefox/i.test(eV());if(/Trident/i.test(eV())&&ej(e)&&"fixed"===eY(e).position)return null;var i=e3(e);for(e9(i)&&(i=i.host);ej(i)&&0>["html","body"].indexOf(eM(i));){var s=eY(i);if("none"!==s.transform||"none"!==s.perspective||"paint"===s.contain||-1!==["transform","perspective"].indexOf(s.willChange)||t&&"filter"===s.willChange||t&&s.filter&&"none"!==s.filter)return i;i=i.parentNode}return null}(e)||t}function e2(e){return["top","bottom"].indexOf(e)>=0?"x":"y"}function eZ(e,t,i){return eB(e,eq(t,i))}function e6(e){return Object.assign({},{top:0,right:0,bottom:0,left:0},e)}function e7(e,t){return t.reduce(function(t,i){return t[i]=e,t},{})}let eJ={name:"arrow",enabled:!0,phase:"main",fn:function(e){var t,i=e.state,s=e.name,n=e.options,r=i.elements.arrow,o=i.modifiersData.popperOffsets,a=ez(i.placement),l=e2(a),c=[e8,em].indexOf(a)>=0?"height":"width";if(r&&o){var h,d,u=(h=n.padding,d=i,e6("number"!=typeof(h="function"==typeof h?h(Object.assign({},d.rects,{placement:d.placement})):h)?h:e7(h,ev))),f=eQ(r),p=i.rects.reference[c]+i.rects.reference[l]-o[l]-i.rects.popper[c],g=o[l]-i.rects.reference[l],m=eG(r),b=m?"y"===l?m.clientHeight||0:m.clientWidth||0:0,v=u["y"===l?ep:e8],y=b-f[c]-u["y"===l?eg:em],w=b/2-f[c]/2+(p/2-g/2),$=eZ(v,w,y),A=l;i.modifiersData[s]=((t={})[A]=$,t.centerOffset=$-w,t)}},effect:function(e){var t=e.state,i=e.options.element,s=void 0===i?"[data-popper-arrow]":i;null!=s&&("string"!=typeof s||(s=t.elements.popper.querySelector(s)))&&eX(t.elements.popper,s)&&(t.elements.arrow=s)},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]};function e5(e){return e.split("-")[1]}var te={top:"auto",right:"auto",bottom:"auto",left:"auto"};function tt(e){var t,i=e.popper,s=e.popperRect,n=e.placement,r=e.variation,o=e.offsets,a=e.position,l=e.gpuAcceleration,c=e.adaptive,h=e.roundOffsets,d=e.isFixed,u=o.x,f=void 0===u?0:u,p=o.y,g=void 0===p?0:p,m="function"==typeof h?h({x:f,y:g}):{x:f,y:g};f=m.x,g=m.y;var b=o.hasOwnProperty("x"),v=o.hasOwnProperty("y"),y=e8,w=ep,$=window;if(c){var A=eG(i),E="clientHeight",C="clientWidth";A===eF(i)&&"static"!==eY(A=e1(i)).position&&"absolute"===a&&(E="scrollHeight",C="scrollWidth"),(n===ep||(n===e8||n===em)&&"end"===r)&&(w=eg,g-=(d&&A===$&&$.visualViewport?$.visualViewport.height:A[E])-s.height,g*=l?1:-1),n!==e8&&(n!==ep&&n!==eg||"end"!==r)||(y=em,f-=(d&&A===$&&$.visualViewport?$.visualViewport.width:A[C])-s.width,f*=l?1:-1)}var T,x,k,L,O,D,S=Object.assign({position:a},c&&te),I=!0===h?(T={x:f,y:g},x=eF(i),k=T.x,L=T.y,{x:eR(k*(O=x.devicePixelRatio||1))/O||0,y:eR(L*O)/O||0}):{x:f,y:g};return f=I.x,g=I.y,l?Object.assign({},S,((D={})[w]=v?"0":"",D[y]=b?"0":"",D.transform=1>=($.devicePixelRatio||1)?"translate("+f+"px, "+g+"px)":"translate3d("+f+"px, "+g+"px, 0)",D)):Object.assign({},S,((t={})[w]=v?g+"px":"",t[y]=b?f+"px":"",t.transform="",t))}let ti={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(e){var t=e.state,i=e.options,s=i.gpuAcceleration,n=i.adaptive,r=i.roundOffsets,o=void 0===r||r,a={placement:ez(t.placement),variation:e5(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:void 0===s||s,isFixed:"fixed"===t.options.strategy};null!=t.modifiersData.popperOffsets&&(t.styles.popper=Object.assign({},t.styles.popper,tt(Object.assign({},a,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:void 0===n||n,roundOffsets:o})))),null!=t.modifiersData.arrow&&(t.styles.arrow=Object.assign({},t.styles.arrow,tt(Object.assign({},a,{offsets:t.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:o})))),t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-placement":t.placement})},data:{}};var ts={passive:!0};let tn={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(e){var t=e.state,i=e.instance,s=e.options,n=s.scroll,r=void 0===n||n,o=s.resize,a=void 0===o||o,l=eF(t.elements.popper),c=[].concat(t.scrollParents.reference,t.scrollParents.popper);return r&&c.forEach(function(e){e.addEventListener("scroll",i.update,ts)}),a&&l.addEventListener("resize",i.update,ts),function(){r&&c.forEach(function(e){e.removeEventListener("scroll",i.update,ts)}),a&&l.removeEventListener("resize",i.update,ts)}},data:{}};var tr={left:"right",right:"left",bottom:"top",top:"bottom"};function to(e){return e.replace(/left|right|bottom|top/g,function(e){return tr[e]})}var ta={start:"end",end:"start"};function tl(e){return e.replace(/start|end/g,function(e){return ta[e]})}function tc(e){var t=eF(e);return{scrollLeft:t.pageXOffset,scrollTop:t.pageYOffset}}function th(e){return eK(e1(e)).left+tc(e).scrollLeft}function td(e){var t=eY(e),i=t.overflow,s=t.overflowX,n=t.overflowY;return/auto|scroll|overlay|hidden/.test(i+n+s)}function tu(e,t){void 0===t&&(t=[]);var i,s=function e(t){return["html","body","#document"].indexOf(eM(t))>=0?t.ownerDocument.body:ej(t)&&td(t)?t:e(e3(t))}(e),n=s===(null==(i=e.ownerDocument)?void 0:i.body),r=eF(s),o=n?[r].concat(r.visualViewport||[],td(s)?s:[]):s,a=t.concat(o);return n?a:a.concat(tu(e3(o)))}function tf(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function tp(e,t,i){var s,n,r,o,a,l,c,h,d,u,f,p;return t===e$?tf(function(e,t){var i=eF(e),s=e1(e),n=i.visualViewport,r=s.clientWidth,o=s.clientHeight,a=0,l=0;if(n){r=n.width,o=n.height;var c=e0();(c||!c&&"fixed"===t)&&(a=n.offsetLeft,l=n.offsetTop)}return{width:r,height:o,x:a+th(e),y:l}}(e,i)):eH(t)?(s=t,(r=eK(s,!1,"fixed"===(n=i))).top=r.top+s.clientTop,r.left=r.left+s.clientLeft,r.bottom=r.top+s.clientHeight,r.right=r.left+s.clientWidth,r.width=s.clientWidth,r.height=s.clientHeight,r.x=r.left,r.y=r.top,r):tf((o=e1(e),l=e1(o),c=tc(o),h=null==(a=o.ownerDocument)?void 0:a.body,d=eB(l.scrollWidth,l.clientWidth,h?h.scrollWidth:0,h?h.clientWidth:0),u=eB(l.scrollHeight,l.clientHeight,h?h.scrollHeight:0,h?h.clientHeight:0),f=-c.scrollLeft+th(o),p=-c.scrollTop,"rtl"===eY(h||l).direction&&(f+=eB(l.clientWidth,h?h.clientWidth:0)-d),{width:d,height:u,x:f,y:p}))}function tg(e){var t,i=e.reference,s=e.element,n=e.placement,r=n?ez(n):null,o=n?e5(n):null,a=i.x+i.width/2-s.width/2,l=i.y+i.height/2-s.height/2;switch(r){case ep:t={x:a,y:i.y-s.height};break;case eg:t={x:a,y:i.y+i.height};break;case em:t={x:i.x+i.width,y:l};break;case e8:t={x:i.x-s.width,y:l};break;default:t={x:i.x,y:i.y}}var c=r?e2(r):null;if(null!=c){var h="y"===c?"height":"width";switch(o){case ey:t[c]=t[c]-(i[h]/2-s[h]/2);break;case"end":t[c]=t[c]+(i[h]/2-s[h]/2)}}return t}function tm(e,t){void 0===t&&(t={});var i,s,n,r,o,a,l,c,h,d,u=t,f=u.placement,p=void 0===f?e.placement:f,g=u.strategy,m=void 0===g?e.strategy:g,b=u.boundary,v=u.rootBoundary,y=u.elementContext,w=void 0===y?eA:y,$=u.altBoundary,A=u.padding,E=void 0===A?0:A,C=e6("number"!=typeof E?E:e7(E,ev)),T=e.rects.popper,x=e.elements[void 0!==$&&$?w===eA?eE:eA:w],k=(i=eH(x)?x:x.contextElement||e1(e.elements.popper),s=void 0===b?ew:b,n=void 0===v?e$:v,r=m,h=(c=[].concat("clippingParents"===s?(o=i,a=tu(e3(o)),l=["absolute","fixed"].indexOf(eY(o).position)>=0&&ej(o)?eG(o):o,eH(l)?a.filter(function(e){return eH(e)&&eX(e,l)&&"body"!==eM(e)}):[]):[].concat(s),[n]))[0],(d=c.reduce(function(e,t){var s=tp(i,t,r);return e.top=eB(s.top,e.top),e.right=eq(s.right,e.right),e.bottom=eq(s.bottom,e.bottom),e.left=eB(s.left,e.left),e},tp(i,h,r))).width=d.right-d.left,d.height=d.bottom-d.top,d.x=d.left,d.y=d.top,d),L=eK(e.elements.reference),O=tg({reference:L,element:T,strategy:"absolute",placement:p}),D=tf(Object.assign({},T,O)),S=w===eA?D:L,I={top:k.top-S.top+C.top,bottom:S.bottom-k.bottom+C.bottom,left:k.left-S.left+C.left,right:S.right-k.right+C.right},P=e.modifiersData.offset;if(w===eA&&P){var _=P[p];Object.keys(I).forEach(function(e){var t=[em,eg].indexOf(e)>=0?1:-1,i=[ep,eg].indexOf(e)>=0?"y":"x";I[e]+=_[i]*t})}return I}let t8={name:"flip",enabled:!0,phase:"main",fn:function(e){var t=e.state,i=e.options,s=e.name;if(!t.modifiersData[s]._skip){for(var n=i.mainAxis,r=void 0===n||n,o=i.altAxis,a=void 0===o||o,l=i.fallbackPlacements,c=i.padding,h=i.boundary,d=i.rootBoundary,u=i.altBoundary,f=i.flipVariations,p=void 0===f||f,g=i.allowedAutoPlacements,m=t.options.placement,b=ez(m),v=l||(b!==m&&p?function(e){if(ez(e)===eb)return[];var t=to(e);return[tl(e),t,tl(t)]}(m):[to(m)]),y=[m].concat(v).reduce(function(e,i){var s,n,r,o,a,l,u,f,m,b,v,y,w,$;return e.concat(ez(i)===eb?(s=t,n={placement:i,boundary:h,rootBoundary:d,padding:c,flipVariations:p,allowedAutoPlacements:g},o=(r=n).placement,a=r.boundary,l=r.rootBoundary,u=r.padding,f=r.flipVariations,b=void 0===(m=r.allowedAutoPlacements)?eT:m,0===(w=(y=(v=e5(o))?f?eC:eC.filter(function(e){return e5(e)===v}):ev).filter(function(e){return b.indexOf(e)>=0})).length&&(w=y),Object.keys($=w.reduce(function(e,t){return e[t]=tm(s,{placement:t,boundary:a,rootBoundary:l,padding:u})[ez(t)],e},{})).sort(function(e,t){return $[e]-$[t]})):i)},[]),w=t.rects.reference,$=t.rects.popper,A=new Map,E=!0,C=y[0],T=0;T<y.length;T++){var x=y[T],k=ez(x),L=e5(x)===ey,O=[ep,eg].indexOf(k)>=0,D=O?"width":"height",S=tm(t,{placement:x,boundary:h,rootBoundary:d,altBoundary:u,padding:c}),I=O?L?em:e8:L?eg:ep;w[D]>$[D]&&(I=to(I));var P=to(I),_=[];if(r&&_.push(S[k]<=0),a&&_.push(S[I]<=0,S[P]<=0),_.every(function(e){return e})){C=x,E=!1;break}A.set(x,_)}if(E)for(var N=function(e){var t=y.find(function(t){var i=A.get(t);if(i)return i.slice(0,e).every(function(e){return e})});if(t)return C=t,"break"},M=p?3:1;M>0&&"break"!==N(M);M--);t.placement!==C&&(t.modifiersData[s]._skip=!0,t.placement=C,t.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}};function tb(e,t,i){return void 0===i&&(i={x:0,y:0}),{top:e.top-t.height-i.y,right:e.right-t.width+i.x,bottom:e.bottom-t.height+i.y,left:e.left-t.width-i.x}}function tv(e){return[ep,em,eg,e8].some(function(t){return e[t]>=0})}let ty={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(e){var t=e.state,i=e.name,s=t.rects.reference,n=t.rects.popper,r=t.modifiersData.preventOverflow,o=tm(t,{elementContext:"reference"}),a=tm(t,{altBoundary:!0}),l=tb(o,s),c=tb(a,n,r),h=tv(l),d=tv(c);t.modifiersData[i]={referenceClippingOffsets:l,popperEscapeOffsets:c,isReferenceHidden:h,hasPopperEscaped:d},t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-reference-hidden":h,"data-popper-escaped":d})}},tw={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(e){var t=e.state,i=e.options,s=e.name,n=i.offset,r=void 0===n?[0,0]:n,o=eT.reduce(function(e,i){var s,n,o,a,l,c,h,d;return e[i]=(s=i,n=t.rects,o=r,l=[e8,ep].indexOf(a=ez(s))>=0?-1:1,h=(c="function"==typeof o?o(Object.assign({},n,{placement:s})):o)[0],d=c[1],h=h||0,d=(d||0)*l,[e8,em].indexOf(a)>=0?{x:d,y:h}:{x:h,y:d}),e},{}),a=o[t.placement],l=a.x,c=a.y;null!=t.modifiersData.popperOffsets&&(t.modifiersData.popperOffsets.x+=l,t.modifiersData.popperOffsets.y+=c),t.modifiersData[s]=o}},t$={name:"popperOffsets",enabled:!0,phase:"read",fn:function(e){var t=e.state,i=e.name;t.modifiersData[i]=tg({reference:t.rects.reference,element:t.rects.popper,strategy:"absolute",placement:t.placement})},data:{}},tA={name:"preventOverflow",enabled:!0,phase:"main",fn:function(e){var t=e.state,i=e.options,s=e.name,n=i.mainAxis,r=i.altAxis,o=i.boundary,a=i.rootBoundary,l=i.altBoundary,c=i.padding,h=i.tether,d=void 0===h||h,u=i.tetherOffset,f=void 0===u?0:u,p=tm(t,{boundary:o,rootBoundary:a,padding:c,altBoundary:l}),g=ez(t.placement),m=e5(t.placement),b=!m,v=e2(g),y="x"===v?"y":"x",w=t.modifiersData.popperOffsets,$=t.rects.reference,A=t.rects.popper,E="function"==typeof f?f(Object.assign({},t.rects,{placement:t.placement})):f,C="number"==typeof E?{mainAxis:E,altAxis:E}:Object.assign({mainAxis:0,altAxis:0},E),T=t.modifiersData.offset?t.modifiersData.offset[t.placement]:null,x={x:0,y:0};if(w){if(void 0===n||n){var k,L="y"===v?ep:e8,O="y"===v?eg:em,D="y"===v?"height":"width",S=w[v],I=S+p[L],P=S-p[O],_=d?-A[D]/2:0,N=m===ey?$[D]:A[D],M=m===ey?-A[D]:-$[D],F=t.elements.arrow,H=d&&F?eQ(F):{width:0,height:0},j=t.modifiersData["arrow#persistent"]?t.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0},W=j[L],z=j[O],B=eZ(0,$[D],H[D]),q=b?$[D]/2-_-B-W-C.mainAxis:N-B-W-C.mainAxis,R=b?-$[D]/2+_+B+z+C.mainAxis:M+B+z+C.mainAxis,V=t.elements.arrow&&eG(t.elements.arrow),K=V?"y"===v?V.clientTop||0:V.clientLeft||0:0,Q=null!=(k=null==T?void 0:T[v])?k:0,X=eZ(d?eq(I,S+q-Q-K):I,S,d?eB(P,S+R-Q):P);w[v]=X,x[v]=X-S}if(void 0!==r&&r){var Y,U,G,Z,J,ee=w[y],et="y"===y?"height":"width",ei=ee+p["x"===v?ep:e8],es=ee-p["x"===v?eg:em],en=-1!==[ep,e8].indexOf(g),er=null!=(J=null==T?void 0:T[y])?J:0,eo=en?ei:ee-$[et]-A[et]-er+C.altAxis,ea=en?ee+$[et]+A[et]-er-C.altAxis:es,el=d&&en?(Y=eo,U=ee,G=ea,(Z=eZ(Y,U,G))>G?G:Z):eZ(d?eo:ei,ee,d?ea:es);w[y]=el,x[y]=el-ee}t.modifiersData[s]=x}},requiresIfExists:["offset"]};var tE={placement:"bottom",modifiers:[],strategy:"absolute"};function tC(){for(var e=arguments.length,t=Array(e),i=0;i<e;i++)t[i]=arguments[i];return!t.some(function(e){return!(e&&"function"==typeof e.getBoundingClientRect)})}function tT(e){void 0===e&&(e={});var t=e,i=t.defaultModifiers,s=void 0===i?[]:i,n=t.defaultOptions,r=void 0===n?tE:n;return function(e,t,i){void 0===i&&(i=r);var n,o,a={placement:"bottom",orderedModifiers:[],options:Object.assign({},tE,r),modifiersData:{},elements:{reference:e,popper:t},attributes:{},styles:{}},l=[],c=!1,h={state:a,setOptions:function(i){var n,o,c,u,f,p,g="function"==typeof i?i(a.options):i;d(),a.options=Object.assign({},r,a.options,g),a.scrollParents={reference:eH(e)?tu(e):e.contextElement?tu(e.contextElement):[],popper:tu(t)};var m,b,v=(p=(o=n=Object.keys(b=(m=[].concat(s,a.options.modifiers)).reduce(function(e,t){var i=e[t.name];return e[t.name]=i?Object.assign({},i,t,{options:Object.assign({},i.options,t.options),data:Object.assign({},i.data,t.data)}):t,e},{})).map(function(e){return b[e]}),c=new Map,u=new Set,f=[],o.forEach(function(e){c.set(e.name,e)}),o.forEach(function(e){u.has(e.name)||function e(t){u.add(t.name),[].concat(t.requires||[],t.requiresIfExists||[]).forEach(function(t){if(!u.has(t)){var i=c.get(t);i&&e(i)}}),f.push(t)}(e)}),f),eN.reduce(function(e,t){return e.concat(p.filter(function(e){return e.phase===t}))},[]));return a.orderedModifiers=v.filter(function(e){return e.enabled}),a.orderedModifiers.forEach(function(e){var t=e.name,i=e.options,s=e.effect;if("function"==typeof s){var n=s({state:a,name:t,instance:h,options:void 0===i?{}:i});l.push(n||function(){})}}),h.update()},forceUpdate:function(){if(!c){var e,t,i,s,n,r,o,l,d,u,f,p,g,m,b,v=a.elements,y=v.reference,w=v.popper;if(tC(y,w)){a.rects={reference:(e=y,t=eG(w),i="fixed"===a.options.strategy,u=ej(t),f=ej(t)&&(r=eR((n=(s=t).getBoundingClientRect()).width)/s.offsetWidth||1,o=eR(n.height)/s.offsetHeight||1,1!==r||1!==o),p=e1(t),g=eK(e,f,i),m={scrollLeft:0,scrollTop:0},b={x:0,y:0},(u||!u&&!i)&&(("body"!==eM(t)||td(p))&&(m=(l=t)!==eF(l)&&ej(l)?{scrollLeft:(d=l).scrollLeft,scrollTop:d.scrollTop}:tc(l)),ej(t)?((b=eK(t,!0)).x+=t.clientLeft,b.y+=t.clientTop):p&&(b.x=th(p))),{x:g.left+m.scrollLeft-b.x,y:g.top+m.scrollTop-b.y,width:g.width,height:g.height}),popper:eQ(w)},a.reset=!1,a.placement=a.options.placement,a.orderedModifiers.forEach(function(e){return a.modifiersData[e.name]=Object.assign({},e.data)});for(var $=0;$<a.orderedModifiers.length;$++)if(!0!==a.reset){var A=a.orderedModifiers[$],E=A.fn,C=A.options,T=void 0===C?{}:C,x=A.name;"function"==typeof E&&(a=E({state:a,options:T,name:x,instance:h})||a)}else a.reset=!1,$=-1}}},update:(n=function(){return new Promise(function(e){h.forceUpdate(),e(a)})},function(){return o||(o=new Promise(function(e){Promise.resolve().then(function(){o=void 0,e(n())})})),o}),destroy:function(){d(),c=!0}};if(!tC(e,t))return h;function d(){l.forEach(function(e){return e()}),l=[]}return h.setOptions(i).then(function(e){!c&&i.onFirstUpdate&&i.onFirstUpdate(e)}),h}}var tx=tT(),tk=tT({defaultModifiers:[tn,t$,ti,eW]}),tL=tT({defaultModifiers:[tn,t$,ti,eW,tw,t8,tA,eJ,ty]});let tO=Object.freeze(Object.defineProperty({__proto__:null,afterMain:eS,afterRead:eL,afterWrite:e_,applyStyles:eW,arrow:eJ,auto:eb,basePlacements:ev,beforeMain:eO,beforeRead:ex,beforeWrite:eI,bottom:eg,clippingParents:ew,computeStyles:ti,createPopper:tL,createPopperBase:tx,createPopperLite:tk,detectOverflow:tm,end:"end",eventListeners:tn,flip:t8,hide:ty,left:e8,main:eD,modifierPhases:eN,offset:tw,placements:eT,popper:eA,popperGenerator:tT,popperOffsets:t$,preventOverflow:tA,read:ek,reference:eE,right:em,start:ey,top:ep,variationPlacements:eC,viewport:e$,write:eP},Symbol.toStringTag,{value:"Module"})),tD="dropdown",tS="ArrowDown",tI="click.bs.dropdown.data-api",tP="keydown.bs.dropdown.data-api",t_="show",tN='[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)',tM=`${tN}.show`,tF=".dropdown-menu",tH=p()?"top-end":"top-start",tj=p()?"top-start":"top-end",t9=p()?"bottom-end":"bottom-start",tW=p()?"bottom-start":"bottom-end",tz=p()?"left-start":"right-start",tB=p()?"right-start":"left-start",tq={autoClose:!0,boundary:"clippingParents",display:"dynamic",offset:[0,2],popperConfig:null,reference:"toggle"},tR={autoClose:"(boolean|string)",boundary:"(string|element)",display:"string",offset:"(array|string|function)",popperConfig:"(null|object|function)",reference:"(string|element|object)"};class tV extends W{constructor(e,t){super(e,t),this._popper=null,this._parent=this._element.parentNode,this._menu=B.next(this._element,tF)[0]||B.prev(this._element,tF)[0]||B.findOne(tF,this._parent),this._inNavbar=this._detectNavbar()}static get Default(){return tq}static get DefaultType(){return tR}static get NAME(){return tD}toggle(){return this._isShown()?this.hide():this.show()}show(){if(l(this._element)||this._isShown())return;let e={relatedTarget:this._element};if(!_.trigger(this._element,"show.bs.dropdown",e).defaultPrevented){if(this._createPopper(),"ontouchstart"in document.documentElement&&!this._parent.closest(".navbar-nav"))for(let t of[].concat(...document.body.children))_.on(t,"mouseover",h);this._element.focus(),this._element.setAttribute("aria-expanded",!0),this._menu.classList.add(t_),this._element.classList.add(t_),_.trigger(this._element,"shown.bs.dropdown",e)}}hide(){if(l(this._element)||!this._isShown())return;let e={relatedTarget:this._element};this._completeHide(e)}dispose(){this._popper&&this._popper.destroy(),super.dispose()}update(){this._inNavbar=this._detectNavbar(),this._popper&&this._popper.update()}_completeHide(e){if(!_.trigger(this._element,"hide.bs.dropdown",e).defaultPrevented){if("ontouchstart"in document.documentElement)for(let t of[].concat(...document.body.children))_.off(t,"mouseover",h);this._popper&&this._popper.destroy(),this._menu.classList.remove(t_),this._element.classList.remove(t_),this._element.setAttribute("aria-expanded","false"),H.removeDataAttribute(this._menu,"popper"),_.trigger(this._element,"hidden.bs.dropdown",e)}}_getConfig(e){if("object"==typeof(e=super._getConfig(e)).reference&&!r(e.reference)&&"function"!=typeof e.reference.getBoundingClientRect)throw TypeError(`${tD.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`);return e}_createPopper(){if(void 0===tO)throw TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");let e=this._element;"parent"===this._config.reference?e=this._parent:r(this._config.reference)?e=o(this._config.reference):"object"==typeof this._config.reference&&(e=this._config.reference);let t=this._getPopperConfig();this._popper=tL(e,this._menu,t)}_isShown(){return this._menu.classList.contains(t_)}_getPlacement(){let e=this._parent;if(e.classList.contains("dropend"))return tz;if(e.classList.contains("dropstart"))return tB;if(e.classList.contains("dropup-center"))return"top";if(e.classList.contains("dropdown-center"))return"bottom";let t="end"===getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();return e.classList.contains("dropup")?t?tj:tH:t?tW:t9}_detectNavbar(){return null!==this._element.closest(".navbar")}_getOffset(){let{offset:e}=this._config;return"string"==typeof e?e.split(",").map(e=>Number.parseInt(e,10)):"function"==typeof e?t=>e(t,this._element):e}_getPopperConfig(){let e={placement:this._getPlacement(),modifiers:[{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"offset",options:{offset:this._getOffset()}}]};return(this._inNavbar||"static"===this._config.display)&&(H.setDataAttribute(this._menu,"popper","static"),e.modifiers=[{name:"applyStyles",enabled:!1}]),{...e,...m(this._config.popperConfig,[e])}}_selectMenuItem({key:e,target:t}){let i=B.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",this._menu).filter(e=>a(e));i.length&&v(i,t,e===tS,!i.includes(t)).focus()}static jQueryInterface(e){return this.each(function(){let t=tV.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e]()}})}static clearMenus(e){if(2===e.button||"keyup"===e.type&&"Tab"!==e.key)return;let t=B.find(tM);for(let i of t){let s=tV.getInstance(i);if(!s||!1===s._config.autoClose)continue;let n=e.composedPath(),r=n.includes(s._menu);if(n.includes(s._element)||"inside"===s._config.autoClose&&!r||"outside"===s._config.autoClose&&r||s._menu.contains(e.target)&&("keyup"===e.type&&"Tab"===e.key||/input|select|option|textarea|form/i.test(e.target.tagName)))continue;let o={relatedTarget:s._element};"click"===e.type&&(o.clickEvent=e),s._completeHide(o)}}static dataApiKeydownHandler(e){let t=/input|textarea/i.test(e.target.tagName),i="Escape"===e.key,s=["ArrowUp",tS].includes(e.key);if(!s&&!i||t&&!i)return;e.preventDefault();let n=this.matches(tN)?this:B.prev(this,tN)[0]||B.next(this,tN)[0]||B.findOne(tN,e.delegateTarget.parentNode),r=tV.getOrCreateInstance(n);if(s)return e.stopPropagation(),r.show(),void r._selectMenuItem(e);r._isShown()&&(e.stopPropagation(),r.hide(),n.focus())}}_.on(document,tP,tN,tV.dataApiKeydownHandler),_.on(document,tP,tF,tV.dataApiKeydownHandler),_.on(document,tI,tV.clearMenus),_.on(document,"keyup.bs.dropdown.data-api",tV.clearMenus),_.on(document,tI,tN,function(e){e.preventDefault(),tV.getOrCreateInstance(this).toggle()}),g(tV);let t0="show",tK="mousedown.bs.backdrop",tQ={className:"modal-backdrop",clickCallback:null,isAnimated:!1,isVisible:!0,rootElement:"body"},tX={className:"string",clickCallback:"(function|null)",isAnimated:"boolean",isVisible:"boolean",rootElement:"(element|string)"};class tY extends j{constructor(e){super(),this._config=this._getConfig(e),this._isAppended=!1,this._element=null}static get Default(){return tQ}static get DefaultType(){return tX}static get NAME(){return"backdrop"}show(e){if(!this._config.isVisible)return void m(e);this._append();let t=this._getElement();this._config.isAnimated&&d(t),t.classList.add(t0),this._emulateAnimation(()=>{m(e)})}hide(e){this._config.isVisible?(this._getElement().classList.remove(t0),this._emulateAnimation(()=>{this.dispose(),m(e)})):m(e)}dispose(){this._isAppended&&(_.off(this._element,tK),this._element.remove(),this._isAppended=!1)}_getElement(){if(!this._element){let e=document.createElement("div");e.className=this._config.className,this._config.isAnimated&&e.classList.add("fade"),this._element=e}return this._element}_configAfterMerge(e){return e.rootElement=o(e.rootElement),e}_append(){if(this._isAppended)return;let e=this._getElement();this._config.rootElement.append(e),_.on(e,tK,()=>{m(this._config.clickCallback)}),this._isAppended=!0}_emulateAnimation(e){b(e,this._getElement(),this._config.isAnimated)}}let tU=".bs.focustrap",t1="backward",t3={autofocus:!0,trapElement:null},t4={autofocus:"boolean",trapElement:"element"};class tG extends j{constructor(e){super(),this._config=this._getConfig(e),this._isActive=!1,this._lastTabNavDirection=null}static get Default(){return t3}static get DefaultType(){return t4}static get NAME(){return"focustrap"}activate(){this._isActive||(this._config.autofocus&&this._config.trapElement.focus(),_.off(document,tU),_.on(document,"focusin.bs.focustrap",e=>this._handleFocusin(e)),_.on(document,"keydown.tab.bs.focustrap",e=>this._handleKeydown(e)),this._isActive=!0)}deactivate(){this._isActive&&(this._isActive=!1,_.off(document,tU))}_handleFocusin(e){let{trapElement:t}=this._config;if(e.target===document||e.target===t||t.contains(e.target))return;let i=B.focusableChildren(t);0===i.length?t.focus():this._lastTabNavDirection===t1?i[i.length-1].focus():i[0].focus()}_handleKeydown(e){"Tab"===e.key&&(this._lastTabNavDirection=e.shiftKey?t1:"forward")}}let t2=".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",tZ=".sticky-top",t6="padding-right",t7="margin-right";class tJ{constructor(){this._element=document.body}getWidth(){let e=document.documentElement.clientWidth;return Math.abs(window.innerWidth-e)}hide(){let e=this.getWidth();this._disableOverFlow(),this._setElementAttributes(this._element,t6,t=>t+e),this._setElementAttributes(t2,t6,t=>t+e),this._setElementAttributes(tZ,t7,t=>t-e)}reset(){this._resetElementAttributes(this._element,"overflow"),this._resetElementAttributes(this._element,t6),this._resetElementAttributes(t2,t6),this._resetElementAttributes(tZ,t7)}isOverflowing(){return this.getWidth()>0}_disableOverFlow(){this._saveInitialAttribute(this._element,"overflow"),this._element.style.overflow="hidden"}_setElementAttributes(e,t,i){let s=this.getWidth();this._applyManipulationCallback(e,e=>{if(e!==this._element&&window.innerWidth>e.clientWidth+s)return;this._saveInitialAttribute(e,t);let n=window.getComputedStyle(e).getPropertyValue(t);e.style.setProperty(t,`${i(Number.parseFloat(n))}px`)})}_saveInitialAttribute(e,t){let i=e.style.getPropertyValue(t);i&&H.setDataAttribute(e,t,i)}_resetElementAttributes(e,t){this._applyManipulationCallback(e,e=>{let i=H.getDataAttribute(e,t);null!==i?(H.removeDataAttribute(e,t),e.style.setProperty(t,i)):e.style.removeProperty(t)})}_applyManipulationCallback(e,t){if(r(e))t(e);else for(let i of B.find(e,this._element))t(i)}}let t5=".bs.modal",ie="hidden.bs.modal",it="show.bs.modal",ii="modal-open",is="show",ir="modal-static",io={backdrop:!0,focus:!0,keyboard:!0},ia={backdrop:"(boolean|string)",focus:"boolean",keyboard:"boolean"};class il extends W{constructor(e,t){super(e,t),this._dialog=B.findOne(".modal-dialog",this._element),this._backdrop=this._initializeBackDrop(),this._focustrap=this._initializeFocusTrap(),this._isShown=!1,this._isTransitioning=!1,this._scrollBar=new tJ,this._addEventListeners()}static get Default(){return io}static get DefaultType(){return ia}static get NAME(){return"modal"}toggle(e){return this._isShown?this.hide():this.show(e)}show(e){this._isShown||this._isTransitioning||_.trigger(this._element,it,{relatedTarget:e}).defaultPrevented||(this._isShown=!0,this._isTransitioning=!0,this._scrollBar.hide(),document.body.classList.add(ii),this._adjustDialog(),this._backdrop.show(()=>this._showElement(e)))}hide(){this._isShown&&!this._isTransitioning&&(_.trigger(this._element,"hide.bs.modal").defaultPrevented||(this._isShown=!1,this._isTransitioning=!0,this._focustrap.deactivate(),this._element.classList.remove(is),this._queueCallback(()=>this._hideModal(),this._element,this._isAnimated())))}dispose(){_.off(window,t5),_.off(this._dialog,t5),this._backdrop.dispose(),this._focustrap.deactivate(),super.dispose()}handleUpdate(){this._adjustDialog()}_initializeBackDrop(){return new tY({isVisible:Boolean(this._config.backdrop),isAnimated:this._isAnimated()})}_initializeFocusTrap(){return new tG({trapElement:this._element})}_showElement(e){document.body.contains(this._element)||document.body.append(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.scrollTop=0;let t=B.findOne(".modal-body",this._dialog);t&&(t.scrollTop=0),d(this._element),this._element.classList.add(is),this._queueCallback(()=>{this._config.focus&&this._focustrap.activate(),this._isTransitioning=!1,_.trigger(this._element,"shown.bs.modal",{relatedTarget:e})},this._dialog,this._isAnimated())}_addEventListeners(){_.on(this._element,"keydown.dismiss.bs.modal",e=>{"Escape"===e.key&&(this._config.keyboard?this.hide():this._triggerBackdropTransition())}),_.on(window,"resize.bs.modal",()=>{this._isShown&&!this._isTransitioning&&this._adjustDialog()}),_.on(this._element,"mousedown.dismiss.bs.modal",e=>{_.one(this._element,"click.dismiss.bs.modal",t=>{this._element===e.target&&this._element===t.target&&("static"!==this._config.backdrop?this._config.backdrop&&this.hide():this._triggerBackdropTransition())})})}_hideModal(){this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._isTransitioning=!1,this._backdrop.hide(()=>{document.body.classList.remove(ii),this._resetAdjustments(),this._scrollBar.reset(),_.trigger(this._element,ie)})}_isAnimated(){return this._element.classList.contains("fade")}_triggerBackdropTransition(){if(_.trigger(this._element,"hidePrevented.bs.modal").defaultPrevented)return;let e=this._element.scrollHeight>document.documentElement.clientHeight,t=this._element.style.overflowY;"hidden"===t||this._element.classList.contains(ir)||(e||(this._element.style.overflowY="hidden"),this._element.classList.add(ir),this._queueCallback(()=>{this._element.classList.remove(ir),this._queueCallback(()=>{this._element.style.overflowY=t},this._dialog)},this._dialog),this._element.focus())}_adjustDialog(){let e=this._element.scrollHeight>document.documentElement.clientHeight,t=this._scrollBar.getWidth(),i=t>0;if(i&&!e){let s=p()?"paddingLeft":"paddingRight";this._element.style[s]=`${t}px`}if(!i&&e){let n=p()?"paddingRight":"paddingLeft";this._element.style[n]=`${t}px`}}_resetAdjustments(){this._element.style.paddingLeft="",this._element.style.paddingRight=""}static jQueryInterface(e,t){return this.each(function(){let i=il.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===i[e])throw TypeError(`No method named "${e}"`);i[e](t)}})}}_.on(document,"click.bs.modal.data-api",'[data-bs-toggle="modal"]',function(e){let t=B.getElementFromSelector(this);["A","AREA"].includes(this.tagName)&&e.preventDefault(),_.one(t,it,e=>{e.defaultPrevented||_.one(t,ie,()=>{a(this)&&this.focus()})});let i=B.findOne(".modal.show");i&&il.getInstance(i).hide(),il.getOrCreateInstance(t).toggle(this)}),q(il),g(il);let ic="show",ih="showing",id="hiding",iu=".offcanvas.show",ip="hidePrevented.bs.offcanvas",ig="hidden.bs.offcanvas",im={backdrop:!0,keyboard:!0,scroll:!1},i8={backdrop:"(boolean|string)",keyboard:"boolean",scroll:"boolean"};class ib extends W{constructor(e,t){super(e,t),this._isShown=!1,this._backdrop=this._initializeBackDrop(),this._focustrap=this._initializeFocusTrap(),this._addEventListeners()}static get Default(){return im}static get DefaultType(){return i8}static get NAME(){return"offcanvas"}toggle(e){return this._isShown?this.hide():this.show(e)}show(e){this._isShown||_.trigger(this._element,"show.bs.offcanvas",{relatedTarget:e}).defaultPrevented||(this._isShown=!0,this._backdrop.show(),this._config.scroll||(new tJ).hide(),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.classList.add(ih),this._queueCallback(()=>{this._config.scroll&&!this._config.backdrop||this._focustrap.activate(),this._element.classList.add(ic),this._element.classList.remove(ih),_.trigger(this._element,"shown.bs.offcanvas",{relatedTarget:e})},this._element,!0))}hide(){this._isShown&&(_.trigger(this._element,"hide.bs.offcanvas").defaultPrevented||(this._focustrap.deactivate(),this._element.blur(),this._isShown=!1,this._element.classList.add(id),this._backdrop.hide(),this._queueCallback(()=>{this._element.classList.remove(ic,id),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._config.scroll||(new tJ).reset(),_.trigger(this._element,ig)},this._element,!0)))}dispose(){this._backdrop.dispose(),this._focustrap.deactivate(),super.dispose()}_initializeBackDrop(){let e=Boolean(this._config.backdrop);return new tY({className:"offcanvas-backdrop",isVisible:e,isAnimated:!0,rootElement:this._element.parentNode,clickCallback:e?()=>{"static"!==this._config.backdrop?this.hide():_.trigger(this._element,ip)}:null})}_initializeFocusTrap(){return new tG({trapElement:this._element})}_addEventListeners(){_.on(this._element,"keydown.dismiss.bs.offcanvas",e=>{"Escape"===e.key&&(this._config.keyboard?this.hide():_.trigger(this._element,ip))})}static jQueryInterface(e){return this.each(function(){let t=ib.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e](this)}})}}_.on(document,"click.bs.offcanvas.data-api",'[data-bs-toggle="offcanvas"]',function(e){let t=B.getElementFromSelector(this);if(["A","AREA"].includes(this.tagName)&&e.preventDefault(),l(this))return;_.one(t,ig,()=>{a(this)&&this.focus()});let i=B.findOne(iu);i&&i!==t&&ib.getInstance(i).hide(),ib.getOrCreateInstance(t).toggle(this)}),_.on(window,"load.bs.offcanvas.data-api",()=>{for(let e of B.find(iu))ib.getOrCreateInstance(e).show()}),_.on(window,"resize.bs.offcanvas",()=>{for(let e of B.find("[aria-modal][class*=show][class*=offcanvas-]"))"fixed"!==getComputedStyle(e).position&&ib.getOrCreateInstance(e).hide()}),q(ib),g(ib);let iv={"*":["class","dir","id","lang","role",/^aria-[\w-]*$/i],a:["target","href","title","rel"],area:[],b:[],br:[],col:[],code:[],div:[],em:[],hr:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],i:[],img:["src","srcset","alt","title","width","height"],li:[],ol:[],p:[],pre:[],s:[],small:[],span:[],sub:[],sup:[],strong:[],u:[],ul:[]},iy=new Set(["background","cite","href","itemtype","longdesc","GETer","src","xlink:href"]),iw=/^(?!javascript:)(?:[a-z0-9+.-]+:|[^&:/?#]*(?:[/?#]|$))/i,i$=(e,t)=>{let i=e.nodeName.toLowerCase();return t.includes(i)?!iy.has(i)||Boolean(iw.test(e.nodeValue)):t.filter(e=>e instanceof RegExp).some(e=>e.test(i))},iA={allowList:iv,content:{},extraClass:"",html:!1,sanitize:!0,sanitizeFn:null,template:"<div></div>"},iE={allowList:"object",content:"object",extraClass:"(string|function)",html:"boolean",sanitize:"boolean",sanitizeFn:"(null|function)",template:"string"},iC={entry:"(string|element|function|null)",selector:"(string|element)"};class iT extends j{constructor(e){super(),this._config=this._getConfig(e)}static get Default(){return iA}static get DefaultType(){return iE}static get NAME(){return"TemplateFactory"}getContent(){return Object.values(this._config.content).map(e=>this._resolvePossibleFunction(e)).filter(Boolean)}hasContent(){return this.getContent().length>0}changeContent(e){return this._checkContent(e),this._config.content={...this._config.content,...e},this}toHtml(){let e=document.createElement("div");for(let[t,i]of(e.innerHTML=this._maybeSanitize(this._config.template),Object.entries(this._config.content)))this._setContent(e,i,t);let s=e.children[0],n=this._resolvePossibleFunction(this._config.extraClass);return n&&s.classList.add(...n.split(" ")),s}_typeCheckConfig(e){super._typeCheckConfig(e),this._checkContent(e.content)}_checkContent(e){for(let[t,i]of Object.entries(e))super._typeCheckConfig({selector:t,entry:i},iC)}_setContent(e,t,i){let s=B.findOne(i,e);s&&((t=this._resolvePossibleFunction(t))?r(t)?this._putElementInTemplate(o(t),s):this._config.html?s.innerHTML=this._maybeSanitize(t):s.textContent=t:s.remove())}_maybeSanitize(e){return this._config.sanitize?function(e,t,i){if(!e.length)return e;if(i&&"function"==typeof i)return i(e);let s=(new window.DOMParser).parseFromString(e,"text/html"),n=[].concat(...s.body.querySelectorAll("*"));for(let r of n){let o=r.nodeName.toLowerCase();if(!Object.keys(t).includes(o)){r.remove();continue}let a=[].concat(...r.attributes),l=[].concat(t["*"]||[],t[o]||[]);for(let c of a)i$(c,l)||r.removeAttribute(c.nodeName)}return s.body.innerHTML}(e,this._config.allowList,this._config.sanitizeFn):e}_resolvePossibleFunction(e){return m(e,[this])}_putElementInTemplate(e,t){if(this._config.html)return t.innerHTML="",void t.append(e);t.textContent=e.textContent}}let ix=new Set(["sanitize","allowList","sanitizeFn"]),ik="fade",iL="show",iO=".modal",iD="hide.bs.modal",iS="hover",iI="focus",iP={AUTO:"auto",TOP:"top",RIGHT:p()?"left":"right",BOTTOM:"bottom",LEFT:p()?"right":"left"},i_={allowList:iv,animation:!0,boundary:"clippingParents",container:!1,customClass:"",delay:0,fallbackPlacements:["top","right","bottom","left"],html:!1,offset:[0,6],placement:"top",popperConfig:null,sanitize:!0,sanitizeFn:null,selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',title:"",trigger:"hover focus"},iN={allowList:"object",animation:"boolean",boundary:"(string|element)",container:"(string|element|boolean)",customClass:"(string|function)",delay:"(number|object)",fallbackPlacements:"array",html:"boolean",offset:"(array|string|function)",placement:"(string|function)",popperConfig:"(null|object|function)",sanitize:"boolean",sanitizeFn:"(null|function)",selector:"(string|boolean)",template:"string",title:"(string|element|function)",trigger:"string"};class iM extends W{constructor(e,t){if(void 0===tO)throw TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");super(e,t),this._isEnabled=!0,this._timeout=0,this._isHovered=null,this._activeTrigger={},this._popper=null,this._templateFactory=null,this._newContent=null,this.tip=null,this._setListeners(),this._config.selector||this._fixTitle()}static get Default(){return i_}static get DefaultType(){return iN}static get NAME(){return"tooltip"}enable(){this._isEnabled=!0}disable(){this._isEnabled=!1}toggleEnabled(){this._isEnabled=!this._isEnabled}toggle(){this._isEnabled&&(this._activeTrigger.click=!this._activeTrigger.click,this._isShown()?this._leave():this._enter())}dispose(){clearTimeout(this._timeout),_.off(this._element.closest(iO),iD,this._hideModalHandler),this._element.getAttribute("data-bs-original-title")&&this._element.setAttribute("title",this._element.getAttribute("data-bs-original-title")),this._disposePopper(),super.dispose()}show(){if("none"===this._element.style.display)throw Error("Please use show on visible elements");if(!this._isWithContent()||!this._isEnabled)return;let e=_.trigger(this._element,this.constructor.eventName("show")),t=(c(this._element)||this._element.ownerDocument.documentElement).contains(this._element);if(e.defaultPrevented||!t)return;this._disposePopper();let i=this._getTipElement();this._element.setAttribute("aria-describedby",i.getAttribute("id"));let{container:s}=this._config;if(this._element.ownerDocument.documentElement.contains(this.tip)||(s.append(i),_.trigger(this._element,this.constructor.eventName("inserted"))),this._popper=this._createPopper(i),i.classList.add(iL),"ontouchstart"in document.documentElement)for(let n of[].concat(...document.body.children))_.on(n,"mouseover",h);this._queueCallback(()=>{_.trigger(this._element,this.constructor.eventName("shown")),!1===this._isHovered&&this._leave(),this._isHovered=!1},this.tip,this._isAnimated())}hide(){if(this._isShown()&&!_.trigger(this._element,this.constructor.eventName("hide")).defaultPrevented){if(this._getTipElement().classList.remove(iL),"ontouchstart"in document.documentElement)for(let e of[].concat(...document.body.children))_.off(e,"mouseover",h);this._activeTrigger.click=!1,this._activeTrigger.focus=!1,this._activeTrigger.hover=!1,this._isHovered=null,this._queueCallback(()=>{this._isWithActiveTrigger()||(this._isHovered||this._disposePopper(),this._element.removeAttribute("aria-describedby"),_.trigger(this._element,this.constructor.eventName("hidden")))},this.tip,this._isAnimated())}}update(){this._popper&&this._popper.update()}_isWithContent(){return Boolean(this._getTitle())}_getTipElement(){return this.tip||(this.tip=this._createTipElement(this._newContent||this._getContentForTemplate())),this.tip}_createTipElement(e){let t=this._getTemplateFactory(e).toHtml();if(!t)return null;t.classList.remove(ik,iL),t.classList.add(`bs-${this.constructor.NAME}-auto`);let i=(e=>{do e+=Math.floor(1e6*Math.random());while(document.getElementById(e));return e})(this.constructor.NAME).toString();return t.setAttribute("id",i),this._isAnimated()&&t.classList.add(ik),t}setContent(e){this._newContent=e,this._isShown()&&(this._disposePopper(),this.show())}_getTemplateFactory(e){return this._templateFactory?this._templateFactory.changeContent(e):this._templateFactory=new iT({...this._config,content:e,extraClass:this._resolvePossibleFunction(this._config.customClass)}),this._templateFactory}_getContentForTemplate(){return{".tooltip-inner":this._getTitle()}}_getTitle(){return this._resolvePossibleFunction(this._config.title)||this._element.getAttribute("data-bs-original-title")}_initializeOnDelegatedTarget(e){return this.constructor.getOrCreateInstance(e.delegateTarget,this._getDelegateConfig())}_isAnimated(){return this._config.animation||this.tip&&this.tip.classList.contains(ik)}_isShown(){return this.tip&&this.tip.classList.contains(iL)}_createPopper(e){let t=m(this._config.placement,[this,e,this._element]),i=iP[t.toUpperCase()];return tL(this._element,e,this._getPopperConfig(i))}_getOffset(){let{offset:e}=this._config;return"string"==typeof e?e.split(",").map(e=>Number.parseInt(e,10)):"function"==typeof e?t=>e(t,this._element):e}_resolvePossibleFunction(e){return m(e,[this._element])}_getPopperConfig(e){let t={placement:e,modifiers:[{name:"flip",options:{fallbackPlacements:this._config.fallbackPlacements}},{name:"offset",options:{offset:this._getOffset()}},{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"arrow",options:{element:`.${this.constructor.NAME}-arrow`}},{name:"preSetPlacement",enabled:!0,phase:"beforeMain",fn:e=>{this._getTipElement().setAttribute("data-popper-placement",e.state.placement)}}]};return{...t,...m(this._config.popperConfig,[t])}}_setListeners(){let e=this._config.trigger.split(" ");for(let t of e)if("click"===t)_.on(this._element,this.constructor.eventName("click"),this._config.selector,e=>{this._initializeOnDelegatedTarget(e).toggle()});else if("manual"!==t){let i=t===iS?this.constructor.eventName("mouseenter"):this.constructor.eventName("focusin"),s=t===iS?this.constructor.eventName("mouseleave"):this.constructor.eventName("focusout");_.on(this._element,i,this._config.selector,e=>{let t=this._initializeOnDelegatedTarget(e);t._activeTrigger["focusin"===e.type?iI:iS]=!0,t._enter()}),_.on(this._element,s,this._config.selector,e=>{let t=this._initializeOnDelegatedTarget(e);t._activeTrigger["focusout"===e.type?iI:iS]=t._element.contains(e.relatedTarget),t._leave()})}this._hideModalHandler=()=>{this._element&&this.hide()},_.on(this._element.closest(iO),iD,this._hideModalHandler)}_fixTitle(){let e=this._element.getAttribute("title");e&&(this._element.getAttribute("aria-label")||this._element.textContent.trim()||this._element.setAttribute("aria-label",e),this._element.setAttribute("data-bs-original-title",e),this._element.removeAttribute("title"))}_enter(){this._isShown()||this._isHovered?this._isHovered=!0:(this._isHovered=!0,this._setTimeout(()=>{this._isHovered&&this.show()},this._config.delay.show))}_leave(){this._isWithActiveTrigger()||(this._isHovered=!1,this._setTimeout(()=>{this._isHovered||this.hide()},this._config.delay.hide))}_setTimeout(e,t){clearTimeout(this._timeout),this._timeout=setTimeout(e,t)}_isWithActiveTrigger(){return Object.values(this._activeTrigger).includes(!0)}_getConfig(e){let t=H.getDataAttributes(this._element);for(let i of Object.keys(t))ix.has(i)&&delete t[i];return e={...t,..."object"==typeof e&&e?e:{}},e=this._mergeConfigObj(e),e=this._configAfterMerge(e),this._typeCheckConfig(e),e}_configAfterMerge(e){return e.container=!1===e.container?document.body:o(e.container),"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),"number"==typeof e.title&&(e.title=e.title.toString()),"number"==typeof e.content&&(e.content=e.content.toString()),e}_getDelegateConfig(){let e={};for(let[t,i]of Object.entries(this._config))this.constructor.Default[t]!==i&&(e[t]=i);return e.selector=!1,e.trigger="manual",e}_disposePopper(){this._popper&&(this._popper.destroy(),this._popper=null),this.tip&&(this.tip.remove(),this.tip=null)}static jQueryInterface(e){return this.each(function(){let t=iM.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e]()}})}}g(iM);let iF={...iM.Default,content:"",offset:[0,8],placement:"right",template:'<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',trigger:"click"},iH={...iM.DefaultType,content:"(null|string|element|function)"};class ij extends iM{static get Default(){return iF}static get DefaultType(){return iH}static get NAME(){return"popover"}_isWithContent(){return this._getTitle()||this._getContent()}_getContentForTemplate(){return{".popover-header":this._getTitle(),".popover-body":this._getContent()}}_getContent(){return this._resolvePossibleFunction(this._config.content)}static jQueryInterface(e){return this.each(function(){let t=ij.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e]()}})}}g(ij);let i9="click.bs.scrollspy",iW="active",iz="[href]",iB={offset:null,rootMargin:"0px 0px -25%",smoothScroll:!1,target:null,threshold:[.1,.5,1]},iq={offset:"(number|null)",rootMargin:"string",smoothScroll:"boolean",target:"element",threshold:"array"};class iR extends W{constructor(e,t){super(e,t),this._targetLinks=new Map,this._observableSections=new Map,this._rootElement="visible"===getComputedStyle(this._element).overflowY?null:this._element,this._activeTarget=null,this._observer=null,this._previousScrollData={visibleEntryTop:0,parentScrollTop:0},this.refresh()}static get Default(){return iB}static get DefaultType(){return iq}static get NAME(){return"scrollspy"}refresh(){for(let e of(this._initializeTargetsAndObservables(),this._maybeEnableSmoothScroll(),this._observer?this._observer.disconnect():this._observer=this._getNewObserver(),this._observableSections.values()))this._observer.observe(e)}dispose(){this._observer.disconnect(),super.dispose()}_configAfterMerge(e){return e.target=o(e.target)||document.body,e.rootMargin=e.offset?`${e.offset}px 0px -30%`:e.rootMargin,"string"==typeof e.threshold&&(e.threshold=e.threshold.split(",").map(e=>Number.parseFloat(e))),e}_maybeEnableSmoothScroll(){this._config.smoothScroll&&(_.off(this._config.target,i9),_.on(this._config.target,i9,iz,e=>{let t=this._observableSections.get(e.target.hash);if(t){e.preventDefault();let i=this._rootElement||window,s=t.offsetTop-this._element.offsetTop;if(i.scrollTo)return void i.scrollTo({top:s,behavior:"smooth"});i.scrollTop=s}}))}_getNewObserver(){let e={root:this._rootElement,threshold:this._config.threshold,rootMargin:this._config.rootMargin};return new IntersectionObserver(e=>this._observerCallback(e),e)}_observerCallback(e){let t=e=>this._targetLinks.get(`#${e.target.id}`),i=e=>{this._previousScrollData.visibleEntryTop=e.target.offsetTop,this._process(t(e))},s=(this._rootElement||document.documentElement).scrollTop,n=s>=this._previousScrollData.parentScrollTop;for(let r of(this._previousScrollData.parentScrollTop=s,e)){if(!r.isIntersecting){this._activeTarget=null,this._clearActiveClass(t(r));continue}let o=r.target.offsetTop>=this._previousScrollData.visibleEntryTop;if(n&&o){if(i(r),!s)return}else n||o||i(r)}}_initializeTargetsAndObservables(){this._targetLinks=new Map,this._observableSections=new Map;let e=B.find(iz,this._config.target);for(let t of e){if(!t.hash||l(t))continue;let i=B.findOne(decodeURI(t.hash),this._element);a(i)&&(this._targetLinks.set(decodeURI(t.hash),t),this._observableSections.set(t.hash,i))}}_process(e){this._activeTarget!==e&&(this._clearActiveClass(this._config.target),this._activeTarget=e,e.classList.add(iW),this._activateParents(e),_.trigger(this._element,"activate.bs.scrollspy",{relatedTarget:e}))}_activateParents(e){if(e.classList.contains("dropdown-item"))B.findOne(".dropdown-toggle",e.closest(".dropdown")).classList.add(iW);else for(let t of B.parents(e,".nav, .list-group"))for(let i of B.prev(t,".nav-link, .nav-item > .nav-link, .list-group-item"))i.classList.add(iW)}_clearActiveClass(e){e.classList.remove(iW);let t=B.find("[href].active",e);for(let i of t)i.classList.remove(iW)}static jQueryInterface(e){return this.each(function(){let t=iR.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e]()}})}}_.on(window,"load.bs.scrollspy.data-api",()=>{for(let e of B.find('[data-bs-spy="scroll"]'))iR.getOrCreateInstance(e)}),g(iR);let iV="ArrowRight",i0="ArrowDown",iK="active",iQ="fade",iX="show",iY='[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',iU=`.nav-link:not(.dropdown-toggle), .list-group-item:not(.dropdown-toggle), [role="tab"]:not(.dropdown-toggle), ${iY}`;class i1 extends W{constructor(e){super(e),this._parent=this._element.closest('.list-group, .nav, [role="tablist"]'),this._parent&&(this._setInitialAttributes(this._parent,this._getChildren()),_.on(this._element,"keydown.bs.tab",e=>this._keydown(e)))}static get NAME(){return"tab"}show(){let e=this._element;if(this._elemIsActive(e))return;let t=this._getActiveElem(),i=t?_.trigger(t,"hide.bs.tab",{relatedTarget:e}):null;_.trigger(e,"show.bs.tab",{relatedTarget:t}).defaultPrevented||i&&i.defaultPrevented||(this._deactivate(t,e),this._activate(e,t))}_activate(e,t){e&&(e.classList.add(iK),this._activate(B.getElementFromSelector(e)),this._queueCallback(()=>{"tab"===e.getAttribute("role")?(e.removeAttribute("tabindex"),e.setAttribute("aria-selected",!0),this._toggleDropDown(e,!0),_.trigger(e,"shown.bs.tab",{relatedTarget:t})):e.classList.add(iX)},e,e.classList.contains(iQ)))}_deactivate(e,t){e&&(e.classList.remove(iK),e.blur(),this._deactivate(B.getElementFromSelector(e)),this._queueCallback(()=>{"tab"===e.getAttribute("role")?(e.setAttribute("aria-selected",!1),e.setAttribute("tabindex","-1"),this._toggleDropDown(e,!1),_.trigger(e,"hidden.bs.tab",{relatedTarget:t})):e.classList.remove(iX)},e,e.classList.contains(iQ)))}_keydown(e){if(!["ArrowLeft",iV,"ArrowUp",i0].includes(e.key))return;e.stopPropagation(),e.preventDefault();let t=[iV,i0].includes(e.key),i=v(this._getChildren().filter(e=>!l(e)),e.target,t,!0);i&&(i.focus({preventScroll:!0}),i1.getOrCreateInstance(i).show())}_getChildren(){return B.find(iU,this._parent)}_getActiveElem(){return this._getChildren().find(e=>this._elemIsActive(e))||null}_setInitialAttributes(e,t){for(let i of(this._setAttributeIfNotExists(e,"role","tablist"),t))this._setInitialAttributesOnChild(i)}_setInitialAttributesOnChild(e){e=this._getInnerElement(e);let t=this._elemIsActive(e),i=this._getOuterElement(e);e.setAttribute("aria-selected",t),i!==e&&this._setAttributeIfNotExists(i,"role","presentation"),t||e.setAttribute("tabindex","-1"),this._setAttributeIfNotExists(e,"role","tab"),this._setInitialAttributesOnTargetPanel(e)}_setInitialAttributesOnTargetPanel(e){let t=B.getElementFromSelector(e);t&&(this._setAttributeIfNotExists(t,"role","tabpanel"),e.id&&this._setAttributeIfNotExists(t,"aria-labelledby",`${e.id}`))}_toggleDropDown(e,t){let i=this._getOuterElement(e);if(!i.classList.contains("dropdown"))return;let s=(e,s)=>{let n=B.findOne(e,i);n&&n.classList.toggle(s,t)};s(".dropdown-toggle",iK),s(".dropdown-menu",iX),i.setAttribute("aria-expanded",t)}_setAttributeIfNotExists(e,t,i){e.hasAttribute(t)||e.setAttribute(t,i)}_elemIsActive(e){return e.classList.contains(iK)}_getInnerElement(e){return e.matches(iU)?e:B.findOne(iU,e)}_getOuterElement(e){return e.closest(".nav-item, .list-group-item")||e}static jQueryInterface(e){return this.each(function(){let t=i1.getOrCreateInstance(this);if("string"==typeof e){if(void 0===t[e]||e.startsWith("_")||"constructor"===e)throw TypeError(`No method named "${e}"`);t[e]()}})}}_.on(document,"click.bs.tab",iY,function(e){["A","AREA"].includes(this.tagName)&&e.preventDefault(),l(this)||i1.getOrCreateInstance(this).show()}),_.on(window,"load.bs.tab",()=>{for(let e of B.find('.active[data-bs-toggle="tab"], .active[data-bs-toggle="pill"], .active[data-bs-toggle="list"]'))i1.getOrCreateInstance(e)}),g(i1);let i3="hide",i4="show",iG="showing",i2={animation:"boolean",autohide:"boolean",delay:"number"},iZ={animation:!0,autohide:!0,delay:5e3};class i6 extends W{constructor(e,t){super(e,t),this._timeout=null,this._hasMouseInteraction=!1,this._hasKeyboardInteraction=!1,this._setListeners()}static get Default(){return iZ}static get DefaultType(){return i2}static get NAME(){return"toast"}show(){_.trigger(this._element,"show.bs.toast").defaultPrevented||(this._clearTimeout(),this._config.animation&&this._element.classList.add("fade"),this._element.classList.remove(i3),d(this._element),this._element.classList.add(i4,iG),this._queueCallback(()=>{this._element.classList.remove(iG),_.trigger(this._element,"shown.bs.toast"),this._maybeScheduleHide()},this._element,this._config.animation))}hide(){this.isShown()&&(_.trigger(this._element,"hide.bs.toast").defaultPrevented||(this._element.classList.add(iG),this._queueCallback(()=>{this._element.classList.add(i3),this._element.classList.remove(iG,i4),_.trigger(this._element,"hidden.bs.toast")},this._element,this._config.animation)))}dispose(){this._clearTimeout(),this.isShown()&&this._element.classList.remove(i4),super.dispose()}isShown(){return this._element.classList.contains(i4)}_maybeScheduleHide(){this._config.autohide&&(this._hasMouseInteraction||this._hasKeyboardInteraction||(this._timeout=setTimeout(()=>{this.hide()},this._config.delay)))}_onInteraction(e,t){switch(e.type){case"mouseover":case"mouseout":this._hasMouseInteraction=t;break;case"focusin":case"focusout":this._hasKeyboardInteraction=t}if(t)return void this._clearTimeout();let i=e.relatedTarget;this._element===i||this._element.contains(i)||this._maybeScheduleHide()}_setListeners(){_.on(this._element,"mouseover.bs.toast",e=>this._onInteraction(e,!0)),_.on(this._element,"mouseout.bs.toast",e=>this._onInteraction(e,!1)),_.on(this._element,"focusin.bs.toast",e=>this._onInteraction(e,!0)),_.on(this._element,"focusout.bs.toast",e=>this._onInteraction(e,!1))}_clearTimeout(){clearTimeout(this._timeout),this._timeout=null}static jQueryInterface(e){return this.each(function(){let t=i6.getOrCreateInstance(this,e);if("string"==typeof e){if(void 0===t[e])throw TypeError(`No method named "${e}"`);t[e](this)}})}}return q(i6),g(i6),{Alert:R,Button:K,Carousel:eo,Collapse:ef,Dropdown:tV,Modal:il,Offcanvas:ib,Popover:ij,ScrollSpy:iR,Tab:i1,Toast:i6,Tooltip:iM}});</script>



</body>
</html>
