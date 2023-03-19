
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
           
   
        <form class="login form" action="server.php" method="post" >
           
            <p>Phone Number</p>
        <input type="text" name="ph_no" placeholder="Enter ph_no" ph_no="ph_no" pattern="[6789][0-9]{9}" required>
            <p>Password</p>
        <input type="password" name="password_1" placeholder="Enter Password" id="password_1" required>
             <p>Type of User</p>
           
            <select name="type_of_user">
               
                 <option value=""> ......</option>
                <option value="driver">driver</option>
                  <option value="customer">customer</option>
               
            </select>
           
    <input type="submit" name="Signin" value="Signin" id="submit">
            <p> Forgot Password?? <a href=reset1.php ><b>Reset Password</b></a> </p>
            <p> New User?? <a href=signup.php ><b>Signup</b></a> </p>
        </form>
        </div>
        </div>
           
 
</body>
       
</html>

