<?php
session_start();

$ph_no="";


$errors=array();

$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");

if(isset($_POST['Reset'])){
$ph_no = mysqli_real_escape_string($db,$_POST['ph_no']);
$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

if(empty($ph_no))array_push($errors,"ph_no is required");
if(empty($password_1))array_push($errors,"password is required");
if($password_1!=$password_2){array_push($errors,"passwords should match");
                             header("location:match.html");}
    
if(count($errors)==0)
{
    $query="select * from login where ph_no='$ph_no' ";
          
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