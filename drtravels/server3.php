<?php
session_start();

$ph_no="";


$errors=array();

$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");

if(isset($_POST['Signup'])){
$ph_no = mysqli_real_escape_string($db,$_POST['ph_no']);
$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
$type_of_user = mysqli_real_escape_string($db,$_POST['type_of_user']);

if(empty($ph_no))array_push($errors,"ph_no is required");
if(empty($password_1))array_push($errors,"password is required");
                       
if($password_1!=$password_2){array_push($errors,"passwords should match");
                       header("location:match.html");}
if(empty($type_of_user))array_push($errors,"type_of_user is required");
    
$login_check_query="select * from login where ph_no='$ph_no' LIMIT 1`";
$results=mysqli_query($db,$login_check_query);
$login=mysqli_fetch_assoc($results);

if($login){
    if($login['ph_no']==$ph_no){array_push($errors,"ph_no already exists");
                               header("location:already.html");}
}


if(count($errors)==0)
{
   
    $query="insert into login  (ph_no,password,type_of_user) values ('$ph_no','$password_1','$type_of_user')";
    mysqli_query($db,$query);
    
    if($type_of_user=='driver'){
    $_SESSION['ph_no']=$ph_no;
    $_SESSION['success']="successfully logged in";
    header("location:driverinfo.html");
}
    elseif($type_of_user=='customer')
    {
    $_SESSION['ph_no']=$ph_no;
    $_SESSION['success']="successfully logged in";
    header("location:customerinfo.html");
     }
    else{
        echo("Not A Valid User Type"); }
}
}

?>