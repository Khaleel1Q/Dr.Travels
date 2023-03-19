
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
           
   
        <form class="login form" action="server3.php" method="post" >
      
            <p>Phone Number</p>
        <input type="text" name="ph_no" placeholder="Enter ph_no" ph_no="ph_no" pattern="[789][0-9]{9}" required>
            <p>Password</p>
        <input type="password" name="password_1" placeholder="Enter Password" id="password_1" required>
             <p>Confirm Password</p>
        <input type="password" name="password_2" placeholder="Confirm Password" id="password_2" required>
            <p>Type of User</p>
           
            <select name="type_of_user">
               
                 <option value=""> ......</option>
                <option value="driver">driver</option>
                  <option value="customer">customer</option>
               
            </select>
       
    <input type="submit" name="Signup" value="Signup" id="submit">
        <p> Already Registered Customer?? <a href=customersignin.html ><b>Signin</b></a> </p>
        <p> Already Registered Driver?? <a href=driversignin.html ><b>Signin</b></a> </p>
             <p>Go Back <a href=home.html ><b>Back</b></a> </p>
        </form>
        </div>
        </div>
           
 
</body>
       
</html>

