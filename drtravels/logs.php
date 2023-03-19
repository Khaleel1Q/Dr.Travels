<?php
$db=mysqli_connect('localhost','root','','drtravels') or die("could not connect to database");


$sql="select * from logs";

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
        <th>Entry Number</th>
        <th>Phone Number</th>
        <th>Password</th>
        <th>Action</th>
        <th>Date and Time of Action</th>
        
        <tr>
    
    <?php 
       while($logs=mysqli_fetch_assoc($records)){
           
          echo"<tr>"; 
           
           
           
         echo"<td>".$logs['ID']."</td>";
         echo"<td>".$logs['ph_no']."</td>";
         echo"<td>".$logs['Password']."</td>";
         echo"<td>".$logs['action']."</td>";
         echo"<td>".$logs['cdate']."</td>";
             
             
             
            
         echo"<tr>";    
       }
        
        ?>
    
        <h2><p> Go Back <a href=main.html ><b>Back</b></a> </p></h2>
    
    </table>
   <h3> <button title="PrintScreen" alt="PrintScreen" onclick="window.print(); "target="_blank" style="cursor:pointer;">Print</button></h3> 
     
 
 
       
    </body>

   

</html>