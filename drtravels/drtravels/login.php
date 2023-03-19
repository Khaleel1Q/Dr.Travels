<?php
$ph_no = filter_input(INPUT_POST,'ph_no');
$password = filter_input(INPUT_POST,'password');
$type_of_user = filter_input(INPUT_POST,'type_of_user');
$time= time();
if(!empty($ph_no)){
   if(!empty($password)){
   $host = "localhost";
         $dbusername = "root";
          $dbpassword = "";
          $dbname = "drtravels";
       
       
 //Database connection

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
         if(mysqli_connect_error()){
             die('Connect Error('.mysqli_connect_error().')'
                 .mysqli_connect_error());
         }
     else{
         
             $sql = "INSERT INTO Login (ph_no, password, type_of_user) values ('$ph_no','$password','$type_of_user')";
             if($conn->query($sql)){
                 echo "new record is inserted successfully";
             }
             else{
                 echo "Error:". $sql ."<br>". $conn->error;
                 
             }
             $conn->close();
           
          header("Location:main.html");
     
     }

   }  
   

         
    else{
        echo "password field should not be empty";
        die();
    }

   
}
   else{
    echo "ph_no field should not be empty";
    die();
   }


       
       
