<?php
$driver_id = $_POST['driver_id'];
$route_id = $_POST['route_id'];
$date = $_POST['date'];
//Database connection
$conn = new mysqli('localhost','root','','drtravels');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into drives_for(driver_id, route_id, date )
        values(?, ?, ?)");
        $stmt->bind_param("iis",$driver_id, $route_id, $date);
        $stmt->execute();
        echo "Successfully Inserted...";
        $stmt->close();
        $conn->close();
    }
?>