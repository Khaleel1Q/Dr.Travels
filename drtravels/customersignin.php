<?php
session_start();
$errors=array();
$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");

$ph_no="";
if(isset($_POST['Login'])){

          $ph_no=mysqli_real_escape_string($db, $_POST['ph_no']);
          $password=mysqli_real_escape_string($db, $_POST['password_1']);
    
    if(empty($ph_no))
    {    array_push($errors,"ph_no is required");}
      if(empty($password))
    {    array_push($errors,"password is required");}
    
    if(count($errors)==0){
       
        
        $query="select * from login where ph_no='$ph_no' and password='$password' and type_of_user='customer' ";
          
          $results=mysqli_query($db,$query);
              
          if(mysqli_num_rows($results)) {
              $_SESSION['ph_no']=$ph_no;
              $_SESSION['success']="logged in successfully";
              header('location: customer.html');
          } 
        else{
               header("location:wrong.html");
        }      
              
          }
        
        
        
    }
?>
        