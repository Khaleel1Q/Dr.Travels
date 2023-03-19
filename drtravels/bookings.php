<?php


$route_id = $_POST['route_id'];
$customer_id = $_POST['customer_id'];
$ticket_no = $_POST['ticket_no'];
$date_of_journey = $_POST['date_of_journey'];
$no_of_tickets = $_POST['no_of_tickets'];
$total = $_POST['total'];



//Database connection
$conn = new mysqli('localhost','root','','drtravels');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into bookings( route_id,customer_id, ticket_no , date_of_journey, no_of_tickets,total)
        values(?, ?,?,?,?,?)");
        $stmt->bind_param ("iiisii",$route_id,$customer_id,$ticket_no,$date_of_journey , $no_of_tickets ,$total );
        $stmt->execute();
        echo "Successfully Inserted...";
        $stmt->close();
        $conn->close();
         header("Location:customer.html");
    }
?>







