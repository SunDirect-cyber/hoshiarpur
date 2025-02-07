<?php
// proxy.php

// Get the target URL from the query string (e.g., ?url=https://example.com)
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Validate the URL
if (filter_var($url, FILTER_VALIDATE_URL)) {
    // Initialize a cURL session
    $ch = curl_init();

    // Set the URL and other options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
    curl_setopt($ch, CURLOPT_HEADER, false);        // Do not include headers in the output
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Skip SSL verification (if necessary)

    // Execute the request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo "cURL error: " . curl_error($ch);
    } else {
        // Load the response into a DOMDocument object for manipulation
        $dom = new DOMDocument();
        // Suppress errors due to invalid HTML (common with third-party sites)
        libxml_use_internal_errors(true);
        $dom->loadHTML($response);
        libxml_clear_errors();

        // Modify the content
        // Example 1: Change the <title> of the page
        $title = $dom->getElementsByTagName('title')->item(0);
        if ($title) {
            $title->nodeValue = 'Custom Title for Embedded Page';
        }

        // Example 2: Add a custom footer
        $body = $dom->getElementsByTagName('body')->item(0);
        if ($body) {
           
        }

   // Example 3: Inject custom JavaScript (e.g., to manipulate elements on the page)
        $script = $dom->createElement('script');
        $body->appendChild($script);

        // Output the modified HTML
        echo $dom->saveHTML(     );
    }

    // Close the cURL session
    curl_close($ch);
} else {
    echo "Invalid URL provided.";
}
?>
