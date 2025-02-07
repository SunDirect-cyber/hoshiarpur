<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="g.ico" type="image/x-icon">
     <link rel="icon" href="g.ico" type="image/x-icon">
    <title>Coming Soon</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* Custom animations for text and icons */
        .animate-bounce-slow {
            animation: bounce 2s infinite;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .fade-in {
            animation: fadeIn 3s ease-in-out;
        }

        /* Full-screen background video styling */
        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover;
        }

        /* Background overlay to ensure text visibility */
        .bg-overlay {
            background: rgba(0, 0, 0, 0.4); /* Semi-transparent black overlay */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="relative h-screen flex items-center justify-center font-poppins">

    <!-- Background video -->
    <video id="bg-video" autoplay muted loop>
        <source src="https://videos.pexels.com/video-files/8964796/8964796-uhd_2560_1440_25fps.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay to darken the video slightly -->
    <div class="bg-overlay"></div>

    <!-- Content Section -->
    <div class="text-center fade-in relative z-10">
        <!-- Icon with bounce effect -->
        <i class="fas fa-tools text-6xl mb-4 animate-bounce-slow text-yellow-300"></i>

        <!-- Title -->
        <h1 class="text-5xl font-bold mb-2 text-white">Coming Soon!</h1>

        <!-- Message -->
        <p class="text-lg mb-6 text-white">We're working hard to bring something amazing. Stay tuned!</p>

        <!-- Back button -->
        <button onclick="history.back()" class="mt-4 px-6 py-3 bg-blue-600 text-white font-semibold text-lg rounded-lg hover:bg-blue-800 transition duration-300 ease-in-out">
            Go Back
        </button>
    </div>

</body>
</html>
