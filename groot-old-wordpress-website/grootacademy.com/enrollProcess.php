
 <?php
include('./includes2/connection.php');

$email=$_REQUEST['email'];
$graduation=$_REQUEST['graduation'];
$mobile=$_REQUEST['mobile'];

    
$sql="INSERT INTO `enroll`(`year`, `email`, `mobile`) VALUES ('$graduation','$email','$mobile')";

if($conn->query($sql)===TRUE){
    
    header('Location: ./index');
}else{
    echo "record could not inserted";
}

?>
