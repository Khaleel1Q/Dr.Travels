 ;'<?php
$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");


$sql="select * from route";

$records=mysqli_query($db,$sql);


?>
<html>
     <link href='table.css' rel='stylesheet' >

<head>
    <title>DR.TRAVELS Routes Details</title>
    </head>
  <h1>  <p><b>       DR.TRAVELS ROUTES DETAILS</b></p>
      <a><img src=logo.png></a></h1>
<body>
    <table wiidth="2000" border="10" cellpadding="5" cellspacing="5">
   
    <tr>
        <th>Route Id</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Distance</th>
      
        <tr>
    
    <?php 
       while($routes=mysqli_fetch_assoc($records)){
           
          echo"<tr>"; 
           
           
           
         echo"<td>".$routes['route_id']."</td>";
         echo"<td>".$routes['source']."</td>";
         echo"<td>".$routes['destination']."</td>";
         echo"<td>".$routes['distance']."</td>";
        
           echo"<tr>";    
       }
        
        ?>
    
        <h2><p> Go Back <a href=customer.html ><b>Back</b></a> </p></h2>
        <h3><p>Check Stops For Routes <a href=stops1.php ><b>Check Stops</b></a> </p></h3>
    
    </table>
 
     
 
 
       
    </body>

   

</html>