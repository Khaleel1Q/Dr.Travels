<?php

$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");

$customer_id="";
$customer_id=mysqli_real_escape_string($db, $_POST['customer_id']);

$sql="call bookingdetails('$customer_id')";

$records=mysqli_query($db,$sql);


?>
<html>
     <link href='table.css' rel='stylesheet' >

<head>
    <title>DR.TRAVELS Booking Details</title>
    </head>
  <h1>  <p><b>       DR.TRAVELS BOOKING DETAILS</b></p>
      <a><img src=logo.png></a></h1>
<body>
    <table wiidth="2000" border="10" cellpadding="5" cellspacing="5">
   
    <tr>
        <th> Route ID</th>
        <th>Customer ID</th>
        <th>Ticket Number</th>
        <th>Date OF Booking</th>
        <th>Date OF Journey</th>
        <th>Number OF Tickets</th>
        <th>Total</th>
        <tr>
    
    <?php 
       while($logs=mysqli_fetch_assoc($records)){
           
          echo"<tr>"; 
           
           
           
         echo"<td>".$logs['route_id']."</td>";
         echo"<td>".$logs['customer_id']."</td>";
         echo"<td>".$logs['ticket_no']."</td>";
         echo"<td>".$logs['date_of_booking']."</td>";
         echo"<td>".$logs['date_of_journey']."</td>";
         echo"<td>".$logs['no_of_tickets']."</td>";
         echo"<td>".$logs['total']."</td>";
             
             
             
            
         echo"<tr>";    
       }
        
        ?>
    
        <h2><p> Go Back <a href=customer.html ><b>Back</b></a> </p></h2>
    
    </table>
   
     
 
 
       
    </body>

   

</html>