<?php
$route_id = $_POST['route_id'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$distance = $_POST['distance'];
//Database connection
$conn = new mysqli('localhost','root','','drtravels');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into route(route_id, source,  destination, distance)
        values(?, ?, ?, ?)");
        $stmt->bind_param("issi",$route_id, $source, $destination , $distance);
        $stmt->execute();
        echo "Successfully Inserted...";
        $stmt->close();
        $conn->close();
        header("Location:stops.html");
    }
?>