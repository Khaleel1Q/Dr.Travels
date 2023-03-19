<?php
$id = $_POST['id'];
$password = $_POST['password'];
$email_id = $_POST['email_id'];
$type_of_user = $_POST['type_of_user'];
$mobile_no = $_POST['mobile_no'];
//Database connection
$conn = new mysqli('localhost','root','','drughouse');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into Register(id, password, email_id, type_of_user, mobile_no)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("isssi",$id, $password, $email_id, $type_of_user, $mobile_no);
        $stmt->execute();
        echo "register Successfully...";
        $stmt->close();
        $conn->close();
    }


   
   
?>

