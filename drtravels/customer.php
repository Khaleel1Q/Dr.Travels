<?php
$customer_id = $_POST['customer_id'];
$customer_name = $_POST['customer_name'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$ph_no = $_POST['ph_no'];
//Database connection
$conn = new mysqli('localhost','root','','drtravels');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into Customer(customer_id, customer_name, date_of_birth, address, ph_no)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("isssi",$customer_id, $customer_name, $date_of_birth, $address, $ph_no);
        $stmt->execute();
        echo "Successfully Inserted...";
        header("location:customer.html");
        $stmt->close();
        $conn->close();
    }
?>