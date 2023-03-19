<?php
session_start();
$customer_id="";



$errors=array();

$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");

if(isset($_POST['Submit'])){
    $customer_id = mysqli_real_escape_string($db,$_POST['customer_id']);
    $customer_name = mysqli_real_escape_string($db,$_POST['customer_name']);
    $date_of_birth = mysqli_real_escape_string($db,$_POST['date_of_birth']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $ph_no = mysqli_real_escape_string($db,$_POST['ph_no']);


if(empty($customer_id))array_push($errors,"customer_id is required");                      
if(empty($customer_name))array_push($errors,"customer_name is required");
if(empty($date_of_birth))array_push($errors,"date_of_birth is required");
if(empty($address))array_push($errors,"address is required");
if(empty($ph_no))array_push($errors,"ph_no is required");

    
$customer_check_query="select * from customer where customer_id='$customer_id'  LIMIT 1";
$results=mysqli_query($db,$customer_check_query);
$customer=mysqli_fetch_assoc($results);

if($customer)
       if($customer['customer_id']==$customer_id){array_push($errors,"customer_id already exists");
                               header("location:already1.html");}

 


if(count($errors)==0)
{
   
    $query="insert into customer (customer_id,customer_name,date_of_birth,address,ph_no) values ('$customer_id','$customer_name','$date_of_birth','$address',$ph_no')";
    mysqli_query($db,$query);
    
    $_SESSION['customer_id']=$customer_id;
    $_SESSION['success']="successfully inserted details";
    header("location:customer.html");
}
}



?>