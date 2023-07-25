<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
</head>
<body>
<h1>Admin Login Form</h1>
    <form action="adminlogindb.php" method="post" id="aform">

    
    <label for="adminemail">EmailAddress:</label>
    <input type="email" id="adminemail" name="adminemail" placeholder="abc@gmail.com">
    <br>
    <br>
    
    
    <label for="adminpw">Password:</label>
    <input type="password" id="adminpw" name="adminpw" placeholder="*****">
    <br>
    <br>

    <input type="submit" value="Login" id="btn">
    </form>
</body>
</html>