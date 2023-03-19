<?php
$route_id = $_POST['route_id'];
$stop_no = $_POST['stop_no'];
$stop_name = $_POST['stop_name'];
$distance = $_POST['distance'];
//Database connection
$conn = new mysqli('localhost','root','','drtravels');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into stops(route_id, stop_no,  stop_name, distance)
        values(?, ?, ?, ?)");
        $stmt->bind_param("iisi",$route_id, $stop_no, $stop_name , $distance);
        $stmt->execute();
        echo "Successfully Inserted...";
        $stmt->close();
        $conn->close();
        
    }
    
?>