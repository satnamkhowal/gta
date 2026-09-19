<?php
$servername = "localhost";
$username = "satnamkhowal"; // change this if necessary
$password = "NewHareRam@987"; // change this if necessary
$dbname = "u232016825_mygroot";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
