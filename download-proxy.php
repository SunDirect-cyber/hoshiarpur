<?php
session_start();

if (!isset($_GET['token'])) {
    http_response_code(403);
    exit('Access denied: Missing token.');
}

$token = $_GET['token'];

if (!isset($_SESSION['download_tokens'][$token])) {
    http_response_code(403);
    exit('Access denied: Invalid or expired token.');
}

$fileInfo = $_SESSION['download_tokens'][$token];
$url = $fileInfo['url'];
unset($_SESSION['download_tokens'][$token]); // Token is single-use

$headers = @get_headers($url, 1);
if (!$headers || !isset($headers['Content-Length'])) {
    http_response_code(404);
    exit('File not found or inaccessible.');
}

$filesize = $headers['Content-Length'];
$filename = basename($url);

// Handle Range requests
if (isset($_SERVER['HTTP_RANGE'])) {
    list(, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);
    list($start, $end) = explode('-', $range);

    $start = intval($start);
    $end = $end === '' ? $filesize - 1 : intval($end);

    header('HTTP/1.1 206 Partial Content');
    header("Content-Range: bytes $start-$end/$filesize");
    header('Content-Length: ' . ($end - $start + 1));
} else {
    $start = 0;
    $end = $filesize - 1;

    header('Content-Length: ' . $filesize);
}

header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Accept-Ranges: bytes');

// Stream file to client
$fp = fopen($url, 'rb');
if (!$fp) {
    http_response_code(500);
    exit('Failed to open file stream.');
}
fseek($fp, $start);
while (!feof($fp) && $start <= $end) {
    $buffer = fread($fp, 8192); // 8 KB chunks
    echo $buffer;
    flush();
    $start += strlen($buffer);
}
fclose($fp);
?>
