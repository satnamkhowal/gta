<?php
// Determine the protocol (http or https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

// Get the host
$host = $_SERVER['HTTP_HOST'];

// Get the path to the root directory
$root_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));

// Combine to get the root URL
$root_url = $protocol . $host . $root_path;
echo '' . $root_path . '<br>';
echo '' . $host . '<br>';

// Ensure the URL ends with a trailing slash
if (substr($root_url, -1) !== '/') {
    $root_url .= '/';
}

// Display the root URL
echo "Root URL: " . $root_url;
?>