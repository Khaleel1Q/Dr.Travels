<?php
session_start();

$ph_no="";


$errors=array();

$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");

if(isset($_POST['Reset'])){
$route_id = mysqli_real_escape_string($db,$_POST['route_id']);
$customer_id= mysqli_real_escape_string($db,$_POST['customer_id']);
 $ticket_no= mysqli_real_escape_string($db,$_POST['ticket_no']);
 $date_of_journey= mysqli_real_escape_string($db,$_POST['date_of_journey']);
 $no_of_tickets= mysqli_real_escape_string($db,$_POST['no_of_tickets']);
 $total= mysqli_real_escape_string($db,$_POST['total']);


if(empty($route_id))array_push($errors,"route_id  is required");
if(empty($customer_id))array_push($errors,"customer_id  is required");
if(empty($ticket_no))array_push($errors,"ticket_no  is required");
if(empty($date_of_journey))array_push($errors,"date_of_journey  is required");
if(empty($no_of_tickets))array_push($errors,"no_of_tickets  is required");
if(empty($total))array_push($errors,"total  is required");

if(count($errors)==0)
{
    $query="insert into bookings (route_id,customer_id,ticket_no,date_of_journey,no_of_tickets,total)
    values ('$route_id','$customer_id','$ticket_no','$date_of_journey','$no_of_tickets','$total')";
          
          $results=mysqli_query($db,$query);
              
          if(mysqli_num_rows($results)) {
    $query1="update login set password='$password_1' where ph_no='$ph_no'";
    mysqli_query($db,$query1);
    
    
    $_SESSION['ph_no']=$ph_no;
    $_SESSION['success']="password successfully changed ";
    header("location:home.html");
}
    else  { header("location:notexist.html");}   
}
}
    
?>