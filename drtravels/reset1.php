<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   
<title> Login Form</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="login-box">
        <img src="travel.avtar.png" class="avatar">
        <div class="form">
           
   
        <form class="login form" action="server2.php" method="post" >
      
            <p>Phone Number</p>
        <input type="text" name="ph_no" placeholder="Enter ph_no" ph_no="ph_no" required>
            <p>New Password</p>
        <input type="password" name="password_1" placeholder="Enter Password" id="password_1" required>
             <p>Confirm New Password</p>
        <input type="password" name="password_2" placeholder="Confirm Password" id="password_2" required>
            
            <input type="submit" name="Reset" value="Reset" id="submit">
        <p> Back <a href=home.html ><b>Signin</b></a> </p>
        <p> New User?? <a href=signup.php ><b>Signup</b></a> </p>
        </form>
        </div>
        </div>
           
 
</body>
       
</html>

            