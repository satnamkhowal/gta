<?php
    //define('SITE_URL_FOR_LOCALHOST', '/dmart-skills-education/');
   // define('SERVER_URL', 'https://grootacademy.com/');
    /*
            url for local host
    */
//     define('FINAL_WEBSITE_URL',SITE_URL_FOR_LOCALHOST);
     /*
            url for server host
    */
    // define('FINAL_WEBSITE_URL',SERVER_URL);
?>


<?php
// Determine the scheme (http or https)
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Get the host name
$host = $_SERVER['HTTP_HOST'];

// Get the directory name
// $directory = dirname($_SERVER['PHP_SELF']);
<<<<<<< HEAD
// if (strpos($string, "localhost") != false) {
    $directory = "/groot-new";
=======
// if (strpos($host, "localhost") != false) {
    // $directory = "/groot-new";
>>>>>>> 7e239e8db6fa2f910749ac87ed7f0ee0f03a6378

// }

// Combine to get the root URL
$root_url = $scheme . $host . $directory;

// Ensure the URL ends with a trailing slash
if (substr($root_url, -1) !== '/') {
    $root_url .= '/';
}

// Display the root URL
// echo "Root URL: " . $root_url;
define('FINAL_WEBSITE_URL',$root_url);
?>
