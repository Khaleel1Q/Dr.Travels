<?php

$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");
$route_id = mysqli_real_escape_string($db,$_POST['route_id']);

$sql="select * from stops where route_id='$route_id'";

$records=mysqli_query($db,$sql);


?>
<html>
     <link href='table.css' rel='stylesheet' >

<head>
    <title>DR.TRAVELS Stops Details</title>
    </head>
  <h1>  <p><b>       DR.TRAVELS ROUTES DETAILS</b></p>
      <a><img src=logo.png></a></h1>
<body>
    <table wiidth="2000" border="10" cellpadding="5" cellspacing="5">
   
    <tr>
        <th>Route Id</th>
        <th>Stop Number</th>
        <th>Stop Name</th>
        <th>Distance From source</th>
      
        <tr>
    
    <?php 
       while($routes=mysqli_fetch_assoc($records)){
           
          echo"<tr>"; 
           
           
           
         echo"<td>".$routes['route_id']."</td>";
         echo"<td>".$routes['stop_no']."</td>";
         echo"<td>".$routes['stop_name']."</td>";
         echo"<td>".$routes['distance']."</td>";
        
           echo"<tr>";    
       }
        
        ?>
    
        <h2><p> home <a href=customer.html ><b>home</b></a> </p></h2>
        <h3><p>Go Back To Routes<a href=routes1.php ><b>Routes</b></a> </p></h3>
    
    </table>
 
     
 
 
       
    </body>

   

</html>