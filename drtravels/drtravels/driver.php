<?php
$driver_id = $_POST['driver_id'];
$driver_name = $_POST['driver_name'];
$address = $_POST['address'];
$ph_no = $_POST['ph_no'];
$age = $_POST['age'];
//Database connection
$conn = new mysqli('localhost','root','','drtravels');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into driver(driver_id, driver_name, address, ph_no,age)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("issii",$driver_id, $driver_name, $address, $ph_no,$age);
        $stmt->execute();
        echo "Successfully Inserted...";
        $stmt->close();
        $conn->close();
         header("Location:drives_for1.html");
    }
?>