<?php
$ticket_no = $_POST['ticket_no'];
$route_id = $_POST['route_id'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$cost = $_POST['cost'];
$tax = $_POST['tax'];
$total=$_POST['total'];
//Database connection
$conn = new mysqli('localhost','root','','drtravels');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into tickets(ticket_no, route_id, source , destination ,cost,  tax , total  )
        values(?, ?, ?,?,?,?)");
        $cost=c;
        $stmt->bind_param("iiiiii",$ticket_no, $route_id, $source ,$destination, $tax , $total);
        $stmt->execute();
        echo "Successfully Inserted...";
        $stmt->close();
        $conn->close();
    }
?>