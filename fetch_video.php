<?php
// Securely return the decoded and sanitized video URL
$decrypted_url = htmlspecialchars(base64_decode($_GET['video_url'] ?? ''));
echo $decrypted_url;
?>
