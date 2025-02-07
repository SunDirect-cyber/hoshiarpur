<html>
<head>


<!-- Include Video.js CSS and JS -->
<link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
<script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>

<!-- Include the Video.js Audio Track Plugin -->
<script src="https://cdn.jsdelivr.net/npm/videojs-audio-track/dist/videojs.audio-track.js"></script>
</head>
<body>
<!-- Video Player Container -->
<div class="video-container">
    <video id="moviePlayer" class="video-js vjs-default-skin" controls preload="auto" width="800" height="450">
        <source src="https://pub-d6659b7cc7f74310abb9b6ef1aebd3b3.r2.dev/Borderlands.2024.480p.WEB-DL.HIN-ENG.x264.ESub.Vegamovies.is.mkv" type="video/webm" />
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>
</div>

<!-- Initialize Video.js with Audio Track Plugin -->
<script>
    var player = videojs('moviePlayer', {
        controls: true,
        plugins: {
            audioTrack: true // Enable the audio track plugin
        }
    });

    player.ready(function() {
        // Get audio tracks and listen for track changes
        var audioTracks = player.audioTracks();

        audioTracks.on('change', function() {
            var selectedTrack = audioTracks.selectedIndex;
            console.log('Selected audio track:', selectedTrack);
        });

        // Log available audio tracks
        console.log('Audio tracks available:', audioTracks);
    });
</script>

<style>
    .video-container {
        max-width: 800px;
        margin: 0 auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
    }
</style>
</body>
</html>
