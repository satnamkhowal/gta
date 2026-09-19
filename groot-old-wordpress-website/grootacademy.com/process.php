<?php

$curl = curl_init();

$name = $_REQUEST['name'];
$displayName = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
// echo $phone;
// die();

$message = $_REQUEST['message'];
$incomefrom = $_SERVER['HTTP_REFERER'];
if ($reqPage == 'our-internship-programmes') {
    $courseName = "For inernship program";
} else {
    $courseName = $_REQUEST['courseName'];
}

$message = $_REQUEST['message'];
$postData = json_encode(array(
    "name" => $name,
    "email" => $email,
    "phone" => $phone,
    "display_name" => $displayName,
    "other_fields" => array(
        "message" => $address,
        "income" => $incomefrom,
        "course_name"=>$courseName
    )
));


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.privyr.com/api/v1/incoming-leads/0vZfjMQw/MLG24tID#generic-webhook',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$postData,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
header('Location:' . $_SERVER['HTTP_REFERER']);


?>