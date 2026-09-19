<?php
include('./includes2/connection.php');
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $courseName=$_REQUEST['courseName'];
        $message=$_REQUEST['message'];
        $sql="INSERT INTO `contact_form`(`name`, `mail`, `course_name`, `phone_number`, `message`) VALUES ('$name','$email','$courseName','$phone','$message')";
        if($conn->query($sql)===TRUE){
            header('Location: ./index');
        }else{
            echo "record could not inserted";
        
        }

?>
