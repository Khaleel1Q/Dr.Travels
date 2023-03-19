<?php
$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");


$sql="select b.ticket_no,b.customer_id,b.route_id,s.stop_name,d.stop_name,t.total,b.no_of_tickets,b.total from bookings b,tickets t,stops s,stops d,routes r where b.ticket_no=t.ticket_no and b.customer_id=c.customer_id and b.route_id=t.route_id and t.(route_id,source)=s.(route_id,stop_no) and t.(route_id,destination)=s.(route_id,stop_no) and ticket_no='$ticket_no'";

$records=mysqli_query($db,$sql);


?>
<html>
     <link href='table.css' rel='stylesheet' >

<head>
    <title>DR.TRAVELS Resgistration Details</title>
    </head>
  <h1>  <p><b>       DR.TRAVELS REGISTRATION DETAILS</b></p>
      <a><img src=logo.png></a></h1>
<body>
    <table wiidth="2000" border="10" cellpadding="5" cellspacing="5">
   
    <tr>
        <th>Ticket Number</th>
        <th>Customer Id</th>
        <th>Route Id</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Cost</th>
        <th>Number of Tickets</th>
        <th>Total</th>
        
        <tr>
    
    <?php 
       while($logs=mysqli_fetch_assoc($records)){
           
          echo"<tr>"; 
           
           
           
         echo"<td>".$logs['b.ticket_no']."</td>";
         echo"<td>".$logs['b.customer_id']."</td>";
         echo"<td>".$logs['route_id']."</td>";
         echo"<td>".$logs['s.stop_name']."</td>";
         echo"<td>".$logs['d.stop_name']."</td>";
         echo"<td>".$logs['t.total']."</td>";     
         echo"<td>".$logs['b.no_oftickets']."</td>";  
         echo"<td>".$logs['b.total']."</td>";
             
            
         echo"<tr>";    
       }
        
        ?>
    
    
    
    </table>
 
       
    </body>

  

</html>