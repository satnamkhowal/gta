<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo "The URL of current page: " . $CurPageURL . "<br/>";
echo $_SERVER['HTTP_REFERER'];

print_r($_REQUEST);
include('./includes2/connection.php');
$reqPage = $_SERVER['HTTP_REFERER'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
if ($reqPage == 'our-internship-programmes') {
    $courseName = "For inernship program";
} else {
    $courseName = $_REQUEST['courseName'];
}

$message = $_REQUEST['message'];
$sql = "INSERT INTO `groot_academy_contact_form`(`name`, `email`, `phone`, `courseName`, `message`, `pageName`) VALUES ('$name','$email','$phone','$courseName','$message','$reqPage')";

// $sql = "INSERT INTO `groot_academy_contact_form`(`name`, `email`, `phone`, `courseName`, `message`, `pageName`) VALUES ('$name','$email','$phone','$courseName','$message','$reqPage')";
echo $sql . "<br/>";
if ($conn->query($sql) === TRUE) {
    // header($_SERVER['HTTP_REFERER']);
    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    echo "record could not inserted";
}


// $servername = "31.220.110.201:3306";
// $username = "u232016825_swiggywala";
// $password = "HareRam@987";
// $my_db = 'u232016825_leads';

// $reqPage = $_SERVER['HTTP_REFERER'];
// $name = $_REQUEST['name'];
// $email = $_REQUEST['email'];
// $phone = $_REQUEST['phone'];



// session_start();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Get the submitted data
//     $name = $_POST['name'];
//     $mobile = $_POST['mobile'];

//     // Database configuration
//     $servername = "localhost"; // Replace with your MySQL server hostname
//     $username = "your_username"; // Replace with your MySQL username
//     $password = "your_password"; // Replace with your MySQL password
//     $dbname = "your_database"; // Replace with your MySQL database name

//     // Create a database connection
//     $conn = new mysqli($servername, $username, $password, $my_db);

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Prepare and execute the SQL INSERT query
//     $sql = "INSERT INTO popup_table (name, mobile) VALUES (?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("ss", $name, $mobile);

//     if ($stmt->execute()) {
//         echo "Data submitted successfully.";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close the database connection
//     $stmt->close();
//     $conn->close();

//     // Close the popup after submission
//     $_SESSION['popup_displayed'] = true;
// }
