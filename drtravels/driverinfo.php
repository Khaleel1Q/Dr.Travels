<?php
session_start();
$driver_id="";



$errors=array();

$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");

if(isset($_POST['Submit'])){
    $driver_id = mysqli_real_escape_string($db,$_POST['driver_id']);
    $driver_name = mysqli_real_escape_string($db,$_POST['driver_name']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $ph_no = mysqli_real_escape_string($db,$_POST['ph_no']);
     $age = mysqli_real_escape_string($db,$_POST['age']);

if(empty($driver_id))array_push($errors,"driver_id is required");                      
if(empty($driver_name))array_push($errors,"driver_name is required");
if(empty($address))array_push($errors,"address is required");
if(empty($ph_no))array_push($errors,"ph_no is required");
if(empty($age))array_push($errors,"age is required");
    
$driver_check_query="select * from driver where driver_id='$driver_id'  LIMIT 1";
$results=mysqli_query($db,$driver_check_query);
$driver=mysqli_fetch_assoc($results);

if($driver)
       if($driver['driver_id']==$driver_id){array_push($errors,"driver_id already exists");
                                            header("location:already2.html");}

 


if(count($errors)==0)
{
   
    $query="insert into driver (driver_id,driver_name,address,ph_no,age) values ('$driver_id','$driver_name','$address',$ph_no','$age')";
    mysqli_query($db,$query);
    
    $_SESSION['driver_id']=$driver_id;
    $_SESSION['success']="successfully inserted details";
    header("location:drives_for1.html");
}
}



?>